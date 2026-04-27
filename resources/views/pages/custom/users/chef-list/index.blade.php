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

            <div class="row gy-4">
                {{-- CHEF CARDS --}}
                @foreach ($chef_data as $chef)
                <div class="chef col-12 col-lg-6">
                    <x-chef-card :chef="$chef"/>
                </div>
                @endforeach
                {{-- END CHEF CARDS --}}

                {{-- CHEF PAGINATION --}}
                <section class="pagination">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="m-auto mx-2">...</li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                {{-- END CHEF PAGINATION --}}
            </div>
        </div>
    </section>
</x-mylayouts.layout-prototype>
