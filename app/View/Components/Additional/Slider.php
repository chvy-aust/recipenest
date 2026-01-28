<?php

namespace App\View\Components\Additional;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Slider extends Component
{

    public int $responsiveItems = 1;

    /**
     * Render a new slider
     * Provide items or calculate based on total collection count
     *
     * @param Collection $collection - collection of data
     * @param string $id - html id
     * @param string $title - title of slider
     * @param integer $items - number of items to show per slider
     */
    public function __construct(
        public Collection $collection,
        public string $id = 'my-slider',
        public string $title = 'Slider',
        public int $items = 0
    ) {

        // Get total items
        $total = $collection->count();

        // Show one item per slide because total is 2
        if ($total == 2) {
            $this->items = 1;
            $this->default = 1;
            return;
        }

        // Determine how much to items to show
        $this->items = $this->itemsToShow($items, $total);

        // Responsive design for small screens, show 2 or 1 item per slide
        $this->responsiveItems = $this->items > 2 ? 2 : 1;
    }


    /**
     * Determine how many items to show per slide
     *
     * Items cannot be empty or the same as total, therefore use the default options
     * Items must be less than total, if so, return items value
     * By default, use 3 or 1 as items value
     *
     * @param [type] $items - Number of items to show per slide
     * @param [type] $total - Total number of items on slider
     * @return integer
     */
    private function itemsToShow($items, $total): int
    {
        // Use default options
        if (empty($items) || $items == $total) {
            return $this->defaultItems();
        }

        // Items must be less than total
        if ($items < $total) {
            return $items;
        }

        // Use default options
        return $this->defaultItems();
    }

    /**
     * By default return 3 items or 1 item per slide
     *
     * @return void
     */
    private function defaultItems()
    {
        return $this->collection->count() >= 4 ? 3 : 1;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('pages.additional.slider');
    }
}
