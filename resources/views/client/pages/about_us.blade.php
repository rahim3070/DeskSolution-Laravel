@extends('client.client_master')
@section('client_content')
<main id="main">
    <section id="about">

        <div class="container">
            @foreach($aboutus_info as $a_info)
            <header class="section-header">
                <h3>About Us</h3>
                <p>{{$a_info->aboutus_description}}</p>
            </header>
            @endforeach
            <div class="row about-cols">

                <div class="col-md-4 wow fadeInUp">
                    @foreach($mission_info as $m_info)
                    <div class="about-col">
                        <div class="img">
                            <img src="{{URL::to($m_info->image_option)}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Mission</a></h2>
                        <p>
                            {{$m_info->mission_description}}
                        </p>
                    </div>
                    @endforeach
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach($plan_info as $p_info)
                    <div class="about-col">
                        <div class="img">
                            <img src="{{URL::to($p_info->image_option)}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-list-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        <p>
                            {{$p_info->plan_description}}
                        </p>
                    </div>
                    @endforeach
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    @foreach($vission_info as $v_info)
                    <div class="about-col">
                        <div class="img">
                            <img src="{{URL::to($v_info->image_option)}}" alt="" class="img-fluid">
                            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p>
                            {{$v_info->vission_description}}
                        </p>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>

    </section>
</main>
@endsection