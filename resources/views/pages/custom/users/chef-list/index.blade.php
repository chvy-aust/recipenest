<x-mylayouts.layout-prototype>

    <section id="chef" class="chef section">

      {{-- Chef Section Title --}}
        <div class="container section-title" data-aos="fade-up">
            <div class="section-title-container d-flex align-items-center justify-content-between">
                <div class="breadcrumb-section">
                    <a href="#" class="previous">home /</a>
                    <h2>CHEFS</h2>
                </div>
                <input class="search-bar" type="text" placeholder=" searching for new chefs ... ">
                <button class="search-btn"><i class="bi bi-search"></i></button>
            </div>
            <div class="container d-flex align-items-left filter">
                <a href=""><i class="bi bi-sort-down-alt"></i></a>
                <p>filter</p>
            </div>
        </div>
        {{-- End Chef Section Title --}}

        {{-- Chef Section Content --}}
        <div class="container">
            <div class="row gy-4">

                {{-- Chef Card Template --}}
                @foreach ($chef_data as $data)
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="chef-member d-flex align-items-start">
                        <div class="pic"><img src="{{ $data->getImage() }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <div class="badge-bar">
                                @foreach ( $data->badges as $badge )
                                    <span class="badge {{ $badge->color }}">{{ $badge->icon }} {{ $badge->name }}</span>
                                @endforeach
                                <button class="more-btn"></button>
                                <button class="more-btn"></button>
                            </div>
                            <h4>{{ $data->name }}</h4>

                            <hr>
                            <div class=bio>
                                <p> {{ $data->short_description }}</p>
                            </div>
                            <hr>

                            <a href="{{ $data->getLink() }}" class="readmore" style="text-decoration:none !important; border-bottom: none !important;">
                                <span>Read More</span><i class="bi bi-arrow-right-circle-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- End Chef Card Template --}}

                {{-- Pagination --}}
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
                {{-- End Pagination --}}

            </div>
        </div>
        {{-- End Chef Section Content --}}
    </section>

</x-mylayouts.layout-prototype>
