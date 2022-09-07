@extends('pages.tentech.layouts.app')
@section('title', 'The Educational Network')
@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Banner ============================================= -->

    @include('pages.tentech.inc.topBanner')

    <!-- End Banner -->

    <!-- Start Features
                                                                                                                                                                                                    ============================================= -->
    @include('pages.tentech.inc.ourServices')
    <!-- End Our Features -->

    <!-- Start Why Choose Us
                                                                                                                                                                                                    ============================================= -->
    @include('pages.tentech.inc.chooseUs')
    <!-- End Choose us Area -->

    <!-- Start Overview
                                                                                                                                                                                                    ============================================= -->
    @include('pages.tentech.inc.overView')
    <!-- End Overview -->

    <!-- Start Team Area
                                                                                                                                                                                                    ============================================= -->
    @include('pages.tentech.inc.ourProjects')
    <!-- End Team Area -->

    <!-- Start Pricing Area
                                                                                                                                                                                                    ============================================= -->
    {{-- @include('inc.pricing') --}}
    <!-- End Pricing Area -->

    <!-- Star Faq
                                                                                                                                                                                                    ============================================= -->
    {{-- @include('inc.faq') --}}
    <!-- End Faq -->

    <!-- Start Testimonials
                                                                                                                                                                                                    ============================================= -->
    {{-- @include('inc.testimonials') --}}
    <!-- End Testimonials -->

    <!-- Start Blog or latest News
                                                                                                                                                                                                    ============================================= -->
    {{-- @include('inc.blog') --}}

    <!-- End Blog -->

    <!-- Start Contact
                                                                                                                                                                                                    ============================================= -->
    @include('pages.tentech.inc.contactUs')
    <!-- End Contact -->

    <!-- Start Footer
                                                                                                                                                                                                    ============================================= -->

    <!-- End Footer -->
@endsection
