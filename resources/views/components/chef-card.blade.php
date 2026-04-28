@props(['chef', 'mode' => 'compact'])

<div class="chef-card">
    <div style="position:relative;">
        {{-- PROFILE HEADER + PICTURE --}}
        <img class="profile-header" loading="lazy" src="{{ $chef->getHeader() }}" alt="{{ $chef->name}}'s Profile Header">
        <img class="profile-picture rounded-circle" loading="lazy" src="{{ $chef->getImage() }}"
            alt="{{ $chef->name}}'s Profile Picture">
        <img class="profile-picture-bg rounded-circle">
        {{-- END CHEF PROFILE HEADER + PICTURE --}}


        {{-- WHITESPACE --}}
        <div class="profile-picture-under"></div>
        {{-- END WHITESPACE --}}

    </div>
    <div class="d-flex flex-column profile-container flex-grow-1">
        {{-- PROFILE BADGES + NAME + QUOTE --}}
        <h1>{{ $chef->name }}</h1>
        <span class="profile-quote" title="{{ $chef->short_description }}">{{ $chef->short_description }}</span>
        <div class="badge-bar">
            @foreach ( $chef->badges as $badge )
            <span class="badge {{ $badge->color }}">
                {{ $badge->icon }} {{ $badge->name }}
            </span>
            @endforeach
            <button class="more-btn"></button>
        </div>

        {{-- END PROFILE BADGES + NAME + QUOTE --}}


        @if ($mode === 'full')
        {{-- PROFILE DESC + METADATA --}}
            <span class="separator"></span>
            <div class="profile-bio flex-grow-1 mb-2"><p>{{ $chef->full_description }}</p></div>
            <div class="d-flex align-items-center justify-content-between">
                <p class="profile-join m-0">Joined {{ $chef->created_at->toFormattedDateString() }}</p>
                <div class="social-links d-flex gap-1">
                    {{-- only show social media buttons if linked --}}
                    @if ($chef->twitter)<a href="{{ $chef->twitter }}"><i class="bi bi-twitter-x"></i></a>@endif
                    @if ($chef->tiktok)<a href="{{ $chef->tiktok }}"><i class="bi bi-tiktok"> </i></a>@endif
                    @if ($chef->facebook)<a href="{{ $chef->facebook }}"><i class="bi bi-facebook"></i></a>@endif
                    @if ($chef->instagram)<a href="{{ $chef->instagram }}"><i class="bi bi-instagram"> </i></a>@endif
                    @if ($chef->youtube)<a href="{{ $chef->youtube }}"><i class="bi bi-youtube"> </i></a>@endif
                </div>
            </div>
        {{-- END PROFILE DESC + METADATA --}}
        @else
            <span class="separator"></span>
            <div class="align-items-end">
                <a href="{{ $chef->getLink() }}" class="readmore"><span>View Profile</span><i class="bi bi-arrow-right-circle-fill"></i></a>
            </div>

        @endif

    </div>
</div>


