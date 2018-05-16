@extends('client.client_master')
@section('client_content')
<main id="main">
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            @foreach($contactus_info as $v_info)
            <div class="section-header">
                <h3>Contact Us</h3>
                <p>{{$v_info->description}}</p>
            </div>
            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>{{$v_info->address}}</address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="#">{{$v_info->phone_number}}</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="#">{{$v_info->email}}</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="form">
                <div id="sendmessage">
                    <h6 style="color:green">
                        <?php
                        $message = Session::get('message');

                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?>
                    </h6>
                </div>
                <div id="errormessage"></div>
                {!! Form::open(['url' => '/send-message','method'=>'post']) !!}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email_address" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-msg="Please write something for us" placeholder="Message" required></textarea>
                    <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
</main>
@endsection