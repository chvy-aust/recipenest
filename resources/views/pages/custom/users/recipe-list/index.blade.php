<x-mylayouts.layout-prototype>
    <section class="recipe-list">
        <div class="container">
            {{-- BREADCRUMBS CONTAINER --}}
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">recipes</li>
                    </ol>
                </nav>
            </div>
            {{-- SEARCH BAR --}}
            <div class="d-flex gap-2">
                <button class="filter"><i class="bi bi-filter"></i></button>
                <input class="search-bar flex-grow-1" type="text" placeholder=" searching for delicious recipes ... ">
                <button class="search-btn px-2"><i class="bi bi-search"></i></button>
            </div>
            <hr>

            <div class="row gy-4 px-0">
                @foreach ($recipes as $recipe)
                    <div class="col-lg-6"><x-recipe-card :recipe="$recipe" /></div>
                @endforeach
            </div>

            <section id="blog-pagination" class="blog-pagination section">
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
        </div>
    </section>

</x-mylayouts.layout-prototype>
