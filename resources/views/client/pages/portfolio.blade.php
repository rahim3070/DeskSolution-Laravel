@extends('client.client_master')
@section('client_content')
<main id="main">
    <!-- Portfolio Section -->
    <section id="portfolio"  class="section-bg" >
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Our Portfolio</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach($portfolio_cat_info as $v_info)
                        <!--@if($v_info->category_id == $v_info->category_id)-->
                        <li data-filter=".filter-{{$v_info->filter_name}}">{{$v_info->category_name}}</li>
                        <!--@endif-->
                        @endforeach
                        <!-- <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>-->
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">
                @foreach($portfolio_cat_details_info as $vd_info)

                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$vd_info->filter_name}} wow fadeInUp">
                    <div class="portfolio-wrap">

                        <figure>
                            <img src="{{URL::to($vd_info->portfolio_image)}}" class="img-fluid" alt="">
                            <a href="{{URL::to($vd_info->portfolio_image)}}" class="link-preview" data-lightbox="portfolio" data-title="{{$vd_info->title}}" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">{{$vd_info->heading}}</a></h4>
                            <p>{{$vd_info->details}}</p>
                        </div>

                    </div>
                </div>

                @endforeach
                <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{URL::to('public/asset_client/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{URL::to('public/asset_client/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <img src="{{URL::to('public/asset_client/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{URL::to('public/asset_client/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <img src="{{URL::to('public/asset_client/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{URL::to('public/asset_client/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Card 2</a></h4>
                            <p>Card</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{URL::to('public/asset_client/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{URL::to('public/asset_client/img/portfolio/web1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                            <img src="{{URL::to('public/asset_client/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{URL::to('public/asset_client/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                            <img src="{{URL::to('public/asset_client/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{URL::to('public/asset_client/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Web 3</a></h4>
                            <p>Web</p>
                        </div>
                    </div>
                </div>-->
            </div>

        </div>
    </section>

    <!--     Clients Section 
        <section id="clients" class="wow fadeInUp">
            <div class="container">
    
                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>
    
                <div class="owl-carousel clients-carousel">
                    <img src="{{URL::to('public/asset_client/img/clients/client-1.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-2.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-3.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-4.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-5.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-6.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-7.png')}}" alt="">
                    <img src="{{URL::to('public/asset_client/img/clients/client-8.png')}}" alt="">
                </div>
    
            </div>
        </section>
    
         Testimonial Section 
        <section id="testimonials" class="section-bg wow fadeInUp">
            <div class="container">
    
                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>
    
                <div class="owl-carousel testimonials-carousel">
    
                    <div class="testimonial-item">
                        <img src="{{URL::to('public/asset_client/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                            <img src="{{URL::to('public/asset_client/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <img src="{{URL::to('public/asset_client/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
    
                    <div class="testimonial-item">
                        <img src="{{URL::to('public/asset_client/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <img src="{{URL::to('public/asset_client/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <img src="{{URL::to('public/asset_client/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
    
                    <div class="testimonial-item">
                        <img src="{{URL::to('public/asset_client/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <img src="{{URL::to('public/asset_client/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <img src="{{URL::to('public/asset_client/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
    
                    <div class="testimonial-item">
                        <img src="{{URL::to('public/asset_client/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <img src="{{URL::to('public/asset_client/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            <img src="{{URL::to('public/asset_client/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
    
                    <div class="testimonial-item">
                        <img src="{{URL::to('public/asset_client/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <img src="{{URL::to('public/asset_client/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            <img src="{{URL::to('public/asset_client/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                        </p>
                    </div>
    
                </div>
    
            </div>
        </section>-->
</main>
@endsection