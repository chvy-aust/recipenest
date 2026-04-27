<x-mylayouts.layout-prototype>
    <section class="chef-profile">
        <div class="container">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('chefs.index') }}">chefs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $chef->name }}</li>
                    </ol>
                </nav>
            </div>

            <div class="row gx-5">
                {{-- CHEF PROFILE CARD --}}
                <div class="col-12 col-lg-6 mb-3">
                    <x-chef-card :chef="$chef" mode="full"/>
                </div>
                {{-- END CHEF PROFILE CARD --}}

                {{-- CHEF PORTFOLIO --}}
                <div class="col-12 col-lg-6 d-flex flex-column mb-3">
                    <div class="portfolio-header col-12 justify-content-center">
                        <p class="mb-0">@ {{ $chef->name}}'s official portfolio</p>
                    </div>
                    <div class="portfolio-container">
                        <section id="recipe-posts" class="recipe-posts section">
                            <div class="container ps-0">
                                <div class="row d-flex gy-4">
                                    @foreach ($featured_data as $recipe)
                                        <div class="col-lg-12"><x-recipe-card :recipe="$recipe" /></div>
                                    @endforeach
                                    @if ($featured_data->isEmpty())
                                        <div class="col-12 text-center py-5">
                                            <p class="text-muted">🧑‍🍳 This chef is still cooking up their portfolio!</p>
                                        </div>
                                    @else
                                        <div class="portfolio-footer col-12 justify-content-center">
                                            <p class="mb-0 mt-1">End of Portfolio</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-mylayouts.layout-prototype>
