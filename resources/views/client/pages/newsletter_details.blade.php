@extends('client.client_master')
@section('client_content')
<main id="main">
    <section id="about">

        <div class="container">
            <header class="section-header">
                <h3>Our Newsletter Details</h3>
            </header>
            <div class="row about-cols">
                <div class="col-md-1 wow fadeInUp" data-wow-delay="0.1s"></div>
                <div class="col-md-10 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach($newsletter_info as $p_info)
                    <div class="about-col">
                        <div class="img">
                            <img src="{{URL::to($p_info->image)}}" alt="" class="img-fluid" width="950px">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">{{$p_info->heading}}</a></h2>
                        <p>
                            {{$p_info->details}}
                        </p>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-1 wow fadeInUp" data-wow-delay="0.1s"></div>
            </div>
        </div>
    </section>
</main>
@endsection