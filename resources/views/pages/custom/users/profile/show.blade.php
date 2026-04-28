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
                <div class="col-12 col-lg-6 mb-3">
                    <span class="portfolio-header">@ {{ $chef->name}}'s official portfolio</span>
                    <div class="portfolio container ps-0 pt-3">
                            @forelse ($featured_data as $recipe)
                                <div class="portfolio-item">
                                    <x-recipe-card :recipe="$recipe" />
                                </div>
                                @if($loop->last)
                                    <span class="portfolio-footer">End of Portfolio</span>
                                @endif
                            @empty
                                <span class="portfolio-placeholder col-12">🧑‍🍳 This chef is still cooking up their portfolio!</span>
                            @endforelse
                    </div>
                </div>
                {{-- END CHEF PORTFOLIO --}}
            </div>
        </div>
    </section>
</x-mylayouts.layout-prototype>
