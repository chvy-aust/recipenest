<?php

namespace App\Livewire;

use App\Models\Recipe;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class RecipeList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $paginationView = 'recipenest-pagination';

    public $search = "";
    public $sort = "recent";
    public $tags = '';
    protected $queryString = ['search', 'sort', 'tags'];

    public function updatingSort()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingTags()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->sort = 'recent';
        $this->tags = '';
        $this->resetPage();
    }

    public function render()
    {
        $recipes = Recipe::list()->filter([
            'search' => $this->search,
            'sort' => $this->sort,
            'tags' => $this->tags,
        ])->paginate(8);
        return view('livewire.recipe-list', ['recipes' => $recipes]);
    }
}
