<x-mylayouts.layout-prototype>


    <section class="chef-profile">
        <div class="container">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <div class="breadcrumb-section font-monospace">
                    <a href="#" class="previous text-muted">home /</a>
                    <a href="#" class="previous text-muted">chefs /</a>
                    <a href="#" class="previous" style="font-weight:bold;">Luigi D' Agostino</a>
                </div>
            </div>

            <div class="row gx-5">
            {{-- CHEF PROFILE HEADER + PICTURE --}}
                <div class="col-12 mb-3">
                    <div style="position:relative;">
                        <img class="profile-header" loading="lazy"
                            src="{{ asset('storage/images/profiles/luigi-agostino-chef-header.jpg') }}"
                            alt="Chef Profile Header">
                        <div class="col-6">
                            <img class="profile-picture rounded-circle" loading="lazy"
                                src="{{ $chef->getImage() }}"
                                alt="Chef Profile Picture">
                        </div>
                    </div>

                    <div class="col-12 d-flex bg-white" style="border: rgb(215, 215, 215) solid 1px; height:50px;">
                        <div class="col-4">
                            {{-- EMPTY SPACE --}}
                        </div>
                        <div class="col-8 justify-content-center profile-nav">
                            <a href="#" class="link follow-btn"><i class="bi bi-plus-circle"></i> FOLLOW</a>
                            <a href="#" class="link active-tab"><i class="fas fa-feather-pointed"></i>BIO</a>
                            <a href="#" class="link"><i class="bi bi-journals"></i> PORTFOLIO</a>
                        </div>
                    </div>
                </div>
                <div class="container px-4 col-12 mb-5 d-flex gx-3">
                    <div class="col-4 mt-5 pe-3 profile-sidebar">
                        <h3 class="my-0">{{ $chef->name }}</h3>

                        <p class="text-muted my-0">@ official-agostino-archives</p>
                        <p class="my-2">{{ $chef->short_description }}</p>
                        <div class="my-0 text-muted d-flex gap-2">
                            <i class="bi bi-calendar"></i>
                            <p>Joined {{ $chef->created_at->toFormattedDateString() }}</p>
                        </div>
                        <hr class="my-0">
                        <div class="mt-3 badge-bar">
                                <span class="badge red">italian connoisseur</span>
                                <span class="badge green">vegetarian 🥦</span>
                                <button class="more-btn"></button>
                        </div>
                    </div>
                    <div class="col-8 profile-bio">
                        <p class="">{{ $chef->full_description }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-mylayouts.layout-prototype>
