<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ChefList extends Component
{
    use WithPagination;
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
        $chefs = User::list()->filter([
            'search' => $this->search,
            'sort' => $this->sort,
        ])->paginate(8);
        return view('livewire.chef-list', ['chefs' => $chefs]);
    }
}
