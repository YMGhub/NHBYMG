@extends('layouts.layout')
@section('content')
    <!-- Map Container -->
    <style>
        .list-layout .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 55%, transparent);
        }


        .bannerOurDeparment1 {
            background: url("https://nhc.ymgweb.com/images/Project-Hero.jpg") !important;
            background-position: 50% 50% !important;
            background-size: cover !important;
            margin-bottom: 40px
        }

        .parallax1 {
            position: relative;
            z-index: 99;
        }

        .parallax-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 101;
            background-color: #333;
        }

        #GroupFields {
            opacity: 0;
            visibility: hidden;
            display: none;
        }

        .mostrar {

            opacity: 1 !important;
            visibility: visible !important;
            display: block !important
        }

        /*CoApplicant Fields*/
        #DataCoApplicant {
            opacity: 0;
            visibility: hidden;
            display: none;
        }

        .mostrarCoApp {

            opacity: 1 !important;
            visibility: visible !important;
            display: block !important
        }

        /*CoApplicant Fields*/

        .buttonRed {
            background: red !important;
        }

        .hideArea {
            display: none;
        }

        .hideArea2 {
            display: none;
        }
    </style>
     <div class="parallax1 bannerOurDeparment2" data-background="/images/Project-Hero.jpg" data-color="#"
     data-color-opacity="0.1" data-img-width="1000" data-img-height="1200"
     style="background-position: 0;   background-image: url(/images/Project-Hero.jpg);
 background-attachment: fixed;
 background-size: 100% !important;
 background-position: center !important;">
     <div class="parallax-overlay" style="background-color: rgb(54, 56, 62); opacity: 0.45;"></div>
     <div class="parallax-content">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="main-search-container">
                         <h2>NATIONAL HOUSING CORPORATION</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="clearfix"></div>
 <!-- Map Container / End -->
 <!-- Container / Start -->
 <div class="container">

    <div class="row">



        <h4 class="text-center headline margin-top-35 margin-bottom-35">
            APPLICATION FOR RENTAL UNIT/ LOT</h4>
                <!--div id="contact-message"></div-->



            @if(session('statusCode'))

            <div class="alert alert-success alert-custom alert-success-custom">

                <p style="margin-bottom:0px">Your application has been submitted successfully.</p>
                <p style="margin-bottom:0px">Application Number: {{ session('ApplicationNumber') }}</p>
                <p style="margin-bottom:0px">A summary of your application has also been sent to your email address for reference.</p>

            </div>

                <script>
                    localStorage.clear(); // O elimina claves específicas
                </script>
            @endif


</div>
</div>
@endsection
