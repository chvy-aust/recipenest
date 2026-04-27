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
                        <li class="breadcrumb-item"><a href="#">home</a></li>
                        <li class="breadcrumb-item"><a href="#">recipes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $recipe->title }}</li>
                    </ol>
                </nav>
            </div>

        <div class="row gx-5">
            <div class="col-lg-8">
                <article class="recipe-details">
                        <img src="{{ $recipe->getImage() }}" alt="{{ $recipe->title }} Picture" class="img-fluid post-img">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="title">{{ $recipe->title }}</h2>
                            <button><i class="bi bi-share-fill" style="font-size:20px;"></i></button>
                        </div>
                        <hr>
                        <div class="meta-top">
                            <p class="post-author-details">
                                Posted by <a href="{{ $recipe->user->getLink() }}">{{ $recipe->user->name }}</a> on {{ $recipe->created_at->toFormattedDateString() }}</p>
                            <span class="px-3 text-black-50" style="color:grey;">|</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-chat-dots-fill" style="color:grey;"></i> <span class="ps-2" style="color:grey;">{{ $recipe->comments->count() }}</span>
                            </div>
                        </div><!-- End meta top -->

                    <div class="content">
                        <p>{{ $recipe->short_description }}</p>
                        <hr>
                        <p>{{ $recipe->full_description }}</p>

                        <p><strong>Servings:</strong> 4<br>
                        <strong>Prep time:</strong> 10 minutes<br>
                        <strong>Cook time:</strong> 15 minutes</p>

                        <hr>

                        <h2>Ingredients</h2>
                        <hr>
                        <p>{{!! $recipe->ingredients !!}}</p>

                        <hr>
                        <h2>Instructions</p></h2>
                        <hr>
                        <p>{{!! $recipe->instructons !!}}</p>
                    </div><!-- End post content -->

                    <div class="meta-bottom">
                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">

                            </div>
                        </div>
                    </div>
                </article>

                <!-- Blog Comments Section -->
            <section id="recipe-comments" class="recipe-comments section">
                <div class="container">
                <h4 class="comments-count">{{ $recipe->comments->count() }} Comments</h4>
                @foreach ( $recipe->comments as $comment )
                    @unless ($comment->parent)
                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img">
                                    <img src="{{ $comment->user->getImage() }}" alt="">
                                </div>
                                <div>
                                    <h5><a href="">{{ $comment->user->name }}</a> <a href="{{ $comment->user->getLink() }}" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <p>{{ $comment->created_at }}</p>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                            </div>
                    @endunless
                @endforeach
                <div id="comment-2" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan,2022</time>
                                <p>
                                Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                                </p>
                            </div>
                        </div>

                    <div id="comment-reply-1" class="comment comment-reply">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                            <div>
                            <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2020-01-01">01 Jan,2022</time>
                            <p>
                                Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                                Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                            </p>
                            </div>
                        </div>

                        <div id="comment-reply-2" class="comment comment-reply">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                        Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                                        </p>
                                    </div>
                            </div>
                        </div><!-- End comment reply #2-->

                    </div><!-- End comment reply #1-->

                </div><!-- End comment #2-->
                </div>
            </section><!-- /Blog Comments Section -->

                <!-- Comment Form Section -->
                <section id="comment-form" class="comment-form section">
                    <div class="container">
                        <form action="">
                            <h4>Post Comment</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col form-group">
                                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                            </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Post Comment</button>
                                </div>
                        </form>
                        </div>
                    </section><!-- /Comment Form Section -->
                </div>



        </div>

        <div class="col-lg-4 sidebar">

            <div class="widgets-container" style="margin-top:17px;">


                <!-- Recent Posts Widget -->
                <div class="recent-posts-widget widget-item" style="border:black solid 3px;">

                <h3 class="widget-title">More Posts like This</h3>

                <hr style="margin: 10px 0px 15px 0px;">

                <div class="post-item">
                    <img src="{{ asset('storage/images/media/recipe7.jpg') }}" alt="" class="flex-shrink-0 rounded">
                    <div>
                    <h4><a href="recipe-details.html">Constellation Cauliflower Soup</a></h4>
                    <div class="meta-bottom">
                    <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill" style="color:grey;"></i><span class="ps-2" style="color:grey;">Tags: Soup, Beginner Friendly...</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End recent post item-->

                <hr>
                <div class="post-item">
                    <img src="{{ asset('storage/images/media/recipe8.jpg') }}" alt="" class="flex-shrink-0 rounded">
                    <div>
                    <h4><a href="blog-details.html">Eel Rice Bowl (Unadon)</a></h4>
                    <div class="meta-bottom">
                    <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill" style="color:grey;"></i><span class="ps-2" style="color:grey;">Tags: Japanese, Sweet & Savory...</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <hr>
                <div class="post-item">
                    <img src="{{ asset('storage/images/media/recipe9.jpg') }}" alt="" class="flex-shrink-0 rounded">
                    <div>
                    <h4><a href="blog-details.html">Miso-Glazed Eggplant</a></h4>
                    <div class="meta-bottom">
                    <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill" style="color:grey;"></i><span class="ps-2" style="color:grey;">Tags: Sweet & Savory, Vegetarian...</span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                    <img src="{{ asset('storage/images/media/recipe7.jpg') }}" alt="" class="flex-shrink-0 rounded">
                    <div>
                    <h4><a href="blog-details.html">Constellation Cauliflower Soup</a></h4>
                    <div class="meta-bottom">
                    <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill" style="color:grey;"></i><span class="ps-2" style="color:grey;">Tags: Soup, Beginner Friendly...</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                    <img src="{{ asset('storage/images/media/recipe7.jpg') }}" alt="" class="flex-shrink-0 rounded">
                    <div>
                    <h4><a href="blog-details.html">Constellation Cauliflower Soup</a></h4>
                    <div class="meta-bottom">
                    <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                            <i class="bi bi-tags-fill" style="color:grey;"></i><span class="ps-2" style="color:grey;">Tags: Soup, Beginner Friendly...</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- End recent post item-->


                </div><!-- End recent post item-->

                </div><!--/Recent Posts Widget -->

                <!-- Tags Widget -->
                <div class="tags-widget widget-item">

                <h3 class="widget-title">Tags</h3>
                <ul>
                    <li><a href="#">App</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Mac</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Office</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Studio</a></li>
                    <li><a href="#">Smart</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                </ul>

                </div><!--/Tags Widget -->

            </div>

            </div>

        </div>

    </section>
</x-mylayouts.layout-prototype>
