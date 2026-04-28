<div>
    {{-- SEARCH BAR --}}
        <div class="d-flex gap-2">
            <button class="filter"><i class="bi bi-filter"></i></button>
            <input wire:model.live="search" class="search-bar flex-grow-1" type="text" placeholder=" searching for delicious recipes ... ">
        </div>
        {{-- END SEARCH BAR --}}
        <hr>

        {{-- RECIPE CARDS --}}
        <div class="row gy-4 px-0">
            @foreach ($recipes as $recipe)
                <div class="col-lg-6"><x-recipe-card :recipe="$recipe" /></div>
            @endforeach
        </div>

        {{-- RECIPE PAGINATION --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $recipes->links() }}
        </div>
    {{-- END RECIPE PAGINATION --}}
</div>
