@extends('client.client_master')
@section('client_content')
<!-- Intro Section -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                @foreach($home_info_active as $a_info)
                <div class="carousel-item active">                    
                    <div class="carousel-background"><img src="{{URL::to($a_info->home_image)}}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>{{$a_info->home_title}}</h2>
                            <p>{{$a_info->home_description}}</p>
                            <!--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
                        </div>
                    </div>                    
                </div>
                @endforeach
                @foreach($home_info_inactive as $ia_info)
                <div class="carousel-item">
                    <div class="carousel-background"><img src="{{URL::to($ia_info->home_image)}}" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>{{$ia_info->home_title}}</h2>
                            <p>{{$ia_info->home_description}}</p>
                            <!--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>
<!--<main id="main">
     Featured Services Section 
    <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box">
                    <i class="ion-ios-bookmarks-outline"></i>
                    <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-stopwatch-outline"></i>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-heart-outline"></i>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>

            </div>
        </div>
    </section>
</main>-->
@endsection