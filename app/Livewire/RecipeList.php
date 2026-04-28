<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecipeList extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    protected $paginationView = 'recipenest-pagination';

    public $search = "";
    public $sort = "recent";
    protected $queryString = ['search', 'sort'];

    public function updatingSort()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $recipes = Recipe::list()->filter([
            'search' => $this->search,
            'sort' => $this->sort,
        ])->paginate(8);
        return view('livewire.recipe-list', ['recipes' => $recipes]);
    }
}
