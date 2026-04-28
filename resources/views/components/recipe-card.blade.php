{{-- recipe parameter --}}
@props(['recipe'])


@php
    $tags = $recipe->tags->pluck('name')->implode(', ');
@endphp

<article class="recipe-card">
    <div class="position-relative h-100">
       <div class="meta d-flex align-items-center mb-3">
            <div class="flex-grow-1">
                <i class="bi bi-person-circle chef-icon" style="color:black;"></i>
                <a href="{{ $recipe->user->getLink() }}" class="ps-2 chef-link">{{ $recipe->user->name }}</a>
            </div>
            <div class="d-flex align-items-center">
                <span class="post-date">{{ $recipe->publish_date->format('M jS Y') }}</span>
                <span class="separator-vertical">|</span>
                {{-- Comment Count --}}
                <spam class="post-author-details text-muted"><i class="bi bi-chat-dots-fill me-2"></i>{{ $recipe->comments->count() }} </span>
            </div>
        </div>
        <div class="post-img position-relative overflow-hidden">
            <img src="{{ $recipe->getImage() }}" alt="{{ $recipe->title }}">
        </div>

        <div class="post-content d-flex flex-column">
            <h3 class="post-title">{{ $recipe->title }}</h3>
            <div class="description">
                <p>{{ $recipe->full_description }}</p>
            </div>
            <span class="separator"></span>
            <div class="meta tags d-flex align-items-center nowrap-text">
                <i class="bi bi-tags-fill me-2"></i>
                <span class="d-flex align-items-center gap-2" title="{{ $tags }}">{{ $tags }}</span>
            </div>
            <span class="separator"></span>
            <a href="{{ $recipe->getLink() }}" class="readmore"><span>Read More</span><i class="bi bi-arrow-right-circle-fill"></i></a>
        </div>
    </div>
</article>


