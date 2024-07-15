@extends('layouts.layout')
@section('content')
    <div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-container">
                            <h2>Our Executives</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-search-input margin-bottom-40">
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="About Us-grid-container">

                        @foreach ($data as $item)
                            <div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="agent">
                                    <div class="agent-avatar">
                                        <a href="">
                                            <img src="{{ url('storage/' . $item->photo_path) }}" alt="">
                                        </a>
                                    </div>

                                    <div class="agent-content">
                                        <div class="agent-name">
                                            <h4><a href="#">{{ $item->name_executive }}</a></h4>
                                            <span>{{ $item->rol_executive }}</span>
                                        </div>
                                        <ul class="agent-contact-details">
                                            <li><i class="sl sl-icon-call-in"></i>{{ $item->phone_executive }}</li>
                                            <li><i class="fa fa-envelope-o "></i><a
                                                    href="mailito:{{ $item->email_executive }}">{{ $item->email_executive }}</a>
                                            </li>
                                        </ul>
                                        <ul class="social-icons">
                                            <li><a target="_blank" class="facebook"
                                                    href="{{ $item->facebook_executive }}"><i class="icon-facebook"></i></a>
                                            </li>
                                            <li><a target="_blank" class="twitter" href="{{ $item->twitter_executive }}"><i
                                                        class="icon-twitter"></i></a></li>
                                            <li><a target="_blank" class="gplus" href="{{ $item->gplus_executive }}"><i
                                                        class="icon-gplus"></i></a></li>
                                            <li><a target="_blank" class="linkedin"
                                                    href="{{ $item->linkedin_executive }}"><i class="icon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
