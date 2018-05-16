@extends('client.client_master')
@section('client_content')
<main id="main">
    <!-- Team Section -->
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Team</h3>
                <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
            </div>

            <div class="row">
                @foreach($team_info_active as $a_info)
                <div class="col-lg-3 col-md-6 wow fadeInUp">

                    <div class="member">
                        <img src="{{URL::to($a_info->image)}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>{{$a_info->name}}</h4>
                                <span>{{$a_info->designation}}</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </section>
</main>
@endsection