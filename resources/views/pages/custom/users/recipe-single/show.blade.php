@php
    $tags = $recipe->tags->pluck('name')->implode(', ');
@endphp

<x-mylayouts.layout-prototype>
    <section class="recipe-single">
        <div class="container">
            {{-- BREADCRUMBS CONTAINER --}}
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('recipes.index') }}">recipes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $recipe->title }}</li>
                    </ol>
                </nav>
            </div>

            <div class="row gx-5 pb-4">
                {{-- RECIPE DETAILS + COMMENT SECTION --}}
                <div class="col-12 col-lg-8">
                    <article class="recipe-details">
                        {{-- RECIPE POST IMAGE  --}}
                        <img src="{{ $recipe->getImage() }}" alt="{{ $recipe->name }} Image" class="img-fluid post-img">
                        <span class="separator"></span>

                        {{-- RECIPE TOP-META DETAILS --}}
                        <div class="d-flex align-items-center justify-content-between">
                            {{-- Author Name--}}
                            <p class="post-author-details"><a href="{{ $recipe->user->getLink() }}"> {{ $recipe->user->name }}</a></p>
                            <span class="separator-vertical">|</span>
                            {{-- Comment Count --}}
                            <p class="post-author-details"><i class="bi bi-chat-dots-fill me-2"></i>{{ $recipe->comments->count() }} Comments</p>
                            {{-- Date --}}
                            <span class="separator-vertical">|</span>
                            <p class="post-author-details">{{ $recipe->created_at->toFormattedDateString() }}</p>
                        </div>

                        <div class="recipe-content">
                            {{-- RECIPE SHORT DESCRIPTION --}}
                            <div class="recipe-title-description">
                                <span class="separator"></span>
                                <h2 class="title">{{ $recipe->title }}</h2>
                                <p class="text-align-justify"> {!! $recipe->short_description !!} </p>
                                <span class="separator"></span>
                            </div>

                            {{-- RECIPE SERVING SIZE + TIME --}}
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0"><i class="bi bi-fork-knife me-2"></i>Yield: NA</p>
                                <span class="separator-vertical">|</span>
                                <p class="text-muted mb-0"><i class="bi bi-alarm me-2"></i>Total Time: {{ $recipe->total_time }} {{ $recipe->total_time_unit }}</p>
                            </div>

                            {{-- RECIPE FULL DESCRIPTION --}}
                            <div class="recipe-full-description">
                                <span class="separator"></span>
                                <p style="text-align:justify;"> {!! $recipe->full_description !!} </p>
                            </div>

                            {{-- RECIPE INGREDIENTS --}}
                            <div class="recipe-ingrediants">
                                <h3>Ingredients</h3>
                                <span class="separator"></span>
                                <p>{!! $recipe->ingredients !!}</p>
                            </div>

                            {{-- RECIPE INSTRUCTIONS --}}
                            <div class="recipe-instructions">
                                <h3>Instructions</h3>
                                <span class="separator"></span>
                                <p>{!! $recipe->instructions !!}</p>
                            </div>
                        </div>

                        <div class="recipe-tag-update align-items-center">
                            {{-- RECIPE LAST UPDATE TIME + TAGS --}}
                            <span class="separator"></span>
                            <p class="text-muted mb-0"><i class="bi bi-tags-fill text-muted pe-2"></i>Tags: {{ $tags }}</p>
                            <p class="text-muted mb-0"><i class="bi bi-clock text-muted pe-2"></i>Last Updated: {{ $recipe->updated_at }}</p>
                        </div>
                    </article>

                    <!-- RECIPE COMMENT FORM -->

                    <section id="comment-form" class="comment-form section">
                        <h4 class="my-3"><b>{{ $recipe->comments->count() }} Comments</b></h4>
                        <div class="container px-0">

                            <form method="POST" action="{{ route('comments.store', $recipe)}}">
                                @csrf
                                <h4>Post a Comment!</h4>
                                @guest
                                    <p class="text-muted mb-0"><i>Log in today to leave a super cool comment on this recipe.</i></p>
                                @endguest
                                @auth
                                    <span class="separator"></span>
                                    <div class="row">
                                        <div class="col form-group">
                                            <textarea name="comment" class="form-control" placeholder="Your Comment" maxlength="1500" style="resize:none"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit">Post Comment</button>
                                    </div>
                                @endauth
                            </form>
                        </div>
                    </section>

                    {{-- COMMENT SECTION --}}
                    <section id="recipe-comments" class="recipe-comments">
                            {{-- COMMENT ITEMS --}}
                            @forelse ( $comments as $comment )
                                <div class="comment">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $comment->user->getImage() }}" alt="">
                                            <div class="align-items-center">
                                                <h5><a href="{{ $comment->user->getLink() }}">{{ $comment->user->name }}</a></h5>
                                                <p class="mb-0">{{ $comment->created_at->toFormattedDateString() }}</p>
                                            </div>
                                    </div>
                                    <span class="separator"></span>
                                    <p>{{ $comment->content }}</p>
                                </div>
                            @empty
                                <p class="text-muted"><i>Be the first one to leave a comment.</i></p>
                            @endforelse
                            {{-- END COMMENT ITEMS --}}

                            {{-- COMMENT PAGINATION --}}
                            <div class="d-flex justify-content-center mt-5">
                                {{ $comments->fragment('recipe-comments')->links() }}
                            </div>
                            {{-- END COMMENT PAGINATION --}}
                    </section>
                    {{-- END COMMENT SECTION --}}
                </div>
                {{-- RECIPE SINGLE SIDEBAR --}}
                <div class="col-12 col-lg-4">
                    <!-- Author Profile -->
                    <x-chef-card :chef="$recipe->user"/>
                    <span class="separator"></span>
                    <span class="recommended-recipes-header">More Posts like This</span>
                    <span class="separator"></span>
                    {{-- MORE RECIPES FROM THE AUTHOR --}}
                    <div class="row gx-1 gy-1">
                    @if ($recommendedRecipes->count() == 4)
                        @foreach ($recommendedRecipes as $recipe)
                            <div class="recommended-recipe col-6">
                                <a href="{{ $recipe->getLink() }}" title="{{ $recipe->name }}">
                                    <img src="{{ $recipe->getImage() }}" alt="{{ $recipe->name }} Image">
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted"><i>> This chef doesn't have enough recipes yet...</i></p>
                    @endif
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-mylayouts.layout-prototype>
