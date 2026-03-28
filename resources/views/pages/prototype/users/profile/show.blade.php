<x-mylayouts.layout-prototype :showSidebar="false" :col="12">


    <section class="profile">
        {{-- Source: https://bootstrapbrain.com/component/bootstrap-about-us-section-snippet-example/ --}}


        <!-- About 2 - Bootstrap Brain Component -->
        <section class="py-2">
            <div class="container">
                <div class="section-title-container d-flex align-items-center justify-content-between">
                    <div class="breadcrumb-section">
                        <a href="#" class="previous">home / chefs / </a>
                        <a href="#" class="previous" style="font-weight:bold;">Luigi D' Agostino</a>
                    </div>
                </div>
                <div class="row gy-3 gy-md-4 gy-lg-0">
                    <div class="col-12 col-lg-6">
                        <hr style="margin:10px 0px;">
                        <img class="profile-picture ratio ratio-4x3" loading="lazy"
                            src="{{ asset('storage/images/profiles/luigi-agostino-chef.jpg') }}"
                            alt="About 2">
                        <hr style="margin:10px 0px 0px 0px;">

                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row justify-content-xl-center">
                            <div class="col-12 col-xl-10">
                                <div class="d-flex align-items-center profile-name">
                                    <i class="bi bi-person-bounding-box"></i>
                                    <h2> Luigi D'Agostino</h2>
                                </div>

                                <hr style="margin:10px 0px;">
                                <div class="profile badge-bar">
                                    <span><i class="bi bi-bookmark-star-fill"></i></span>
                                    <span class="badge red">italian connoisseur</span>
                                    <span class="badge green">vegetarian 🥦</span>
                                </div>
                                <hr style="margin:0px;">
                                <div class="d-flex mb-2 mb-xl-2 profile-bio"><p>Born in the hearts of Parm with a decade of culinary experience, Luigi's portfolio is both fresh, healthy and delicious.
                                From his cherished Melanzane a Funghetto, to his Verdye Gratinate Al Forno, Luigi has served it all! Well, everything except meat, that is.</p></div>
                                <hr style="margin:10px 0px;">
                                <div class="d-flex align-items-center profile-contact-info">
                                    <i class="bi bi-envelope-at-fill"></i>
                                    <i class="bi bi-telephone-fill"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-instagram"></i>
                                    <i class="bi bi-twitter"></i>
                                    <i class="bi bi-tiktok"></i>
                                </div>
                                <hr style="margin:10px 0px;">
                                <div class="view-portfolio-btn">
                                    <i class="bi bi-caret-up-fill"></i>
                                    <h2>View Portfolio</h2>
                                    <i class="bi bi-caret-up-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section>
        <div class="container section-title" data-aos="fade-up" style="margin-bottom:5px;">
        <div class="section-title-container d-flex align-items-center justify-content-between">
            <input class="search-bar" style="margin:0px" type="text" placeholder=" searching for delicious recipes ... ">
            <button class="search-btn"><i class="bi bi-search-heart-fill"></i>SEARCH</button>
        </div>
        <div class="container d-flex align-items-left filter">
            <a href=""><i class="bi bi-sort-down-alt"></i></a>
            <p>filter</p>
        </div>
    </div>
    </section>

    <div class="col-lg-12">

          <!-- Blog Posts Section -->
          <section id="blog-posts" class="blog-posts section">

            <div class="container">
              <div class="row gy-4">

                <div class="col-lg-4">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="{{ asset('storage/images/media/recipe3.jpeg') }}" alt="">
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Vegetarian Muffuletta</h3>
                      <hr style="margin:0px 0px 15px 0px;">
                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person-square"></i><span class="ps-2">Luigi D'Agostino </span>
                        </div>
                        <span class="px-3 text-black-50">|</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-clock-fill"></i> <span class="ps-2">January 11th, 2026</span>
                        </div>
                      </div>

                      <p>
                       What if the least important part of a traditional muffuletta sandwich is the meat? When I think about this classic sandwich...

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-tags-fill"></i><span class="ps-2">Tags: Vegetarian, Sandwiches, Italian...</span>
                        </div>
                      </div>
                      <hr style="margin:15px 0px 15px 0px;">

                      <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-4">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="{{ asset('storage/images/media/recipe4.jpg') }}" alt="">
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Charred Scallion Gremolata</h3>
                      <hr style="margin:0px 0px 15px 0px;">
                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person-square"></i><span class="ps-2">Luigi D'Agostino </span>
                        </div>
                        <span class="px-3 text-black-50">|</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-clock-fill"></i> <span class="ps-2">January 5th, 2026</span>
                        </div>
                      </div>

                      <p>
                       I love how gremolata can brighten any dish and, being obsessed with charring all things citrus, decided to make a gremolata from...
                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-tags-fill"></i><span class="ps-2">Tags: Vegetarian, Low Effort, Gluten-Free...</span>
                        </div>
                      </div>
                      <hr style="margin:15px 0px 15px 0px;">

                      <a href="" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-4">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="{{ asset('storage/images/media/recipe5.jpg') }}" alt="">
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Creamy Vegetable Corn Soup</h3>
                      <hr style="margin:0px 0px 15px 0px;">
                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person-square"></i><span class="ps-2">Luigi D'Agostino </span>
                        </div>
                        <span class="px-3 text-black-50">|</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-clock-fill"></i> <span class="ps-2">December 30th, 2025</span>
                        </div>
                      </div>

                      <p>
                       A hearty and comforting soup that's perfect for the winter season, made with a variety of vegetables, corn, and a hint of...

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-tags-fill"></i><span class="ps-2">Tags: Breakfast and Brunch, Sweet, Pastry...</span>
                        </div>
                      </div>
                      <hr style="margin:15px 0px 15px 0px;">

                      <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->



              </div>
            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Blog Pagination Section -->
          <section id="blog-pagination" class="mt-3 blog-pagination section">

            <div class="container">
              <div class="d-flex justify-content-center">
                <ul>
                  <li><a href="#"><i class="bi bi-caret-left-fill"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="active">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="bi bi-caret-right-fill"></i></a></li>
                </ul>
              </div>
            </div>

          </section><!-- /Blog Pagination Section -->

        </div>


</x-mylayouts.layout-prototype>
