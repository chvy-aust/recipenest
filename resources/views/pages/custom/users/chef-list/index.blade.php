<x-mylayouts.layout-prototype>
    <section class="chef-list">
        <div class="container">
            {{-- BREADCRUMBS CONTAINER --}}
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">chefs</li>
                    </ol>
                </nav>
            </div>
            {{-- END BREADCRUMBS CONTAINER --}}
            
            {{-- SEARCH BAR --}}
            <div class="d-flex gap-2">
                <button class="filter"><i class="bi bi-filter"></i></button>
                <input class="search-bar flex-grow-1" type="text" placeholder=" searching for talented chefs ... ">
                <button class="search-btn px-2"><i class="bi bi-search"></i></button>
            </div>
            {{-- END SEARCH BAR --}}
            <hr>

            {{-- CHEF CARDS --}}
            <div class="row gy-4">
                @foreach ($chef_data as $chef)
                <div class="chef col-12 col-lg-6">
                    <x-chef-card :chef="$chef"/>
                </div>
                @endforeach
            </div>
            {{-- END CHEF CARDS --}}

            {{-- CHEF PAGINATION --}}
                <div class="d-flex justify-content-center mt-5">
                    {{ $chef_data->appends(request()->query())->links() }}
                </div>
            {{-- END CHEF PAGINATION --}}
        </div>
    </section>
</x-mylayouts.layout-prototype>
