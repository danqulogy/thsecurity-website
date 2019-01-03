@extends('layouts.main')

@section('content')
    <!-- Page Heading Section Start -->
    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>Contact Us Today</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Heading Section End -->
    <!-- Contact Page Section Start -->
    <div class="contact-page-sec pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form method="post" action="{{url('/contact-us')}}" class="contact-field">
                        <h2>Write Your Message</h2>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input name="first_name" placeholder="First Name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input name="other_names" placeholder="Last Name" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input name="phone" placeholder="Phone" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="single-input-field">
                                <input name="email" placeholder="Your E-mail" type="email">
                            </div>
                        </div>
                        <div class="col-md-12 message-input">
                            <div class="single-input-field">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="single-input-fieldsbtn">
                            <input value="send now " type="submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-text">
                                <h2>phone</h2>
                                <span>+(233) 322-494-467</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-text">
                                <h2>e-mail</h2>
                                <span>trusthousescompany@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-text">
                                <h2>Address</h2>
                                <span>P.O.BOX 1503</span>
                                <span>Sunflower Ridge</span>
                                <span>Accra, Ghana</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
