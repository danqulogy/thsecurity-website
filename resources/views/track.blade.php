@extends('layouts.main')

@section('content')
    @if(!session('success'))
    <!-- Page Heading Section Start -->
    <div class="pagehding-sec">
        <div class="pagehding-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-heading">
                        <h1>Track your Package</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="appoitment-area">
        <div class="images-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="faq-sec">
                        <div class="faq-single">
                            <div class="media">
                                @if (session('error'))
                                    <div class="alert  alert-danger">
                                        <h2><span class="fa fa-stop"></span> Invalid Vault Number</h2>
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="media-left">
                                    <div class="icon">
                                        <img src="img/icon/question.png" alt=""/>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h2>Forgot your tracking code</h2>
                                    <p>Use the contact page to send a message. Our support team will contact you directly and help you out.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="appointment-form">
                        <h2>Enter your vault number </h2>
                        <form method="post" action="{{url('/track-package')}}">
                            <fieldset>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="sngl-field">
                                        <input placeholder="Code" name="vault_number" type="text">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="filed-submitbtn">
                                        <input value="Track Package" name="submit" type="submit">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(session('success'))
        <div class="pagehding-sec">
            <div class="pagehding-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h1>Package Found</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-sec pt-100 pb-100">
            <div class="about-sec-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="about-desc">
                            <div class="sec-title">
                                <br>
                                <h2><span>Package Details for </span>Vault No. {{session('asset')->vault_number}}</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5" style="margin-right: 16px">
                                        <div class="" style="margin-top: 38px">
                                            <img src="{{asset('img/slides/gold.jpg')}}" alt=""/>
                                        </div>
                                        <p>X4</p>
                                    </div>
                                    @if(session('asset'))
                                    <div class="col-md-7 row">
                                       <div class="row">
                                           <p class="col-md-5" style="font-weight: bold;">Item Name:</p>
                                           <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->item_name}}</p>
                                       </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Weight:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->weight}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Date Deposited:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->date_of_deposit}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Time Deposited:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->time_of_deposit}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Date of Withdrawal:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->date_of_withdrawal}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Name of Depositor:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->depositor_name}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Name of Beneficiary:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">{{session('asset')->beneficiary_name}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-md-5" style="font-weight: bold;">Insurance:</p>
                                            <p class="col-md-7" style="text-transform: uppercase">$125 USD</p>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">

                                    <div class="col-md-12">
                                        @if(session('asset')->has('movements') && count(session('asset')->movements) > 0)
                                        <br>
                                            <h2><span class="fa fa-cubes"></span> <span> Shipping History </span></h2>
                                        <hr>
                                        <style>
                                            th,td{
                                                padding-top: 10px;
                                                padding-bottom: 10px;
                                            }
                                        </style>
                                        <table class="table table-striped table-bordered">
                                            <thead class="thead-light" style="color: #ffba27; font-size: 1.3rem">

                                            <tr>
                                                <th class="" scope="col">History</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Destination</th>
                                                <th scope="col">Status</th>
                                            </tr>

                                            </thead>
                                            <tbody>

                                            @foreach(session('asset')->movements as $m)
                                            <tr>
                                                <th scope="row">{{$m->action}}</th>
                                                <td class="text-primary">{{$m->date}}</td>
                                                <td>{{$m->destination}}</td>
                                                <td class="text-success">{{$m->status}}</td>
                                            </tr>
                                            @endforeach


                                            </tbody>
                                        </table>

                                        @endif

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
@endsection
