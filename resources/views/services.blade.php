@extends('layouts.main')

@section('content')

    <!-- Why Choose Us End -->
    <!-- Service Start -->
    <div class="service2-sec pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h1>What We <span>Offer</span> Here</h1>
                        <p>Our fleet of services are currently and mainly towards shipping, transportation, securing valuables and air frieght services. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="service2-item">
                    <div class="col-md-4 col-sm-6">
                        <div class="service2-inner">
                            <div class="media">
                                <div class="media-left">
                                    <div class="service2-icon">
                                        <img src="{{asset('img/icon/building.png')}}" alt=""/>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="service2-details">
                                        <h2><a >Air Freight </a></h2>
                                        <p>THSecurity company offers both direct and consolidated
                                            air-freight to all major destinations. UECS understands why valuable time must not be lost
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>																																	<div class="col-md-4 col-sm-6">
                        <div class="service2-inner">
                            <div class="media">
                                <div class="media-left">
                                    <div class="service2-icon">
                                        <img src="{{asset('img/icon/surveillance.png')}}" alt=""/>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="service2-details">
                                        <h2><a >Sea Freight</a></h2>
                                        <p>
                                            Sea freight is an eminent feature of among the services offered by UECS.
                                            We owe no allegiance to any particular liner/carrier as per our operation
                                            in regards to our services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service2-inner">
                            <div class="media">
                                <div class="media-left">
                                    <div class="service2-icon">
                                        <img src="{{asset('img/icon/resort.png')}}" alt=""/>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="service2-details">
                                        <h2><a href="service-details.html">Inland Haulage</a></h2>
                                        <p>
                                            Inland haulage includes trucking of containers from door to the port of shipment
                                            and from port to door/stripping point. We ensure that the transportation is secure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
