@extends('layouts.layout')
@section('content')
    <style id='findeo-style-inline-css' type='text/css'>
        #backtotop a,
        #top-bar,
        .csm-trigger,
        .csm-content h4,
        .fp-accordion .accordion h3.ui-accordion-header-active {
            background-color: #274abb
        }

        .custom-zoom-in:hover:before,
        .custom-zoom-out:hover:before,
        .infoBox-close:hover {
            -webkit-text-stroke: 1px #274abb
        }

        .user-menu.active .user-name:after,
        .user-menu:hover .user-name:after,
        .user-menu.active .user-name,
        .user-menu:hover .user-name,
        .user-menu ul li a:hover,
        .list-4 li:before,
        .list-3 li:before,
        .list-2 li:before,
        .list-1 li:before,
        .nav-links div a:hover,
        #posts-nav li a:hover,
        li.checkboxed:before {
            color: #274abb;
        }

        .numbered.color ol>li::before {
            border: 1px solid #274abb;
            color: #274abb;
        }

        .numbered.color.filled ol>li::before {
            border: 1px solid #274abb;
            background-color: #274abb;
        }

        .pagination ul li span.current,
        .pagination .current,
        .pagination ul li a:hover,
        .pagination-next-prev ul li a:hover,
        .change-photo-btn:hover,
        table.manage-table th,
        table.shop_table th,
        mark.color,
        .comment-by a.comment-reply-link:hover,input[type="checkbox"].switch_1:checked {
            background-color: #274abb;
        }

        table.manage-table td.action a:hover,
        table.manage-table .title-container .title h4 a:hover,
        .my-account-nav li a.current,
        .my-account-nav li a:hover,
        .woocommerce-MyAccount-navigation ul li.is-active a,
        .woocommerce-MyAccount-navigation ul a:hover,
        #footer .social-icons li a:hover i,
        #navigation.style-1>ul>.current-menu-ancestor>a,
        #navigation.style-2>ul>.current-menu-ancestor>a.nav-links div a:hover,
        #posts-nav li a:hover,
        #top-bar .social-icons li a:hover i,
        .agent .social-icons li a:hover i,
        .agent-contact-details li a:hover,
        .agent-page .agent-name h4,
        .footer-links li a:hover,
        .header-style-2 .header-widget li i,
        .header-widget .sign-in:hover,
        .home-slider-desc .read-more i,
        .info-box,
        .info-box h4,
        .listing-title h4 a:hover,
        .map-box h4 a:hover,
        .plan-price .value,
        .plan.featured .listing-badges .featured,
        .post-content a.read-more,
        .post-content h3 a:hover,
        .post-meta li a:hover,
        .property-pricing,
        .style-2 .trigger a:hover,
        .style-2 .trigger.active a,
        .style-2 .ui-accordion .ui-accordion-header-active,
        .style-2 .ui-accordion .ui-accordion-header-active:hover,
        .style-2 .ui-accordion .ui-accordion-header:hover,
        vc_tta.vc_tta-style-tabs-style-1 .vc_tta-tab.vc_active a,
        .vc_tta.vc_tta-style-tabs-style-2 .vc_tta-tab.vc_active a,
        .tabs-nav li.active a,
        .wc-tabs li.active a.custom-caption,
        #backtotop a,
        .trigger.active a,
        .post-categories li a,
        .vc_tta.vc_tta-style-tabs-style-3.vc_general .vc_tta-tab a:hover,
        .vc_tta.vc_tta-style-tabs-style-3.vc_general .vc_tta-tab.vc_active a,
        .wc-tabs li a:hover,
        .tabs-nav li a:hover,
        .tabs-nav li.active a,
        .wc-tabs li a:hover,
        .wc-tabs li.active a,
        .testimonial-author h4,
        .widget-button:hover,
        .widget-text h5 a:hover,
        a,
        a.button.border,
        a.button.border.white:hover,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-1 .vc_tta-tab.vc_active>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-2 .vc_tta-tab.vc_active>a {
            color: #274abb
        }

        #header-container.top-border {
            border-top: 4px solid #274abb
        }

        #navigation.style-1>ul>.current-menu-ancestor>a {
            background-color: transparent;
            border: 1px solid #274abb
        }

        #navigation.style-1 ul li:hover,
        #navigation.style-1>ul>.current-menu-ancestor>a:hover,
        #navigation.style-1>ul>.current-menu-ancestor>a:hover {
            background-color: #274abb
        }

        #navigation.style-2 {
            background-color: #274abb
        }

        .menu-responsive i {
            background: linear-gradient(to bottom, rgba(255, 255, 255, .07) 0, transparent);
            background-color: #274abb
        }

        .realteo-term-checklist input[type=checkbox]:checked+label:before,
        .checkboxes input[type=checkbox]:checked+label:before,
        .checkboxes input[type=checkbox]:checked+label:before,
        .range-slider .ui-widget-header,
        .search-type label.active,
        .search-type label:hover {
            background-color: #274abb
        }

        .range-slider .ui-slider .ui-slider-handle {
            border: 2px solid #274abb
        }

        .agent-avatar a:before {
            background: #274abb;
            background: linear-gradient(to bottom, transparent 50%, #274abb)
        }

        .view-profile-btn {
            background-color: #274abb
        }

        .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 60%, #274abb)
        }

        .listing-badges .featured {
            background-color: #274abb
        }

        .list-layout .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 55%, #274abb)
        }

        #property_preview .property-titlebar span.property-badge,
        #titlebar.property-titlebar span.property-badge,
        .back-to-listings:hover,
        .home-slider-price,
        .img-box:hover:before,
        .layout-switcher a.active,
        .layout-switcher a:hover,
        .listing-hidden-content,
        .office-address h3:after,
        .pagination .current,
        .pagination ul li a.current-page,
        .pagination ul li a:hover,
        .pagination-next-prev ul li a:hover,
        .property-features.checkboxes li:before {
            background-color: #274abb
        }

        .post-img:after,
        .tip {
            background: #274abb
        }

        .property-slider-nav .item.slick-current.slick-active:before {
            border-color: #274abb
        }

        .property-slider-nav .item img {
    width: 100%;
    height: 100%;
    object-fit: contain !important;
}

        .post-img:after {
            background: linear-gradient(to bottom, transparent 40%, #274abb)
        }


        .floorplans-submit-item td .fm-move,
        .add-pricing-submenu.button:hover,
        .add-floorplans-submit-item.button:hover,
        .comment-by a.reply:hover,
        .post-img:before {
            background-color: #274abb
        }

        .map-box .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 50%, #274abb)
        }

        #geoLocation:hover,
        #mapnav-buttons a:hover,
        #scrollEnabling.enabled,
        #scrollEnabling:hover,
        #streetView:hover,
        .cluster div,
        .custom-zoom-in:hover,
        .custom-zoom-out:hover,
        .infoBox-close:hover,
        .listing-carousel.owl-theme .owl-controls .owl-next:after,
        .listing-carousel.owl-theme .owl-controls .owl-prev:before,
        .listing-carousel.owl-theme.outer .owl-controls .owl-next:hover::after,
        .listing-carousel.owl-theme.outer .owl-controls .owl-prev:hover::before,
        .slick-next:after,
        .slick-prev:after {
            background-color: #274abb
        }

        .cluster div:before {
            border: 7px solid #274abb;
            box-shadow: inset 0 0 0 4px #274abb
        }

        .mfp-arrow:hover {
            background: #274abb
        }

        .dropzone:hover {
            border: 2px dashed #274abb
        }

        .dropzone:before {
            background: linear-gradient(to bottom, rgba(255, 255, 255, .95), rgba(255, 255, 255, .9));
            background-color: #274abb
        }

        .chosen-container .chosen-results li.highlighted,
        .chosen-container-multi .chosen-choices li.search-choice,
        .select-options li:hover,
        a.button,
        a.button.border:hover,
        button.button,
        input[type=button],
        input[type=submit] {
            background-color: #274abb
        }

        .dropzone:hover .dz-message,
        .sort-by .chosen-container-single .chosen-default,
        .sort-by .chosen-container-single .chosen-single div b:after {
            color: #274abb
        }

        a.button.border {
            border: 1px solid #274abb
        }

        .plan.featured .plan-price {
            background: linear-gradient(to bottom, rgba(255, 255, 255, .1) 0, transparent);
            background-color: #274abb
        }

        .trigger.active a,
        .ui-accordion .ui-accordion-header-active,
        .ui-accordion .ui-accordion-header-active:hover {
            background-color: #274abb;
            border-color: #274abb
        }

        .vc_tta.vc_general.vc_tta-style-style-1 .vc_active .vc_tta-panel-heading,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-2 .vc_tta-tab.vc_active>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-2 .vc_tta-tab:hover>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-1 .vc_tta-tab.vc_active>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-1 .vc_tta-tab:hover>a,
        .tabs-nav li a:hover,
        .tabs-nav li.active a {
            border-bottom-color: #274abb
        }

        .style-3 .tabs-nav li a:hover,
        .style-3 .tabs-nav li.active a {
            border-color: #274abb;
            background-color: #274abb
        }

        .style-4 .tabs-nav li.active a,
        .style-5 .tabs-nav li.active a,
        table.basic-table th {
            background-color: #274abb
        }

        .info-box {
            border-top: 2px solid #274abb;
            background: linear-gradient(to bottom, rgba(255, 255, 255, .98), rgba(255, 255, 255, .95));
            background-color: #274abb
        }

        .info-box.no-border {
            background: linear-gradient(to bottom, rgba(255, 255, 255, .96), rgba(255, 255, 255, .93));
            background-color: #274abb
        }

        .icon-box-1 .icon-container {
            background-color: #274abb
        }

        .dark-overlay .video-container:before {
            background: rgba(22, 22, 22, 0.4)
        }

        .woocommerce-ordering {
            display: none;
        }

        .woocommerce-result-count {
            display: none;
        }
    </style>
    <div class="parallax bannerOurDeparment"
        sytle="background: url('https://nhc.ymgweb.com/images/headOffice.jpeg');background-attachment: fixed;background-size: 1519.2px 972.288px;background-position: 50% -271.587px;"
        data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-container">

                            <h2>Our Departments</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <article id="post-102" class="col-md-12 post-102 page type-page status-publish hentry">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <h4 style="font-weight:normal;text-align:left;"
                                            class="headline margin-top-15 margin-bottom-35     "></h4>


                                        @foreach ($data as $key => $row)
                                            <div class="toggle-wrap style-2">
                                                <span class="trigger opened"><a href="#">{{ $row->title }}
                                                        <i class="sl sl-icon-plus"></i></a></span>
                                                <div class="toggle-container">
                                                    <div class="container">
                                                        <div class="row margin-bottom-50">
                                                            <div class="col-md-12">

                                                                <div id="property-slider-{{ $key }}" class="property-slider default">
                                                                    @foreach (json_decode($row->images) as $images)

                                                                        <a href="images/our_deparment/{{ $images->path }}"
                                                                            data-background-image="images/our_deparment/{{ $images->path }}"
                                                                            class="item   group{{ $key }}"
                                                                            title="{{ $images->title_image  }}"
                                                                            data-fancybox="group-{{ $key }}"
                                                                            data-caption="{{ $images->title_image }}"
                                                                            style="background-position: inherit !important">
                                                                            @if(!empty($images->title_image))
                                                                                <h3 style="position: absolute;
                                                                                        bottom: 0;
                                                                                        text-align: right;
                                                                                        width: 100%;
                                                                                        background: hwb(0deg 0% 100% / 50%);
                                                                                        color: #fff;
                                                                                        padding: 10px;
                                                                                        margin-bottom: 0;">
                                                                                    {{ $images->title_image }}
                                                                                </h3>
                                                                            @endif
                                                                        </a>


                                                                        <style>
                                                                            .mfp-img {
    max-width: 100% !important;
    max-height: 90vh !important;
    height: auto;
    width: auto;
    object-fit: contain;
}

</style>



                                                                    @endforeach
                                                                </div>

                                                                <div id="property-slider-nav-1" class="property-slider-nav">
                                                                    @foreach (json_decode($row->images) as $images)
                                                                        <div class="item">
                                                                            <img src="images/our_deparment/{{ $images->path }}"
                                                                                alt="">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--description-->
                                                    <p>{{ $row->description }}
                                                    </p>
                                                    <!--description-->

                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <a href="/contact" class="flip-banner parallax" data-background="images/back.jpg" data-color="#"
        data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">Not Sure Of Your Next Step</h2>
            <h2 class="flip-hidden">Get In Contact Today <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>

@endsection
<style>
    accordion-content,
    .style-2 .toggle-wrap {
        border-bottom: 1px solid transparent;
    }
</style>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>
    $(document).ready(function() {
        // Slider 1 initialization
     $('.property-slider-wrapper').each(function () {
            const id = $(this).data('slider-id');
            const mainSlider = `#property-slider-${id}`;
            const navSlider = `#property-slider-nav-${id}`;

            $(mainSlider).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                infinite: false,
                asNavFor: navSlider
            });

            $(navSlider).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: mainSlider,
                dots: false,
                centerMode: false,
                focusOnSelect: true,
                infinite: false
            });
        });




        $(".toggle-wrap .property-slider").each(function () {
            const id = $(this).attr('id');
             const groupVal =  $("a",this).attr('data-fancybox');

                Fancybox.bind('[data-fancybox="'+groupVal+'"]', {});



        });


    });
</script>
