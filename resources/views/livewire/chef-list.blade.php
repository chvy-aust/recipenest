<div>
    {{-- SEARCH BAR --}}
    <input wire:model.live="search" class="search-bar flex-grow-1" type="text" placeholder=" searching for talented chefs ... ">
    {{-- END SEARCH BAR --}}
    <hr>
    {{-- CHEF CARDS --}}
    <div class="row gy-4">
        @forelse ($chefs as $chef)
            <div class="chef col-lg-6">
                <x-chef-card :chef="$chef"/>
            </div>
        @empty
            <div class="vh-100 d-flex justify-content-center align-items-center">
                <p class="text-muted fs-5 fst-italic">🦗 crickets...</p>
            </div>
        @endforelse
    </div>
    {{-- END CHEF CARDS --}}

    {{-- CHEF PAGINATION --}}
    <div class="d-flex justify-content-center mt-5">
        {{ $chefs->links() }}
    </div>
    {{-- END CHEF PAGINATION --}}
</div>
