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
          <section id="recipe-posts" class="recipe-posts section">
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
                      <div class="meta d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-person-square"></i><span class="ps-2">{{ $recipe->user->name }}</span>
                        </div>
                        <span class="px-3 text-black-50">|</span>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-clock-fill"></i> <span class="ps-2">{{ $recipe->created_at }}</span>
                        </div>
                      </div>

                      <p>{{ $recipe->short_description }}</p>

                      <div class="meta tags d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <i class="bi bi-tags-fill"></i><span class="ps-2">Tags: Breakfast and Brunch, Sweet, Pastry...</span>
                        </div>
                      </div>

                      <a href="{{ $recipe->getLink() }}" class="readmore" style="text-decoration:none !important; border-bottom: none !important;"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </article>
                </div><!-- End post list item -->
                @endforeach
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
                  <li class="m-auto mx-2">...</li>
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
