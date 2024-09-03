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
    <div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
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

                                        @foreach ($data as $row)
                                            <div class="toggle-wrap style-2">
                                                <span class="trigger opened"><a href="#">{{ $row->title }}
                                                        <i class="sl sl-icon-plus"></i></a></span>
                                                <div class="toggle-container">
                                                    <div class="container">
                                                        <div class="row margin-bottom-50">
                                                            <div class="col-md-12">

                                                                <div id="property-slider-1" class="property-slider default">
                                                                    @foreach (json_decode($row->images) as $images)
                                                                        <a href="images/our_deparment/{{ $images->path }}"
                                                                            data-background-image="images/our_deparment/{{ $images->path }}"
                                                                            class="item mfp-gallery"></a>
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
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}

    {{-- <!-- Property Description --> --}}
    {{-- <div class="col-lg-12 col-md-7 sp-content"> --}}
    {{-- <div class="property-description"> --}}
    {{-- <!-- Description --> --}}
    {{-- <h3 class="desc-headline text-center">Administration Department </h3> --}}
    {{-- <img src="/images/admin.jpg" alt=""> <br> <br> --}}
    {{-- <div class="input"> --}}
    {{-- <p>The Administration Department at NHC plays a pivotal role in ensuring the smooth and efficient operation of the Corporation by overseeing a diverse range of functions. This includes managing day-to-day operations, supervising staff, and ensuring the availability of necessary equipment and office supplies. The department also plays a crucial role in policy development and implementation, shaping the strategic direction of the Corporation. It oversees Human Resources operations, ensuring proper staffing and management of employee records, works closely with the Accounts Department to ensure compliance with financial regulations and budget management and manages the Registry Section, ensuring the confidentiality and security of records. This department also maintains the physical plant and equipment for optimal functionality and security. In addition, it facilitates effective communication within the organization and provides support and guidance to all departments and sections in achieving organizational objectives. --}}

    {{-- </p> --}}

    {{-- <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> --> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <!-- Property Description / End --> --}}
    {{-- </div> --}}
    {{-- </div> --}}

    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <!-- Property Description --> --}}
    {{-- <div class="col-lg-12 col-md-7 sp-content"> --}}
    {{-- <div class="property-description"> --}}
    {{-- <!-- Description --> --}}
    {{-- <h3 class="desc-headline text-center">Housing Management Section</h3> --}}
    {{-- <img src="/images/Housing.jpg" alt=""> <br> <br> --}}
    {{-- <div class="input"> --}}
    {{-- <p>The Housing Management Section oversees the reception and processing of all rental unit applications, house spot allocations, tenancy changes, and management of select commercial areas within our properties. Its core responsibilities encompass conducting thorough investigations into the social status and physical environment of applicants, resulting in comprehensive reports submitted for review by the Tenants’ Committee. Notably, in recent Housing Estate developments, the department has prioritized accommodation for individuals with physical challenges, underscoring our commitment to inclusivity and accessibility. In addition, the department's responsibilities include creating rental accounts for allocated spots and units, as well as handling accounts for designated commercial areas. By regularly compiling reports, the department offers insights into occupancy trends, financial performance, and other relevant metrics, thereby enabling informed decision-making processes. --}}
    {{-- </p> --}}
    {{-- <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> --> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <!-- Property Description / End --> --}}
    {{-- </div> --}}
    {{-- </div> --}}


    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}

    {{-- <!-- Property Description --> --}}
    {{-- <div class="col-lg-12 col-md-7 sp-content"> --}}
    {{-- <div class="property-description"> --}}
    {{-- <!-- Description --> --}}
    {{-- <h3 class="desc-headline"></h3> --}}
    {{-- <img src="/images/img1.jpg" alt=""> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <!-- Property Description / End --> --}}
    {{-- </div> --}}
    {{-- </div> --}}

    {{-- <!-- Content ================================================== --> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-lg-12 col-md-7 sp-content"> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Customer Service Department</h3> --}}
    {{-- <img src="/images/dept/1.jpg" alt=""> <br> <br> --}}
    {{-- <div class="input"> --}}
    {{-- <p>The Customer Service Department assumes a crucial role within our organization, entrusted with raising awareness of the Corporation’s products and nurturing relationships with lending institutions and potential clients. Serving as the pivotal gateway where dreams of property ownership materialize, the department executes several essential functions to facilitate this journey. Its duties encompass the facilitation of site visits and the management of lot/property allocation to successful applicants, along with the provision of personalized assistance throughout. Furthermore, the department is responsible for initiating sales transactions, ensuring the preparation of offer documents, and overseeing deposit processing to ensure compliance. </p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12 "> --}}
    {{-- <div class="property-description"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <h3 class="desc-headline text-center">Contact Centre</h3> --}}
    {{-- <img src="/images/dept/2.jpg" class="img-fluid" alt=""> <br> <br> --}}
    {{-- <p>The Contact Centre is the Corporation’s centralized hub for communication and support, offering residents and prospective tenants a convenient way to get in touch. The Contact Center is equipped with friendly representatives who are ready to assist you. They are available to handle any inquiries you may have, help resolve issues, and provide information on a wide range of housing matters, such as rental applications, loans, and property maintenance. The Contact Center plays a crucial role in providing prompt and effective responses to inquiries, resulting in improved customer satisfaction and the development of strong and positive relationships. The Contact Center is committed to providing outstanding service and support to our residents and stakeholders, whether it be through phone, email, or online chat. Our goal is to meet the diverse needs of all our customers.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Legal Department</h3> --}}
    {{-- <img src="/images/dept/3.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Legal Department was established in 1972 under the purview of the former Housing Authority. The Legal Department initially concentrated on tasks such as mortgage preparation for the Public Officers' Housing Loans Fund, rent arrears collection, and conveyance preparation. Over time, as the Corporation adapted to meet contemporary demands, the Legal Department underwent substantial transformation to align with the needs of a modern organization. Its key responsibilities now include drafting Agreements for the sale/rental of lots/property, crafting contracts for the contractors involved in the Corporation’s various projects, drafting and reviewing employment contracts, and pursuing loans and rental arrears. This department also provides comprehensive legal counsel to all departments to ensure compliance with legal requirements and minimize legal risks.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Maintenance Section </h3> --}}
    {{-- </div> --}}
    {{-- <p>The Maintenance Section is responsible for establishing and implementing Building and Estate Maintenance Systems to ensure the efficient maintenance of buildings, grounds, and sewage systems. The primary responsibility of this department is to effectively manage and coordinate maintenance activities, such as building maintenance, sewage system upkeep, and depot management. Strict adherence to industry standards and regulations is imperative. Its responsibilities include overseeing well pumping, choke cleaning, effluent disposal, and recommending well digging for sewage purposes. Furthermore, the department conducts regular surveys to evaluate customer satisfaction in relation to maintenance services, promptly addressing any identified areas for improvement to uphold elevated levels of customer satisfaction.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <!-- Contentnew ================================================== --> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Technical Department</h3> --}}
    {{-- </div> --}}
    {{-- <img src="/images/dept/4.jpg" alt=""> <br> <br> --}}
    {{-- <p>The Technical Department has a significant role in the National Housing Corporation as its primary focus is on improving the quality, functionality, and value of our properties through strategic planning and execution. Its responsibilities include overseeing renovation projects to improve housing units and common areas, such as upgrading fixtures, installing energy-efficient systems, and enhancing security measures. The department also identifies and prioritizes capital improvement projects, including roof replacements and facade upgrades, to enhance overall property quality and value. Furthermore, it oversees the coordination of relationships with external vendors, contractors, and service providers engaged in maintenance, repairs, and construction projects, ensuring thorough management of procurement, contract negotiation, and quality assurance.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">The Accounts Department</h3> --}}
    {{-- <img src="/images/ac.jpg" alt=""> <br> --}}
    {{-- <img src="/images/ac2.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Accounts Department plays a pivotal role in advancing the financial and strategic objectives of the Corporation, ensuring sound fiscal management and compliance with international standards. Its responsibilities encompass overseeing cash management, purchase orders, and payments, ensuring the accuracy and timeliness of financial transactions, and adhering to internal controls aligned with International Accounting Standards for asset protection and risk mitigation. Additionally, the department handles budget preparation and monitoring, payroll processing, and account management related to loans, rent, and commercial activities. --}}
    {{-- The primary responsibility of the Loans Department is the management of the Corporation’s loan portfolio by facilitating loan access to low-income individuals. Its key responsibility includes receiving and processing applications for loans, ensuring thorough evaluation and adherence to established criteria.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Human Resources Department</h3> --}}
    {{-- <img src="/images/hr.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Human Resources Department is dedicated to ensuring the Corporation has access to a proficient, skilled, and passionate workforce, which is vital for the successful accomplishment of its overarching goals and objectives. Its core responsibilities include the careful maintenance of personnel records, effective management of leave, and facilitation of processes related to retiring awards documentation. Additionally, the department oversees grievance handling, industrial relations, counseling, health and safety matters, training initiatives, and disciplinary proceedings. The Human Resources Department assumes a significant responsibility in facilitating effective communication among employees, management, and the Board of Directors, thereby creating a work environment that is both harmonious and conducive to the organization's overall achievements.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Special Projects Unit</h3> --}}
    {{-- <img src="/images/unit.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Special Projects Unit manages and oversees the Hurricane Elsa Rebuild/Repair program, ensuring efficient project execution and adherence to timelines, as well as serving as a liaison with clients affected by the hurricane, offering support and guidance throughout the repair/rebuilding process. To ensure effective project management, the department maintains close partnerships with contractors, subcontractors, and skilled artisans. This unit plays a role in maintaining the Corporation's estates in the southern division of the island. It executes a comprehensive Preventative Property Maintenance Program, which includes safety checks, cleaning, rodent control, garbage disposal, gardening, landscaping, and asset repairs, in order to guarantee the properties, remain in optimal condition.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <!-- Contentnew2 ================================================== --> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Registry Section</h3> --}}
    {{-- </div> --}}
    {{-- <img src="/images/regi.jpg" alt=""> <br> <br> --}}
    {{-- <p>The Registry Section serves as the central repository for all essential documents and records pertaining to the Corporation’s properties and transactions. It handles the storage and retrieval of documents, ensuring they remain confidential, accurate, and easily accessible when required. Overall, the Registry Department serves as a vital administrative hub, supporting the Corporation’s operations and compliance efforts with meticulous record-keeping and document management practices.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Security Section</h3> --}}
    {{-- <img src="/images/sec.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Security Section has the critical task of guaranteeing the safety and security of all personnel within our building organization. Its key duties include safeguarding individuals and property through systematic and random patrols, supplemented by surveillance equipment to maintain a secure environment. Additionally, the section monitors and regulates pedestrian and vehicular traffic within the compound to minimize potential security risks and ensure orderly movement.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Wardens</h3> --}}
    {{-- <img src="/images/Wardens.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Wardens assumes responsibility for the management and oversight of a comprehensive portfolio, encompassing 47 housing and 80 land estates. This section monitors all housing units and lots by investigating disputes, addressing issues of illegal occupancy and squatting. Led by the Senior Executive Officer (Ag), Mr. Mark Broomes, and supported by Senior Warden (Ag), Mr. Anthony Armstrong, and Ms. Wilma Jordan Warden, this section is committed to maintaining the integrity and functionality of the Corporation’s housing estates with utmost professionalism and diligence.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- <hr> --}}
    {{-- <div class="container"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col-md-12"> --}}
    {{-- <!-- Main Search Input --> --}}
    {{-- <div class="property-description"> --}}
    {{-- <h3 class="desc-headline text-center">Management Information System Department (MIS)</h3><br> --}}
    {{-- <img src="/images/mis.jpg" alt=""> <br> <br> --}}
    {{-- </div> --}}
    {{-- <p>The Management Information System (MIS) is pivotal to the organization's technological infrastructure, ensuring seamless operations and support across all departments. Its responsibilities span infrastructure management, overseeing and maintaining hardware and network infrastructure for optimal performance, and systems administration, managing operating systems, software applications, and databases while prioritizing data security. Additionally, the MIS Department provides essential user support by troubleshooting hardware, software, and connectivity issues. It also implements security management protocols to safeguard digital assets. The establishment of data backup and recovery plans ensures business continuity. The department is responsible for leading Project Management initiatives, including overseeing system upgrades, software implementations, and infrastructure expansions. Additionally, they conduct ongoing technology evaluation and planning to assess the impact of emerging technologies on organizational objectives, ensuring continuous technological advancement and innovation.</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
@endsection
<style>
    accordion-content,
    .style-2 .toggle-wrap {
        border-bottom: 1px solid transparent;
    }
</style>



<script>
    $(document).ready(function() {
        // Slider 1 initialization
        $('#property-slider-1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#property-slider-nav-1'
        });
        $('#property-slider-nav-1').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '#property-slider-1',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });

        // Slider 2 initialization
        $('#property-slider-2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#property-slider-nav-2'
        });
        $('#property-slider-nav-2').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '#property-slider-2',
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
    });
</script>
