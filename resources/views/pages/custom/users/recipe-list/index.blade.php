<x-mylayouts.layout-prototype>





  <main class="main">

    <!-- Page Title -->
    <div class="container section-title" data-aos="fade-up" style="margin-top:10px;">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <div class="breadcrumb-section">
            <a href="#" class="previous">home /</a>
            <h2>RECIPES</h2>
         </div>
            <input class="search-bar" type="text" placeholder=" searching for delicious recipes ... ">
            <button class="search-btn"><i class="bi bi-search-heart-fill"></i>SEARCH</button>
        </div>
        <div class="container d-flex align-items-left filter">
            <a href=""><i class="bi bi-sort-down-alt"></i></a>
            <p>filter</p>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-12">

          <!-- Blog Posts Section -->
          <section id="blog-posts" class="blog-posts section">

            <div class="container">
              <div class="row gy-4">
                @foreach ($recipe_data as $recipe)
                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="{{ $recipe->getImage() }}" alt="">
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">{{ $recipe->title }}</h3>
                      <hr style="margin:0px 0px 15px 0px;">
                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person-square"></i><span class="ps-2">Darcy Wallaker </span>
                        </div>
                        <span class="px-3 text-black-50">|</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-clock-fill"></i> <span class="ps-2">February 21st, 2026</span>
                        </div>
                      </div>

                      <p>
                       These beautiful waffles are for those who want a sweet start to the morning but also know how important it is to begin the day with a bit...

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-tags-fill"></i><span class="ps-2">Tags: Breakfast and Brunch, Sweet, Pastry...</span>
                        </div>
                      </div>
                      <hr style="margin:15px 0px 15px 0px;">

                      <a href="{{ $recipe->getLink() }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->
                @endforeach

                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="{{ asset('storage/images/media/recipe2.jpg') }}" class="img-fluid" alt="">
                      <span class="post-date">March 19</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Miso Oatmeal with Charred Kale & Soft Boiled Eggs</h3>

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                        </div>
                      </div>

                      <p>
                        Lately, I’m a savory oatmeal evangelist. This dish is warm, comforting, nutrient dense, and perfect for literally any meal.
                      </p>

                      <hr>

                      <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                      <span class="post-date">June 24</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                        </div>
                      </div>

                      <p>
                        Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                      </p>

                      <hr>

                      <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img class="recipe-list-img" src="assets/img/blog/blog-4.jpg" class="img-fluid" alt="">
                      <span class="post-date">August 05</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</h3>

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                        </div>
                      </div>

                      <p>
                        Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                      </p>

                      <hr>

                      <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt="">
                      <span class="post-date">September 17</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Accusamus quaerat aliquam qui debitis facilis consequatur</h3>

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">John Parker</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                        </div>
                      </div>

                      <p>
                        In itaque assumenda aliquam voluptatem qui temporibus iusto nisi quia. Autem vitae quas aperiam nesciunt mollitia tempora odio omnis. Ipsa odit sit ut amet necessitatibus. Quo ullam ut corrupti autem consequuntur totam dolorem.
                      </p>

                      <hr>

                      <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

                <div class="col-lg-6">
                  <article class="position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                      <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
                      <span class="post-date">December 07</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                      <h3 class="post-title">Distinctio provident quibusdam numquam aperiam aut</h3>

                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                          <i class="bi bi-person"></i> <span class="ps-2">Julia White</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                        </div>
                      </div>

                      <p>
                        Expedita et temporibus eligendi enim molestiae est architecto praesentium dolores. Illo laboriosam officiis quis. Labore officia quia sit voluptatem nisi est dignissimos totam. Et voluptate et consectetur voluptatem id dolor magni impedit. Omnis dolores sit.
                      </p>

                      <hr>

                      <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                  </article>
                </div><!-- End post list item -->

              </div>
            </div>

          </section><!-- /Blog Posts Section -->

          <!-- Blog Pagination Section -->
          <section id="blog-pagination" class="blog-pagination section">

            <div class="container">
              <div class="d-flex justify-content-center">
                <ul>
                  <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                  <li><a href="#" class="active">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">10</a></li>
                  <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>

          </section><!-- /Blog Pagination Section -->

        </div>



      </div>
    </div>

  </main>


</x-mylayouts.layout-prototype>
