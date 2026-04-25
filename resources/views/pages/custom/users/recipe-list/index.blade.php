<x-mylayouts.layout-prototype>
  <main class="main">
    <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <div class="breadcrumb-section font-monospace">
            <a href="#" class="previous text-muted">home /</a>
            <h2>RECIPES</h2>
         </div>
            <input class="search-bar" type="text" placeholder=" searching for delicious recipes ... ">
            <button class="search-btn"><i class="bi bi-search-heart-fill"></i>SEARCH</button>
        </div>
        <div class="container d-flex align-items-left filter">
            <a href=""><i class="bi bi-funnel-fill"></i></a>
            <p>filter</p>
        </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <section id="recipe-posts" class="recipe-posts section">
            <div class="container">

              <div class="row gy-4">
                @foreach ($recipe_data as $recipe)
                                <div class="col-lg-6 recipe-card">
                                <article class="position-relative h-100">
                                    <div class="meta d-flex align-items-center mb-3">
                                            <div class="d-flex align-items-center flex-grow-1">
                                                <i class="bi bi-person-circle chef-icon" style="color:black;"></i>
                                                <a href="{{ $recipe->user->getLink() }}" class="ps-2 chef-link">{{ $recipe->user->name }}</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                            <span class="post-date">Posted {{ $recipe->created_at->format('M jS Y g:iA') }}</span>
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
              </div>

            </div>
          </section>

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
          </section>
        </div>

      </div>
    </div>

  </main>


</x-mylayouts.layout-prototype>
