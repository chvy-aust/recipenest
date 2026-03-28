<x-mylayouts.layout-prototype>

    <!-- chef Section -->
    <section id="chef" class="chef section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="section-title-container d-flex align-items-center justify-content-between">
          <div class="breadcrumb-section">
            <a href="#" class="previous">home /</a>
            <h2>CHEFS</h2>
         </div>
            <input class="search-bar" type="text" placeholder=" searching for new chefs ... ">
            <button class="search-btn"><i class="bi bi-search-heart-fill"></i>SEARCH</button>
        </div>
        <div class="container d-flex align-items-left filter">
            <a href=""><i class="bi bi-sort-down-alt"></i></a>
            <p>filter</p>
        </div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

            

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/profiles/luigi-agostino-chef.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <div class="badge-bar">
                    <span class="badge red">italian connoisseur</span>
                    <span class="badge green">vegetarian 🥦</span>
                    <button class="more-btn"></button>
                </div>
                <h4>Luigi D'Agostino</h4>

                <hr>
                <div class=bio>
                    <p> Born in the hearts of Parm with a decade of culinary experience, Luigi's portfolio is both fresh, healthy and delicious.
                        From his cherished Melanzane a Funghetto, to his Verdye Gratinate Al Forno, Luigi has done it all...</p>
                </div>
                <hr>

                <div class="read-more-btn">
                    <p>Read More -></p>
                </div>

              </div>

            </div>
          </div><!-- End chef Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/profiles/darcy-wallaker-chef.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <div class="badge-bar">
                    <span class="badge green">cake boss 🍰</span>
                    <span class="badge blue">pastry chef</span>
                    <span class="badge red">sweet tooth</span>
                    <span class="badge green">verified</span>
                    <button class="more-btn"></button>
                </div>
                <h4>Darcy Wallaker</h4>

                <hr>
                <div class=bio>
                <p>Hello! I specialize in cakes, muffins, brownies, and everything else sweet enough to send you to the dentist every month. As the french say, "C'est du gâteau!"</p>
                </div>
                <hr>

                <div class="read-more-btn">
                    <p>Read More -></p>
                </div>

              </div>
            </div>
          </div>
          <!-- End chef Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/profiles/hella-beitel-chef.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <div class="badge-bar">
                    <span class="badge green">verified</span>
                    <span class="badge red">sushi specialist 🍣</span>
                    <span class="badge blue">poissonnier 🐟</span>
                    <span class="badge green">executive chef</span>
                    <span class="badge green">placeholder</span>
                    <span class="badge green">placeholder</span>
                    <button class="more-btn"></button>
                </div>
                <h4>Hella Beitel</h4>

                <hr>
                <div class=bio>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
                <hr>

                <div class="read-more-btn">
                    <p>Read More -></p>
                </div>
              </div>
            </div>
          </div><!-- End chef Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="chef-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/profiles/linden-bailey-chef.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <div class="badge-bar">
                    <span class="badge red">hot-headed 🌶️</span>
                    <span class="badge green">veteran chef</span>
                    <span class="badge blue">grill master</span>
                    <span class="badge blue">placeholder</span>
                    <span class="badge blue">placeholder</span>
                    <span class="badge blue">placeholder</span>
                    <span class="badge blue">placeholder</span>
                    <span class="badge blue">placeholder</span>
                    <button class="more-btn"></button>
                </div>
                <h4>Linden Bailey</h4>

                <hr>
                <div class=bio>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                </div>
                <hr>

                <div class="read-more-btn">
                    <p>Read More -></p>
                </div>

              </div>
            </div>
          </div><!-- End chef Member -->

        </div>

      </div>

    </section><!-- /chef Section -->


</x-mylayouts.layout-prototype>
