<x-mylayouts.layout-prototype>
    <section class="chef-profile">
        <div class="container">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">home</a></li>
                        <li class="breadcrumb-item"><a href="#">chefs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $chef->name }}</li>
                    </ol>
                </nav>
            </div>

            <div class="row gx-5">
            {{-- CHEF PROFILE HEADER + PICTURE --}}
                <div class="col-12 col-lg-6 mb-3">
                    <div style="position:relative;">
                        <img class="profile-header" loading="lazy"
                            src="{{ $chef->getHeader() }}"
                            alt="Chef Profile Header">
                        <img class="profile-picture rounded-circle" loading="lazy"
                                src="{{ $chef->getImage() }}"
                                alt="Chef Profile Picture">
                        <img class="profile-picture-bg rounded-circle">
                        <div class="profile-picture-under d-flex">
                            <div class="col-6">
                            {{-- EMPTY SPACE --}}
                            </div>
                            <div class="col-6 justify-content-right profile-nav">
                            <button class="link follow-btn"><i class="bi bi-person-fill-add"></i> follow</a>
                            </div>
                        </div>

                    </div>
                    {{-- NAV BAR --}}
                    <div class="d-flex flex-column profile-container">
                        <h1>{{ $chef->name }}</h1>
                        <h6>{{ $chef->short_description }}</h6>
                        <div class="badge-bar">
                                @foreach ( $chef->badges as $badge )
                                    <span class="badge {{ $badge->color }}">{{ $badge->icon }} {{ $badge->name }}</span>
                                @endforeach
                                <button class="more-btn"></button>
                        </div>
                        <hr style="margin:5px 0px;">
                        <div class="profile-bio flex-grow-1 mb-2">
                            <p>{{ $chef->full_description }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="profile-join-date m-0">
                                Joined {{ $chef->created_at->toFormattedDateString() }}
                            </p>
                            <div class="social-links d-flex gap-1">
                                @if ($chef->twitter)
                                    <button><i class="bi bi-twitter-x"></i></button>
                                @endif
                                @if ($chef->tiktok)
                                    <button><i class="bi bi-tiktok"> </i></button>
                                @endif
                                @if ($chef->facebook)
                                    <button><i class="bi bi-facebook"> </i></a>
                                @endif
                                @if ($chef->instagram)
                                    <button><i class="bi bi-instagram"> </i></a>
                                @endif
                                @if ($chef->youtube)
                                    <button><i class="bi bi-youtube"> </i></button>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>

                {{-- CHEF PORTFOLIO --}}
                <div class="col-12 col-lg-6 d-flex flex-column">
                    <div class="portfolio-header col-12 justify-content-center">
                        <p class="mb-0">@ official-agostino-archives's recipe portfolio</p>
                    </div>

                    <div class="portfolio-container">
                        <section id="recipe-posts" class="recipe-posts section">
                            <div class="container ps-0">

                            <div class="row d-flex">
                                @foreach ($featured_data as $recipe)
                                <div class="col-lg-12 recipe-card">
                                <article class="position-relative h-100">
                                    <div class="meta d-flex align-items-center mb-3">
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <i class="bi bi-person-circle chef-icon" style="color:black;"></i>
                                                <a href="{{ $chef->getLink() }}" class="ps-2 chef-link">{{ $recipe->user->name }}</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                            <span class="post-date">{{ $recipe->created_at->format('M jS Y') }}</span>
                                            </div>
                                        </div>
                                    <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ $recipe->getImage() }}" alt="">
                                    </div>

                                    <div class="post-content d-flex flex-column">
                                        <h3 class="post-title">{{ $recipe->title }}</h3>

                                        <div class="description" style="">
                                            <p>{{ $recipe->full_description }}</p>
                                        </div>

                                        <div class="meta tags d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                            <i class="bi bi-tags-fill"></i><span> Tags: Breakfast and Brunch, Sweet, Pastry</span>
                                            </div>
                                        </div>

                                        <a href="{{ $recipe->getLink() }}" class="readmore"><span>Read More</span><i class="bi bi-arrow-right-circle-fill"></i></a>
                                    </div>
                                </article>
                                </div>
                                @endforeach
                                @if ($featured_data->isEmpty())
                                    <div class="col-12 text-center py-5">
                                        <p class="text-muted">🧑‍🍳 This chef is still cooking up their portfolio!</p>
                                    </div>
                                @else
                                    <div class="portfolio-footer col-12 justify-content-center">
                                        <p class="mb-0 mt-2">End of Portfolio</p>
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
