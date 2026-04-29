<div>
    {{-- SEARCH BAR --}}
        <div class="d-flex gap-2">
            <div class="position-relative" x-data="{ filterOpen: false }">
                <button class="filter filter-toggle" @click="filterOpen = !filterOpen">
                    <i class="bi bi-filter"></i>
                </button>
                <div class="filter-overlay mt-4" x-show="filterOpen" @click.away="filterOpen = false">
                    <div class="p-3">
                        <h5>Sort by</h5>
                        <select wire:model.live="sort" class="form-select">
                            <option value="recent">Most Recent</option>
                            <option value="oldest">Oldest</option>
                            <option value="most_comments">Most Comments</option>
                            <option value="least_comments">Least Comments</option>
                        </select>
                        <span class="separator"></span>
                        <h5>Filter by Tags</h5>
                        <input type="text" 
                            wire:model.live="tags" class="form-control" 
                            placeholder="e.g. Italian, Spicy, Vegan">
                        <small class="text-muted">Separate tags with commas (,)</small>
                    </div>
                </div>
            </div>
    
            <input wire:model.live="search" class="search-bar flex-grow-1" type="text" placeholder=" searching for delicious recipes ... ">
        </div>
        {{-- END SEARCH BAR --}}
        <hr>

        {{-- RECIPE CARDS --}}
        <div class="row gy-4 px-0">
            @forelse ($recipes as $recipe)
                <div class="col-lg-6">
                    <x-recipe-card :recipe="$recipe" />
                </div>
            @empty
                <div class="vh-100 d-flex justify-content-center align-items-center">
                    <p class="text-muted fs-5 fst-italic">🦗 crickets...</p>
                </div>
            @endforelse
        </div>
        {{-- END RECIPE CARDS --}}

        {{-- RECIPE PAGINATION --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $recipes->links() }}
        </div>
        {{-- END RECIPE PAGINATION --}}
</div>
