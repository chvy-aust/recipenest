<x-mylayouts.layout-prototype>
    <section>
    <div class="container">
        <div class="section-title-container d-flex align-items-center justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#" class="text-secondary">home</a></li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-secondary">recipes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $recipe->title }}</li>
                    </ol>
                </nav>
            </div>

      <div class="row gx-5">
        <div class="col-lg-8">
          <section id="" class="recipe-details section">
              <article class="container">
                <img src="{{ $recipe->getImage() }}" alt="" class="img-fluid post-img">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="title">{{ $recipe->title }}</h2>
                    <button><i class="bi bi-share-fill" style="font-size:20px;"></i></button>
                </div>


                <hr style="margin:10px 0px 15px 0px;">
                      <div class="meta-top">
                        <p class="post-author-details">
                            Posted by <a href="{{ $recipe->user->getLink() }}">{{ $recipe->user->name }}</a> on {{ $recipe->created_at->toFormattedDateString() }}</p>
                        <span class="px-3 text-black-50" style="color:grey;">|</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-chat-dots-fill" style="color:grey;"></i> <span class="ps-2" style="color:grey;">12</span>
                        </div>
                      </div><!-- End meta top -->

                <div class="content">
                  <p>
                    Hello friends! Ji-Ji here. You know, the smells and tastes of my childhood aren't in a fancy restaurant or a bustling market. They’re in my grandmother’s small kitchen, watching her hands move with a love that only decades of cooking can bring. For me, comfort has a specific flavor. It's the gentle, savory warmth of her miso soup.

                    This recipe is my personal take on that classic comfort, but it’s also my way of keeping her close. It’s built on the same humble, beautiful ingredients she used, each one bringing its own texture and story to the bowl. So! Let me not keep you waiting and me share it with you!
                </p>

                  <hr>

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
                <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">
                </div><!-- End post content -->

                <div class="meta-bottom">
                  <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-tags-fill"></i><span class="ps-2" style="color:grey;">Tags: Japanese, Vegetarian, Beginner Friendly, Soup</span>
                        </div>
                      </div>
                </div>

              </article>
          </section>

          <!-- Blog Comments Section -->
          <section id="recipe-comments" class="recipe-comments section">

            <div class="container">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->

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

              <div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                      Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                    </p>
                  </div>
                </div>

              </div><!-- End comment #3 -->

              <div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                    </p>
                  </div>
                </div>

              </div><!-- End comment #4 -->

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

        <div class="col-lg-4 sidebar">

          <div class="widgets-container" style="margin-top:17px;">

            <!-- Blog Author Widget -->
            <div class="recipe-author-widget widget-item" style="border:black solid 3px;">

              <div class="d-flex flex-column">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('storage/images/profiles/jia-xifeng-chef.jpg') }}" class="rounded flex-shrink-0" alt="" style="border:black solid 3px; max-height: 200px;">
                  {{-- img rounded-circle --}}
                  <div class="flex-grow-1" style="padding-right:15px;">
                    <div class="badge-bar">
                        <span class="badge green">veteran chef</span>
                        <span class="badge red">communitity favourite</span>
                        <span class="badge red">sweet tooth</span>
                        <span class="badge green">verified</span>
                        <button class="more-btn"></button>
                    </div>
                    <h4 class="recipe-author-name">Jia Xifeng</h4>
                  </div>
                </div>

                <hr style="margin:15px 0px;">

                <p>
                 Hi Hello! My name is Jia and I love love making food! I
                 have been in the industry for over 15 years
                 with my own family-run restaurant. We love everything plant-based
                 over here and I look forward to sharing my recipes with you all.
                </p>

                <hr style="margin:15px 0px;">

                <p style="font-weight:bold;">
                    View Profile >
                </p>

              </div>

            </div><!--/Blog Author Widget -->

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
    </div>
</section>
</x-mylayouts.layout-prototype>
