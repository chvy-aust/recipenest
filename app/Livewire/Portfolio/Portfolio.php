<?php

namespace App\Livewire\Portfolio;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class Portfolio extends Component
{
    public $search = '';
    public $sort = '';
    public $chef;
    public $values = [];

    /**
     * Undocumented function
     *
     * @param array $values
     * @return void
     */
    #[On('filter-recipe')]
    public function updateFilter(array $values)
    {
        $this->values['search'] = $values['search'] ?? $this->search;
        $this->values['sort'] = $values['sort'] ?? $this->sort;
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function filter()
    {
        $this->values['search'] = $this->search;
        $this->values['sort'] = $this->sort;
    }

    public function mount(User $chef)
    {
        $this->chef = $chef;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function render()
    {
        $recipe_data = $this->chef->recipes()->filter($this->values)->where('public', true)->paginate(3);
        return view('pages/custom/users/portfolio/portfolio', [
            'recipe_data' => $recipe_data,
        ]);
    }
}
