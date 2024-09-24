@extends('layouts.app')
@section('meta_title', isset($title) ? $title : 'Home')
@section('content')
    <!-- ----Main Banner START -->
    @include('frontend.includes.home_slider')
    <!-- ---- Main Banner END -->


    <section class="py-0 py-xl-5">
        <div class="container">
            <div class="row g-4">
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
                        <span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="10" data-purecounter-delay="200"
                                    data-purecounter-duration="0">10</h5>
                                <span class="mb-0 h5">K</span>
                            </div>
                            <p class="mb-0">Online Courses</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-blue mb-0"><i class="fas fa-user-tie"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="200" data-purecounter-delay="200"
                                    data-purecounter-duration="0">200</h5>
                                <span class="mb-0 h5">+</span>
                            </div>
                            <p class="mb-0">Expert Tutors</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-user-graduate"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="60" data-purecounter-delay="200"
                                    data-purecounter-duration="0">60</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">Online Students</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-info mb-0"><i class="bi bi-patch-check-fill"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="6" data-purecounter-delay="300"
                                    data-purecounter-duration="0">6</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">Certified Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------Test Series START -->
    <section class="bg-light py-5 position-relative overflow-hidden">
        <div class="container position-relative py-5">
            <!-- Title -->
            <div class="row">
                <div class="col-lg-12 mb-4 text-center">
                    <h2 class="mb-0 fs-1">Why <span class="text-warning">Choose</span> us</h2>
                    <p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
                </div>
            </div>
            <div class="row g-4 g-lg-5">
                <!-- Item -->
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-body shadow rounded-3 text-center p-4 position-relative">
                        <!-- Image -->
                        <img src="{{ static_asset('assets/images/element/online.svg') }}" class="h-100px mb-3"
                            alt="">
                        <!-- Title -->
                        <h5 class="mb-2"><a href="#" class="stretched-link">Guided Learning</a></h5>
                        <p class="text-truncate-2 mb-2">through mentor programs, mock tests and detailed performance
                            analysis</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-body shadow rounded-3 text-center p-4 position-relative">
                        <!-- Image -->
                        <img src="{{ static_asset('assets/images/element/idea.svg') }}" class="h-100px mb-3"
                            alt="">
                        <!-- Title -->
                        <h5 class="mb-2"><a href="#" class="stretched-link">Free Mock Tests</a></h5>
                        <p class="text-truncate-2 mb-2">that contain questions similar to the real exam and detailed
                            answer
                            explanation with time saving tips</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-xl-4">
                    <div class="bg-body shadow rounded-3 text-center p-4 position-relative">
                        <!-- Image -->
                        <img src="{{ static_asset('assets/images/element/instructor-course.svg') }}"
                            class="h-100px mb-3" alt="">
                        <!-- Title -->
                        <h5 class="mb-2"><a href="#" class="stretched-link">Faculty members</a></h5>
                        <p class="text-truncate-2 mb-2">who have cleared multiple government job exams and have coached
                            thousands of students for their section</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------Test Series END -->

    <!-- -----Listed course START -->
    <section class="position-relative pb-0 pb-sm-5 bg-gradient-one">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-0 fs-1">Popular <span class="text-warning">Exams</span></h2>
                    <p class="mb-0">Get exam-ready with concepts, questions and study notes as per the latest pattern
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/44.webp') }}" alt=""
                                style="border-radius: 50px;">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Bank Clerk</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/1.webp') }}" alt=""
                                style="border-radius: 50px;">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Bank PO</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/4.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">SSC</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/21.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">RBI</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/3.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Railways</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/70.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Nabard</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/66.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Others</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/90.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Teaching</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/43.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Defence & Police</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/85.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">Insurance</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/63.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">MBA</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="bg-primary bg-opacity-10 rounded-3 text-center p-3 position-relative btn-transition">
                        <!-- Image -->
                        <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                            <img src="{{ static_asset('assets/images/element/91.webp') }}" alt="">
                        </div>
                        <!-- Title -->
                        <span class="mb-0 text-dark">SEBI</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------Listed course END -->

    <!-- -------Top Listed START -->
    <section>
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-12 mx-auto text-center">
                    <h2 class="fs-1">Top Listed <span class="text-warning">Test</span> Series</h2>
                    <p class="mb-0">Check out most 🤩 Test Series in the market</p>
                </div>
            </div>

            <!-- Test Series START -->
            <div class="row">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="tiny-slider-inner pb-1" data-autoplay="true" data-arrow="true" data-edge="2"
                        data-dots="false" data-items="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                        <!-- Card START -->
                        <div>
                            <div class="card border bg-transparent p-2 h-100">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/03.jpg') }}"
                                            class="card-img-top" alt="course image">
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <h5 class="card-title fw-normal"><a href="" class="stretched-link">Sketch
                                            from
                                            A to Z: for app designer</a></h5>
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Billy Vasquez</h6>
                                        <a href="#" class="btn btn-link p-0 mb-0">View detail<i
                                                class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card START -->

                        <!-- Card START -->
                        <div>
                            <div class="card border bg-transparent h-100 p-2">

                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover"><!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/01.jpg') }}"
                                            class="card-img-top" alt="course image">
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="" class="stretched-link">Graphic
                                            Design Masterclass</a></h5>
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Carolyn Ortiz</h6>
                                        <a href="#" class="btn btn-link p-0 mb-0">View detail<i
                                                class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card START -->

                        <!-- Card START -->
                        <div>
                            <div class="card border bg-transparent h-100 p-2">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/04.jpg') }}"
                                            class="card-img-top" alt="course image">
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="" class="stretched-link">Create a
                                            Design in Figma</a></h5>
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Dennis Barrett</h6>
                                        <a href="#" class="btn btn-link p-0 mb-0">View detail<i
                                                class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card START -->

                        <!-- Card START -->
                        <div>
                            <div class="card border bg-transparent h-100 p-2">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/01.jpg') }}"
                                            class="card-img-top" alt="course image">
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="" class="stretched-link">Build
                                            Websites with HTML</a></h5>
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Larry Lawson</h6>
                                        <a href="#" class="btn btn-link p-0 mb-0">View detail<i
                                                class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card START -->

                        <!-- Card START -->
                        <div>
                            <div class="card border bg-transparent h-100 p-2">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/03.jpg') }}"
                                            class="card-img-top" alt="course image">
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="" class="stretched-link">Build
                                            Responsive Websites with Angular</a></h5>
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Larry Lawson</h6>
                                        <a href="#" class="btn btn-link p-0 mb-0">View detail<i
                                                class="bi bi-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card START -->
                    </div>
                </div>
                <!-- Slider END -->
            </div>
            <!-- Test Series END -->

        </div>
    </section>
    <!-- ------Top Listed END -->

    <!-- ----------Test Series slider START -->
    <section class="bg-gradient-two pb-5">
        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-0 fs-1">Explore by <span class="text-danger">Your Target</span> Course Exams</h2>
                    <p class="mb-0">Get exam-ready with concepts, questions and study notes as per the latest pattern
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="bg-light rounded-3 p-4">
                        <!-- Slider START -->
                        <div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover py-1">
                            <div class="tiny-slider-inner" data-autoplay="true" data-gutter="80" data-arrow="true"
                                data-dots="false" data-items="5" data-items-lg="3" data-items-md="2"
                                data-items-xs="1">

                                <!-- Item -->
                                <div>
                                    <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                        <img src="{{ static_asset('assets/images/element/ssc.webp') }}" class="h-40px"
                                            alt="">
                                        <a href="#" class="text-primary-hover stretched-link"><span
                                                class="h6 ms-2">SSC Exams</span></a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div>
                                    <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                        <img src="{{ static_asset('assets/images/element/bankin.webp') }}"
                                            class="h-40px" alt="">
                                        <a href="#" class="text-primary-hover stretched-link"><span
                                                class="h6 ms-2">Banking Exams</span></a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div>
                                    <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                        <img src="{{ static_asset('assets/images/element/UPSC.webp') }}" class="h-40px"
                                            alt="">
                                        <a href="#" class="text-primary-hover stretched-link"><span
                                                class="h6 ms-2">Teaching Exams</span></a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div>
                                    <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                        <img src="{{ static_asset('assets/images/element/UPSC.webp') }}" class="h-40px"
                                            alt="">
                                        <a href="#" class="text-primary-hover stretched-link"><span
                                                class="h6 ms-2">Civil Exam</span></a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div>
                                    <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                        <img src="{{ static_asset('assets/images/element/railways.webp') }}"
                                            class="h-40px" alt="">
                                        <a href="#" class="text-primary-hover stretched-link"><span
                                                class="h6 ms-2">Railways Exams</span></a>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div>
                                    <div class="bg-body text-center rounded-2 border py-2 px-1 position-relative">
                                        <img src="{{ static_asset('assets/images/element/defence.webp') }}"
                                            class="h-40px" alt="">
                                        <a href="#" class="text-primary-hover stretched-link"><span
                                                class="h6 ms-2">Defence Exams</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
        <div class="container mt-5">
            <div class="row g-4">
                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-purple bg-opacity-10 rounded-circle text-purple"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC CGL</a></h5>
                                <span>89 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-success bg-opacity-10 rounded-circle text-success"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC CHSL</a></h5>
                                <span>95 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-success bg-opacity-10 rounded-circle text-success"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC CPO</a></h5>
                                <span>38 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-success bg-opacity-10 rounded-circle text-success"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC Selection Post</a>
                                </h5>
                                <span>105 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-orange bg-opacity-10 rounded-circle text-orange"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC GD Constable</a></h5>
                                <span>72 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-primary bg-opacity-10 rounded-circle text-primary"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC MTS</a></h5>
                                <span>68 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-info bg-opacity-10 rounded-circle text-info"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC Stenographer</a></h5>
                                <span>51 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="card card-body shadow rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><img
                                    src="{{ static_asset('assets/images/element/ssc.webp') }}" alt=""></div>
                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#" class="stretched-link">SSC JE CE</a></h5>
                                <span>69 Test Series</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------Test Series slider END -->

    <!-- Feature START -->
    <section class="position-relative">

        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-0 fs-1">Explore by <span class="text-warning">Your Target</span> Exam</h2>
                <p class="mb-0">Get exam-ready with concepts, questions and study notes as per the latest pattern</p>
            </div>
        </div>


        <div class="container">
            <div class="row g-4">

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body bg-light p-4 h-100">
                        <!-- Svg image decoration -->
                        <figure>
                            <svg class="fill-primary" width="63.28px" height="47.41px" viewbox="0 0 63.28 47.41"
                                style="enable-background:new 0 0 63.28 47.41;">
                                <path
                                    d="M61.99,43.13c-0.11,0-0.22-0.02-0.32-0.05l-13.04-4.35c-0.42-0.14-0.7-0.53-0.7-0.97V24.41c0-0.44,0.28-0.83,0.7-0.97 l13.04-4.35c0.31-0.11,0.66-0.05,0.93,0.14c0.27,0.19,0.43,0.5,0.43,0.83V42.1c0,0.33-0.16,0.64-0.43,0.83 C62.41,43.06,62.2,43.13,61.99,43.13z M49.97,37.01l10.99,3.66V21.49l-10.99,3.66V37.01z">
                                </path>
                                <path
                                    d="M41.25,37.73H2.4c-0.57,0-1.03-0.46-1.03-1.03v-5.28c0-0.57,0.46-1.03,1.03-1.03h38.85c2.02,0,3.67,1.65,3.67,3.67 S43.27,37.73,41.25,37.73z M3.43,35.68h37.82c0.89,0,1.62-0.72,1.62-1.62c0-0.89-0.72-1.62-1.62-1.62H3.43V35.68z">
                                </path>
                                <path
                                    d="M57.02,33.7c-0.57,0-1.03-0.46-1.03-1.03V21.72c0-0.57,0.46-1.03,1.03-1.03c0.57,0,1.03,0.46,1.03,1.03v10.95 C58.05,33.24,57.59,33.7,57.02,33.7z">
                                </path>
                                <path
                                    d="M15.11,24.9c-6.2,0-11.24-5.04-11.24-11.24S8.91,2.41,15.11,2.41s11.24,5.04,11.24,11.24S21.3,24.9,15.11,24.9z  M15.11,4.47c-5.07,0-9.19,4.12-9.19,9.19c0,5.07,4.12,9.19,9.19,9.19s9.19-4.12,9.19-9.19C24.29,8.59,20.17,4.47,15.11,4.47z">
                                </path>
                                <path
                                    d="M15.11,18.8c-2.84,0-5.14-2.31-5.14-5.14c0-2.84,2.31-5.14,5.14-5.14c2.84,0,5.14,2.31,5.14,5.14 C20.25,16.49,17.94,18.8,15.11,18.8z M15.11,10.57c-1.7,0-3.09,1.39-3.09,3.09c0,1.7,1.39,3.09,3.09,3.09 c1.7,0,3.09-1.39,3.09-3.09C18.19,11.95,16.81,10.57,15.11,10.57z">
                                </path>
                                <path
                                    d="M35.54,18.8c-2.84,0-5.14-2.31-5.14-5.14c0-2.84,2.31-5.14,5.14-5.14c2.84,0,5.14,2.31,5.14,5.14 C40.68,16.49,38.37,18.8,35.54,18.8z M35.54,10.57c-1.7,0-3.09,1.39-3.09,3.09c0,1.7,1.39,3.09,3.09,3.09 c1.7,0,3.09-1.39,3.09-3.09C38.62,11.95,37.24,10.57,35.54,10.57z">
                                </path>
                                <path
                                    d="M35.54,24.9c-6.2,0-11.24-5.04-11.24-11.24S29.34,2.41,35.54,2.41s11.24,5.04,11.24,11.24S41.73,24.9,35.54,24.9z  M35.54,4.47c-5.07,0-9.19,4.12-9.19,9.19c0,5.07,4.12,9.19,9.19,9.19s9.19-4.12,9.19-9.19C44.72,8.59,40.6,4.47,35.54,4.47z">
                                </path>
                                <path
                                    d="M47.15,44.93H4.2c-1.56,0-2.83-1.27-2.83-2.83V20.06c0-1.56,1.27-2.83,2.83-2.83H6c0.57,0,1.03,0.46,1.03,1.03 c0,0.57-0.46,1.03-1.03,1.03H4.2c-0.43,0-0.77,0.35-0.77,0.77V42.1c0,0.43,0.35,0.77,0.77,0.77h42.95c0.43,0,0.77-0.35,0.77-0.77 V20.06c0-0.43-0.35-0.77-0.77-0.77h-2.51c-0.57,0-1.03-0.46-1.03-1.03c0-0.57,0.46-1.03,1.03-1.03h2.51c1.56,0,2.83,1.27,2.83,2.83 V42.1C49.97,43.66,48.71,44.93,47.15,44.93z">
                                </path>
                            </svg>
                        </figure>
                        <h5>Occasional Video Update</h5>
                        <p class="mb-0">Mountains in just switching city steps Might rung line what Was or between
                            towards the have phase.</p>
                    </div>
                </div>


                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body bg-light p-4 h-100">
                        <!-- Svg image decoration -->
                        <figure>
                            <svg class="fill-primary" width="63.28px" height="47.41px" viewbox="0 0 63.28 47.41"
                                style="enable-background:new 0 0 63.28 47.41;">
                                <path
                                    d="M61.99,43.13c-0.11,0-0.22-0.02-0.32-0.05l-13.04-4.35c-0.42-0.14-0.7-0.53-0.7-0.97V24.41c0-0.44,0.28-0.83,0.7-0.97 l13.04-4.35c0.31-0.11,0.66-0.05,0.93,0.14c0.27,0.19,0.43,0.5,0.43,0.83V42.1c0,0.33-0.16,0.64-0.43,0.83 C62.41,43.06,62.2,43.13,61.99,43.13z M49.97,37.01l10.99,3.66V21.49l-10.99,3.66V37.01z">
                                </path>
                                <path
                                    d="M41.25,37.73H2.4c-0.57,0-1.03-0.46-1.03-1.03v-5.28c0-0.57,0.46-1.03,1.03-1.03h38.85c2.02,0,3.67,1.65,3.67,3.67 S43.27,37.73,41.25,37.73z M3.43,35.68h37.82c0.89,0,1.62-0.72,1.62-1.62c0-0.89-0.72-1.62-1.62-1.62H3.43V35.68z">
                                </path>
                                <path
                                    d="M57.02,33.7c-0.57,0-1.03-0.46-1.03-1.03V21.72c0-0.57,0.46-1.03,1.03-1.03c0.57,0,1.03,0.46,1.03,1.03v10.95 C58.05,33.24,57.59,33.7,57.02,33.7z">
                                </path>
                                <path
                                    d="M15.11,24.9c-6.2,0-11.24-5.04-11.24-11.24S8.91,2.41,15.11,2.41s11.24,5.04,11.24,11.24S21.3,24.9,15.11,24.9z  M15.11,4.47c-5.07,0-9.19,4.12-9.19,9.19c0,5.07,4.12,9.19,9.19,9.19s9.19-4.12,9.19-9.19C24.29,8.59,20.17,4.47,15.11,4.47z">
                                </path>
                                <path
                                    d="M15.11,18.8c-2.84,0-5.14-2.31-5.14-5.14c0-2.84,2.31-5.14,5.14-5.14c2.84,0,5.14,2.31,5.14,5.14 C20.25,16.49,17.94,18.8,15.11,18.8z M15.11,10.57c-1.7,0-3.09,1.39-3.09,3.09c0,1.7,1.39,3.09,3.09,3.09 c1.7,0,3.09-1.39,3.09-3.09C18.19,11.95,16.81,10.57,15.11,10.57z">
                                </path>
                                <path
                                    d="M35.54,18.8c-2.84,0-5.14-2.31-5.14-5.14c0-2.84,2.31-5.14,5.14-5.14c2.84,0,5.14,2.31,5.14,5.14 C40.68,16.49,38.37,18.8,35.54,18.8z M35.54,10.57c-1.7,0-3.09,1.39-3.09,3.09c0,1.7,1.39,3.09,3.09,3.09 c1.7,0,3.09-1.39,3.09-3.09C38.62,11.95,37.24,10.57,35.54,10.57z">
                                </path>
                                <path
                                    d="M35.54,24.9c-6.2,0-11.24-5.04-11.24-11.24S29.34,2.41,35.54,2.41s11.24,5.04,11.24,11.24S41.73,24.9,35.54,24.9z  M35.54,4.47c-5.07,0-9.19,4.12-9.19,9.19c0,5.07,4.12,9.19,9.19,9.19s9.19-4.12,9.19-9.19C44.72,8.59,40.6,4.47,35.54,4.47z">
                                </path>
                                <path
                                    d="M47.15,44.93H4.2c-1.56,0-2.83-1.27-2.83-2.83V20.06c0-1.56,1.27-2.83,2.83-2.83H6c0.57,0,1.03,0.46,1.03,1.03 c0,0.57-0.46,1.03-1.03,1.03H4.2c-0.43,0-0.77,0.35-0.77,0.77V42.1c0,0.43,0.35,0.77,0.77,0.77h42.95c0.43,0,0.77-0.35,0.77-0.77 V20.06c0-0.43-0.35-0.77-0.77-0.77h-2.51c-0.57,0-1.03-0.46-1.03-1.03c0-0.57,0.46-1.03,1.03-1.03h2.51c1.56,0,2.83,1.27,2.83,2.83 V42.1C49.97,43.66,48.71,44.93,47.15,44.93z">
                                </path>
                            </svg>
                        </figure>
                        <h5>Occasional Video Update</h5>
                        <p class="mb-0">Mountains in just switching city steps Might rung line what Was or between
                            towards the have phase.</p>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body bg-light p-4 h-100">
                        <!-- Svg icon -->
                        <figure>
                            <svg class="fill-orange" width="54.22px" height="58.19px" viewbox="0 0 54.22 58.19"
                                style="enable-background:new 0 0 54.22 58.19;">
                                <path
                                    d="M27.11,9.75c-2.32,0-4.21-1.89-4.21-4.21c0-2.32,1.89-4.21,4.21-4.21c2.32,0,4.21,1.89,4.21,4.21 C31.32,7.86,29.43,9.75,27.11,9.75z M27.11,3.05c-1.37,0-2.49,1.12-2.49,2.49s1.12,2.49,2.49,2.49s2.49-1.12,2.49-2.49 S28.48,3.05,27.11,3.05z">
                                </path>
                                <path
                                    d="M31.61,27.21H22.6c-0.48,0-0.86-0.39-0.86-0.86c0-0.48,0.39-0.86,0.86-0.86h9.01c0.48,0,0.86,0.39,0.86,0.86 C32.48,26.82,32.09,27.21,31.61,27.21z">
                                </path>
                                <path
                                    d="M22.31,27.21c-1.51,0-1.68-0.03-1.75-0.05c-1.14-0.22-1.96-1.25-1.96-2.45v-8.63c0-2.79,2.09-5.14,4.87-5.46 c0.85-0.1,2.08-0.14,3.66-0.12c1.55-0.02,2.79,0.02,3.64,0.12c2.78,0.32,4.87,2.66,4.87,5.46v8.63c0,1.2-0.83,2.23-1.96,2.45 c-0.08,0.02-0.26,0.05-2.05,0.05c-0.48,0-0.86-0.39-0.86-0.86v-8.72c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v7.86 c0.44,0,0.81-0.01,0.91-0.02c0.28-0.05,0.52-0.38,0.52-0.75v-8.63c0-1.92-1.44-3.53-3.34-3.75c-0.78-0.09-1.94-0.13-3.44-0.11 c-1.52-0.02-2.68,0.02-3.46,0.11c-1.9,0.22-3.34,1.83-3.34,3.75v8.63c0,0.37,0.24,0.7,0.56,0.76c0.07,0.01,0.43,0.01,0.86,0.01 v-7.86c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v8.72c0,0.48-0.38,0.86-0.86,0.86C22.5,27.21,22.4,27.21,22.31,27.21 z">
                                </path>
                                <path
                                    d="M13.31,56.75c-0.48,0-0.86-0.39-0.86-0.86v-4.11c0-0.48,0.39-0.86,0.86-0.86s0.86,0.39,0.86,0.86v4.11 C14.17,56.37,13.79,56.75,13.31,56.75z">
                                </path>
                                <path
                                    d="M9.51,43.26c-2.27,0-4.12-1.85-4.12-4.12s1.85-4.12,4.12-4.12c2.27,0,4.12,1.85,4.12,4.12S11.78,43.26,9.51,43.26z  M9.51,36.75c-1.32,0-2.39,1.07-2.39,2.39c0,1.32,1.07,2.39,2.39,2.39c1.32,0,2.39-1.07,2.39-2.39 C11.9,37.83,10.83,36.75,9.51,36.75z">
                                </path>
                                <path
                                    d="M5.7,56.75c-0.48,0-0.86-0.39-0.86-0.86v-4.11c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v4.11 C6.57,56.37,6.18,56.75,5.7,56.75z">
                                </path>
                                <path
                                    d="M30.91,56.75c-0.48,0-0.86-0.39-0.86-0.86v-4.11c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v4.11 C31.77,56.37,31.39,56.75,30.91,56.75z">
                                </path>
                                <path
                                    d="M27.11,43.26c-2.27,0-4.12-1.85-4.12-4.12s1.85-4.12,4.12-4.12c2.27,0,4.12,1.85,4.12,4.12S29.38,43.26,27.11,43.26z  M27.11,36.75c-1.32,0-2.39,1.07-2.39,2.39c0,1.32,1.07,2.39,2.39,2.39s2.39-1.07,2.39-2.39C29.5,37.83,28.43,36.75,27.11,36.75z">
                                </path>
                                <path
                                    d="M23.31,56.75c-0.48,0-0.86-0.39-0.86-0.86v-4.11c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v4.11 C24.17,56.37,23.78,56.75,23.31,56.75z">
                                </path>
                                <path
                                    d="M48.51,56.75c-0.48,0-0.86-0.39-0.86-0.86v-4.11c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v4.11 C49.38,56.37,48.99,56.75,48.51,56.75z">
                                </path>
                                <path
                                    d="M44.71,43.26c-2.27,0-4.12-1.85-4.12-4.12s1.85-4.12,4.12-4.12s4.12,1.85,4.12,4.12S46.98,43.26,44.71,43.26z M44.71,36.75 c-1.32,0-2.39,1.07-2.39,2.39c0,1.32,1.07,2.39,2.39,2.39c1.32,0,2.39-1.07,2.39-2.39C47.1,37.83,46.03,36.75,44.71,36.75z">
                                </path>
                                <path
                                    d="M40.91,56.75c-0.48,0-0.86-0.39-0.86-0.86v-4.11c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v4.11 C41.77,56.37,41.38,56.75,40.91,56.75z">
                                </path>
                                <path
                                    d="M51.78,31.77H2.44C1.64,31.77,1,31.13,1,30.34v-3.42c0-0.79,0.64-1.44,1.44-1.44h49.35c0.79,0,1.44,0.64,1.44,1.44v3.42 C53.22,31.13,52.57,31.77,51.78,31.77z M2.72,30.05H51.5v-2.84H2.72V30.05z">
                                </path>
                                <path
                                    d="M3.01,38.35c-0.48,0-0.86-0.39-0.86-0.86v-6.58c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v6.58 C3.87,37.97,3.48,38.35,3.01,38.35z">
                                </path>
                                <path
                                    d="M51.21,38.35c-0.48,0-0.86-0.39-0.86-0.86v-6.58c0-0.48,0.39-0.86,0.86-0.86c0.48,0,0.86,0.39,0.86,0.86v6.58 C52.07,37.97,51.69,38.35,51.21,38.35z">
                                </path>
                                <path
                                    d="M16.95,56.75H2.07c-0.48,0-0.86-0.39-0.86-0.86v-6.5c0-2.73,2.04-5.02,4.75-5.33c0.47-0.06,0.9,0.28,0.95,0.76 s-0.29,0.9-0.76,0.95c-1.84,0.21-3.23,1.77-3.23,3.62v5.63h13.16V49.4c0-1.85-1.39-3.41-3.23-3.62c-0.47-0.05-0.81-0.48-0.76-0.95 c0.05-0.47,0.49-0.81,0.95-0.76c2.71,0.31,4.75,2.6,4.75,5.33v6.5C17.81,56.37,17.42,56.75,16.95,56.75z">
                                </path>
                                <path
                                    d="M34.55,56.75H19.67c-0.48,0-0.86-0.39-0.86-0.86v-6.5c0-2.73,2.04-5.02,4.75-5.33c0.47-0.06,0.9,0.28,0.95,0.76 c0.05,0.47-0.29,0.9-0.76,0.95c-1.84,0.21-3.23,1.77-3.23,3.62v5.63h13.16V49.4c0-1.85-1.39-3.41-3.23-3.62 c-0.47-0.05-0.81-0.48-0.76-0.95c0.05-0.47,0.49-0.81,0.95-0.76c2.71,0.31,4.75,2.6,4.75,5.33v6.5 C35.41,56.37,35.02,56.75,34.55,56.75z">
                                </path>
                                <path
                                    d="M52.15,56.75H37.27c-0.48,0-0.86-0.39-0.86-0.86v-6.5c0-2.73,2.04-5.02,4.75-5.33c0.47-0.06,0.9,0.28,0.95,0.76 s-0.29,0.9-0.76,0.95c-1.84,0.21-3.23,1.77-3.23,3.62v5.63h13.15V49.4c0-1.85-1.39-3.41-3.23-3.62c-0.47-0.05-0.81-0.48-0.76-0.95 c0.05-0.47,0.49-0.81,0.95-0.76c2.71,0.31,4.75,2.6,4.75,5.33v6.5C53.01,56.37,52.63,56.75,52.15,56.75z">
                                </path>
                            </svg>
                        </figure>
                        <h5>Online Test Series From Experts</h5>
                        <p class="mb-0">Prisoners And mountains in just switching city steps Might rung line Was or
                            between the have phase.</p>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body bg-light p-4 h-100">
                        <!-- Svg image decoration -->
                        <figure>
                            <svg class="fill-purple" width="54.22px" height="52.86px" viewbox="0 0 54.22 52.86"
                                style="enable-background:new 0 0 54.22 52.86;">
                                <path
                                    d="M32.48,50.83H15.21c-0.45,0-0.82-0.37-0.82-0.82v-2.73c0-1.21-0.91-2.24-2.11-2.39L9.9,44.58 c-2.02-0.26-3.54-1.99-3.54-4.03V34.8l-2.94,0.02c-0.59,0-1.11-0.3-1.41-0.81C1.72,33.5,1.72,32.9,2,32.39l2.63-4.63 c1.46-2.58,2.24-5.51,2.23-8.47c0-4.95,2.25-9.62,6.02-12.49c3.77-2.87,8.47-4.09,13.22-3.44c0.67,0.09,1.35,0.22,2,0.39 c0.44,0.11,0.7,0.56,0.59,1c-0.11,0.44-0.57,0.71-1,0.59c-0.59-0.15-1.2-0.27-1.81-0.36c-4.32-0.59-8.58,0.52-12,3.12 c-3.36,2.56-5.37,6.74-5.37,11.18c0,3.25-0.85,6.46-2.45,9.28L3.44,33.2l2.94-0.03C7.28,33.17,8,33.9,8,34.8v5.76 c0,1.21,0.91,2.24,2.11,2.39l2.38,0.31c2.02,0.26,3.54,1.99,3.54,4.03v1.9h15.62l-0.02-9.33c0-2.73,1.15-5.4,3.16-7.35 c0.66-0.64,1.27-1.33,1.81-2.07c0.27-0.37,0.78-0.45,1.15-0.18c0.37,0.27,0.45,0.79,0.18,1.15c-0.6,0.81-1.27,1.58-1.99,2.28 c-1.72,1.66-2.67,3.85-2.66,6.16l0.02,10.15c0,0.22-0.09,0.43-0.24,0.58C32.91,50.75,32.7,50.83,32.48,50.83z">
                                </path>
                                <path
                                    d="M43.22,50.83H2.18c-0.45,0-0.82-0.37-0.82-0.82c0-0.45,0.37-0.82,0.82-0.82h41.04c0.45,0,0.82,0.37,0.82,0.82 C44.05,50.47,43.68,50.83,43.22,50.83z">
                                </path>
                                <path
                                    d="M43.81,27.69H29.1c-0.45,0-0.82-0.37-0.82-0.82c0-0.45,0.37-0.82,0.82-0.82h14.72c0.45,0,0.82,0.37,0.82,0.82 C44.64,27.32,44.27,27.69,43.81,27.69z">
                                </path>
                                <path
                                    d="M45.79,18.58H31.84c-0.45,0-0.82-0.37-0.82-0.82c0-0.45,0.37-0.82,0.82-0.82h13.95c0.45,0,0.82,0.37,0.82,0.82 C46.61,18.21,46.24,18.58,45.79,18.58z">
                                </path>
                                <path
                                    d="M43.81,9.46H26.68c-0.45,0-0.82-0.37-0.82-0.82c0-0.45,0.37-0.82,0.82-0.82h17.13c0.45,0,0.82,0.37,0.82,0.82 C44.64,9.09,44.27,9.46,43.81,9.46z">
                                </path>
                                <path
                                    d="M46.59,12.23c-1.98,0-3.6-1.61-3.6-3.6s1.61-3.6,3.6-3.6s3.6,1.61,3.6,3.6S48.57,12.23,46.59,12.23z M46.59,6.69 c-1.07,0-1.95,0.87-1.95,1.95c0,1.07,0.87,1.95,1.95,1.95c1.07,0,1.95-0.87,1.95-1.95C48.54,7.56,47.66,6.69,46.59,6.69z">
                                </path>
                                <path
                                    d="M48.56,21.35c-1.98,0-3.6-1.61-3.6-3.6s1.61-3.6,3.6-3.6s3.6,1.61,3.6,3.6S50.55,21.35,48.56,21.35z M48.56,15.8 c-1.07,0-1.95,0.87-1.95,1.95c0,1.07,0.87,1.95,1.95,1.95c1.07,0,1.95-0.87,1.95-1.95C50.51,16.68,49.64,15.8,48.56,15.8z">
                                </path>
                                <path
                                    d="M46.59,30.46c-1.98,0-3.6-1.61-3.6-3.6s1.61-3.6,3.6-3.6s3.6,1.61,3.6,3.6S48.57,30.46,46.59,30.46z M46.59,24.92 c-1.07,0-1.95,0.87-1.95,1.95s0.87,1.95,1.95,1.95c1.07,0,1.95-0.87,1.95-1.95S47.66,24.92,46.59,24.92z">
                                </path>
                            </svg>
                        </figure>
                        <h5>Class Program Options</h5>
                        <p class="mb-0">Switching city steps Might rung line what Mr Bulk; Was or between towards the
                            have phase.</p>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body bg-light p-4 h-100">
                        <!-- Svg image decoration -->
                        <figure>
                            <svg class="fill-warning" width="60.77px" height="52.15px" viewbox="0 0 60.77 52.15"
                                style="enable-background:new 0 0 60.77 52.15;">
                                <path
                                    d="M49.74,35.57c-3.93,0-7.13-3.2-7.13-7.13c0-3.93,3.2-7.13,7.13-7.13s7.13,3.2,7.13,7.13 C56.87,32.37,53.67,35.57,49.74,35.57z M49.74,23c-3,0-5.44,2.44-5.44,5.44c0,3,2.44,5.44,5.44,5.44c3,0,5.44-2.44,5.44-5.44 C55.19,25.44,52.74,23,49.74,23z">
                                </path>
                                <path
                                    d="M49.74,38.55c-5.57,0-10.11-4.53-10.11-10.11c0-5.57,4.53-10.11,10.11-10.11c5.57,0,10.11,4.53,10.11,10.11 C59.85,34.01,55.32,38.55,49.74,38.55z M49.74,20.02c-4.64,0-8.42,3.78-8.42,8.42c0,4.64,3.78,8.42,8.42,8.42 c4.64,0,8.42-3.78,8.42-8.42C58.17,23.8,54.39,20.02,49.74,20.02z">
                                </path>
                                <path
                                    d="M49.74,50.93c-1.52,0-2.76-1.24-2.76-2.76V37.51c0-0.25,0.11-0.49,0.31-0.65c0.2-0.16,0.46-0.22,0.7-0.17 c1.15,0.24,2.33,0.24,3.48,0c0.25-0.05,0.51,0.01,0.7,0.17c0.2,0.16,0.31,0.4,0.31,0.65v10.66C52.5,49.69,51.26,50.93,49.74,50.93z  M48.67,38.49v9.68c0,0.59,0.48,1.07,1.07,1.07c0.59,0,1.07-0.48,1.07-1.07v-9.68C50.1,38.57,49.39,38.57,48.67,38.49z">
                                </path>
                                <path
                                    d="M55.2,21.79c-0.47,0-0.84-0.38-0.84-0.84V9.1c0-0.53-0.44-0.97-0.97-0.97h-1.13v11.15c0,0.47-0.38,0.84-0.84,0.84 s-0.84-0.38-0.84-0.84V7.29c0-0.47,0.38-0.84,0.84-0.84h1.97c1.46,0,2.65,1.19,2.65,2.66v11.85C56.04,21.42,55.66,21.79,55.2,21.79 z">
                                </path>
                                <path
                                    d="M45.66,37.6H5.24c-1.46,0-2.65-1.19-2.65-2.65V9.1c0-1.46,1.19-2.66,2.65-2.66H7.2c0.47,0,0.84,0.38,0.84,0.84v25.35 c0,0.47-0.38,0.84-0.84,0.84s-0.84-0.38-0.84-0.84V8.13H5.24c-0.53,0-0.97,0.44-0.97,0.97v25.85c0,0.53,0.44,0.97,0.97,0.97h40.42 c0.47,0,0.84,0.38,0.84,0.84C46.5,37.23,46.13,37.6,45.66,37.6z">
                                </path>
                                <path
                                    d="M29.31,33.47c-0.47,0-0.84-0.38-0.84-0.84V5.72c0-0.47,0.38-0.84,0.84-0.84c0.47,0,0.84,0.38,0.84,0.84v26.91 C30.15,33.1,29.78,33.47,29.31,33.47z">
                                </path>
                                <path
                                    d="M31.4,37.6h-4.18c-1.13,0-2.05-0.92-2.05-2.05c0-1.15-0.93-2.08-2.08-2.08H7.2c-0.47,0-0.84-0.38-0.84-0.84V4.51 c0-0.47,0.38-0.84,0.84-0.84h12.2c2.67,0,5.35,0.27,7.97,0.8l1.93,0.39l1.93-0.39c2.62-0.53,5.3-0.8,7.97-0.8h12.21 c0.47,0,0.84,0.38,0.84,0.84v14.77c0,0.47-0.38,0.84-0.84,0.84s-0.84-0.38-0.84-0.84V5.35H39.21c-2.56,0-5.13,0.26-7.63,0.77 l-2.1,0.43c-0.11,0.02-0.22,0.02-0.33,0l-2.1-0.43c-2.51-0.51-5.08-0.77-7.64-0.77H8.05v26.44h15.04c2.07,0,3.76,1.69,3.76,3.76 c0,0.2,0.16,0.37,0.37,0.37h4.18c0.2,0,0.37-0.16,0.37-0.37c0-2.07,1.69-3.76,3.76-3.76h5.95c0.47,0,0.84,0.38,0.84,0.84 c0,0.47-0.38,0.84-0.84,0.84h-5.95c-1.15,0-2.08,0.93-2.08,2.08C33.45,36.68,32.53,37.6,31.4,37.6z">
                                </path>
                                <path
                                    d="M23.35,10.56H12.01c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h11.34c0.47,0,0.84,0.38,0.84,0.84 C24.19,10.18,23.82,10.56,23.35,10.56z">
                                </path>
                                <path
                                    d="M23.35,15.25H12.01c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h11.34c0.47,0,0.84,0.38,0.84,0.84 C24.19,14.87,23.82,15.25,23.35,15.25z">
                                </path>
                                <path
                                    d="M23.35,19.93H12.01c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h11.34c0.47,0,0.84,0.38,0.84,0.84 C24.19,19.56,23.82,19.93,23.35,19.93z">
                                </path>
                                <path
                                    d="M23.35,24.62H12.01c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h11.34c0.47,0,0.84,0.38,0.84,0.84 C24.19,24.24,23.82,24.62,23.35,24.62z">
                                </path>
                                <path
                                    d="M46.61,10.56H35.27c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h11.34c0.47,0,0.84,0.38,0.84,0.84 C47.45,10.18,47.08,10.56,46.61,10.56z">
                                </path>
                                <path
                                    d="M46.61,15.25H35.27c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h11.34c0.47,0,0.84,0.38,0.84,0.84 C47.45,14.87,47.08,15.25,46.61,15.25z">
                                </path>
                                <path
                                    d="M49.28,19.93H35.27c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h14.01c0.47,0,0.84,0.38,0.84,0.84 C50.13,19.56,49.75,19.93,49.28,19.93z">
                                </path>
                                <path
                                    d="M41.74,24.62h-6.47c-0.47,0-0.84-0.38-0.84-0.84c0-0.47,0.38-0.84,0.84-0.84h6.47c0.47,0,0.84,0.38,0.84,0.84 C42.58,24.24,42.2,24.62,41.74,24.62z">
                                </path>
                            </svg>
                        </figure>
                        <h5>Over 500+ High Quality Test Series</h5>
                        <p class="mb-0">Go he prisoners And mountains in just switching city steps Might.</p>
                    </div>
                </div>

                <!-- Feature item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-body bg-light p-4 h-100">
                        <!-- Svg image decoration -->
                        <figure>
                            <svg class="fill-success" width="55.44px" height="52.15px" viewbox="0 0 55.44 52.15"
                                style="enable-background:new 0 0 55.44 52.15;">
                                <path
                                    d="M32.97,38.53c-0.78,0-1.57-0.25-2.25-0.75l-1.89-1.38c-0.74-0.54-1.73-0.54-2.47,0l-1.89,1.38c-1.37,0.99-3.13,0.99-4.5,0 c-1.37-0.99-1.91-2.67-1.39-4.28l0.72-2.23c0.28-0.87-0.02-1.81-0.76-2.35l-1.89-1.38c-1.37-0.99-1.91-2.67-1.39-4.28 c0.52-1.61,1.95-2.65,3.64-2.65h2.34c0.91,0,1.72-0.58,2-1.45l0.72-2.23c0.52-1.61,1.95-2.65,3.64-2.65c1.69,0,3.12,1.04,3.64,2.65 l0.72,2.23c0.28,0.87,1.08,1.45,2,1.45h2.34c1.69,0,3.12,1.04,3.64,2.65c0.52,1.61-0.02,3.29-1.39,4.28l-1.89,1.38 c-0.74,0.54-1.05,1.48-0.76,2.35l0.72,2.23c0.52,1.61-0.02,3.29-1.39,4.28C34.53,38.28,33.75,38.53,32.97,38.53z M27.59,34.28 c0.79,0,1.58,0.24,2.25,0.73l1.89,1.38c0.91,0.66,1.87,0.43,2.47,0c0.6-0.43,1.11-1.28,0.76-2.35l-0.72-2.23 c-0.51-1.58,0.04-3.3,1.39-4.28l1.89-1.38c0.91-0.66,0.99-1.65,0.76-2.35c-0.23-0.7-0.87-1.45-2-1.45h-2.34 c-1.66,0-3.13-1.06-3.64-2.65l-0.72-2.23c-0.35-1.07-1.26-1.45-2-1.45c-0.74,0-1.65,0.38-2,1.45l-0.72,2.23 c-0.51,1.58-1.98,2.65-3.64,2.65h-2.34c-1.13,0-1.77,0.75-2,1.45c-0.23,0.7-0.15,1.69,0.76,2.35l1.89,1.38 c1.35,0.98,1.91,2.7,1.39,4.28l-0.72,2.23c-0.35,1.07,0.17,1.92,0.76,2.35c0.6,0.43,1.56,0.66,2.47,0l1.89-1.38 C26.01,34.52,26.8,34.28,27.59,34.28z">
                                </path>
                                <path
                                    d="M27.59,47.9c-11.84,0-21.48-9.64-21.48-21.48S15.74,4.94,27.59,4.94c11.84,0,21.48,9.64,21.48,21.48S39.43,47.9,27.59,47.9 z M27.59,6.66c-10.89,0-19.75,8.86-19.75,19.75c0,10.89,8.86,19.75,19.75,19.75c10.89,0,19.75-8.86,19.75-19.75 C47.34,15.52,38.48,6.66,27.59,6.66z">
                                </path>
                                <path
                                    d="M52.46,27.28c-0.48,0-0.86-0.39-0.86-0.86c0-0.45-0.01-0.89-0.04-1.34c-0.03-0.48,0.34-0.88,0.82-0.91 c0.48-0.02,0.88,0.34,0.91,0.82c0.03,0.47,0.04,0.95,0.04,1.43C53.32,26.89,52.93,27.28,52.46,27.28z">
                                </path>
                                <path
                                    d="M51.6,20.78c-0.38,0-0.73-0.25-0.83-0.64c-0.22-0.8-0.48-1.6-0.78-2.38c-0.17-0.45,0.05-0.95,0.49-1.12 c0.45-0.17,0.95,0.05,1.12,0.49c0.32,0.83,0.6,1.69,0.83,2.55c0.12,0.46-0.15,0.94-0.61,1.06C51.75,20.77,51.67,20.78,51.6,20.78z  M48.44,13.72c-0.28,0-0.56-0.14-0.72-0.39c-0.45-0.69-0.95-1.38-1.47-2.02c-0.3-0.37-0.24-0.92,0.13-1.22 c0.37-0.3,0.92-0.24,1.22,0.13c0.56,0.69,1.09,1.42,1.58,2.17c0.26,0.4,0.15,0.94-0.25,1.2C48.76,13.67,48.6,13.72,48.44,13.72z  M43.25,7.96c-0.19,0-0.38-0.06-0.54-0.19c-0.65-0.52-1.33-1.02-2.02-1.47c-0.4-0.26-0.51-0.8-0.25-1.2c0.26-0.4,0.8-0.51,1.2-0.25 c0.74,0.49,1.47,1.02,2.17,1.58c0.37,0.3,0.43,0.85,0.13,1.22C43.75,7.85,43.5,7.96,43.25,7.96z M36.55,4.08 c-0.1,0-0.21-0.02-0.31-0.06c-0.77-0.3-1.57-0.56-2.37-0.78c-0.46-0.12-0.73-0.6-0.61-1.06c0.12-0.46,0.6-0.73,1.06-0.61 c0.86,0.23,1.71,0.51,2.55,0.83c0.45,0.17,0.67,0.67,0.49,1.12C37.23,3.87,36.9,4.08,36.55,4.08z">
                                </path>
                                <path
                                    d="M28.97,2.45c-0.49-0.03-0.94-0.04-1.38-0.04c-0.48,0-0.86-0.39-0.86-0.86c0-0.48,0.39-0.86,0.86-0.86 c0.48,0,0.96,0.01,1.43,0.04c0.48,0.03,0.84,0.43,0.82,0.91C29.81,2.09,29.43,2.45,28.97,2.45z">
                                </path>
                                <path
                                    d="M27.59,52.15c-14.19,0-25.73-11.54-25.73-25.73c0-14.19,11.54-25.73,25.73-25.73c0.48,0,0.86,0.39,0.86,0.86 c0,0.48-0.39,0.86-0.86,0.86c-13.24,0-24,10.77-24,24c0,13.24,10.77,24,24,24s24-10.77,24-24c0-0.48,0.39-0.86,0.86-0.86 c0.48,0,0.86,0.39,0.86,0.86C53.32,40.61,41.78,52.15,27.59,52.15z">
                                </path>
                            </svg>
                        </figure>
                        <h5>Earn a Certificate of Achievement</h5>
                        <p class="mb-0">Go he prisoners And mountains in just switching city steps Might.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- --------Feature END -->

    <!-- ------Action box START -->
    <section class="py-5">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <!-- SVG decoration START -->
                    <figure class="position-absolute top-50 start-50 translate-middle ms-2">
                        <svg>
                            <path class="fill-white opacity-2"
                                d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z">
                            </path>
                            <path class="fill-white opacity-2"
                                d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z">
                            </path>
                            <path class="fill-white opacity-2"
                                d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z">
                            </path>
                            <path class="fill-white opacity-2"
                                d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z">
                            </path>
                        </svg>
                    </figure>
                    <!-- SVG decoration END -->

                    <div class="bg-dark p-4 p-sm-5 rounded-3">
                        <div class="row justify-content-center position-relative">
                            <!-- Svg decoration START -->
                            <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                                <svg width="141px" height="141px">
                                    <path
                                        d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                                    </path>
                                </svg>
                            </figure>
                            <!-- SVG decoration END -->

                            <!-- Action box -->
                            <div class="col-11 position-relative">
                                <div class="row align-items-center">
                                    <!-- Title -->
                                    <div class="col-lg-7">
                                        <h3 class="text-white mb-0">Create your first online assessment</h3>
                                        <p class="text-white small">Boost up your knowledge, grow your skill with the most
                                            reliable online Test Series</p>
                                        <!-- List -->
                                        <ul class="list-inline mb-0 justify-content-center justify-content-lg-start">
                                            <li class="list-inline-item text-white me-2"> <i
                                                    class="bi bi-check-circle-fill text-success me-2"></i>Free
                                                registration
                                            </li>
                                            <li class="list-inline-item text-white me-2"> <i
                                                    class="bi bi-check-circle-fill text-success me-2"></i>Powerful
                                                features
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Content and input -->
                                    <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                                        <a href="#" class="btn btn-warning mb-0">Sign Up for Free</a>
                                    </div>
                                </div> <!-- Row END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- ---------Action box END -->

    <!-- --------Action box START -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Action box item -->
                <div class="col-lg-6 position-relative overflow-hidden">
                    <div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
                        <!-- Image -->
                        <div class="position-absolute bottom-0 end-0 me-3">
                            <img src="{{ static_asset('assets/images/element/08.svg') }}" class="h-100px h-sm-200px"
                                alt="">
                        </div>
                        <!-- Content -->
                        <div class="row">
                            <div class="col-sm-8 position-relative">
                                <h3 class="mb-1">Join Today Program</h3>
                                <p class="mb-3 h5 fw-light lead">Get the right professional certificate program for you.
                                </p>
                                <a href="#" class="btn btn-primary mb-0">View Programs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action box item -->
                <div class="col-lg-6 position-relative overflow-hidden">
                    <div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
                        <!-- Image -->
                        <div class="position-absolute bottom-0 end-0 me-3">
                            <img src="{{ static_asset('assets/images/element/15.svg') }}" class="h-100px h-sm-200px"
                                alt="">
                        </div>
                        <!-- Content -->
                        <div class="row">
                            <div class="col-sm-8 position-relative">
                                <h3 class="mb-1">Best Rated Quiz</h3>
                                <p class="mb-3 h5 fw-light lead">Enroll now in the most popular and best rated Test
                                    Series.
                                </p>
                                <a href="#" class="btn btn-warning mb-0">View Quiz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----Action box END -->

    <!-- ------Page content START -->
    <section class="py-5 bg-gradient-one">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Search option START -->
                    <div class="row mb-4 align-items-center">

                        <!-- Title -->
                        <div class="col-md-4">
                            <h2 class="mb-0">All <span class="text-danger">Listed</span> Books</h2>
                        </div>

                        <!-- Select option -->
                        <div class="col-md-5 mt-3 mt-xl-0">
                        </div>

                        <!-- Select option -->
                        <div class="col-md-3 mt-3 mt-xl-0">
                            <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                                <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                    <li class="page-item mb-0 active"><a class="page-link" href="#">View all
                                            Products</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <!-- Search option END -->

                    <!-- Book Grid START -->
                    <div class="row g-4">

                        <!-- Card item START -->
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="card p-2 shadow h-100">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/01.jpg') }}" class="card-img-top"
                                            alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-2">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                                        class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light mb-0 ms-2">6k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="h6 fw-light mb-0 ms-2">3.8</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">Google Ads Training: Become a PPC
                                            Expert</a>
                                    </h6>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                    class="fas fa-circle small fw-bold"></i> SEO </a></div>
                                        <!-- Price -->
                                        <h5 class="text-success mb-0">₹ 226</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="card p-2 shadow h-100">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/02.jpg') }}" class="card-img-top"
                                            alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-2">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                                        class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light mb-0 ms-2">9.1k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="h6 fw-light mb-0 ms-2">4.5</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">Angular 4 Tutorial in audio (Compact
                                            Disk)</a></h6>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                    class="fas fa-circle small fw-bold"></i> Personal Development </a>
                                        </div>
                                        <!-- Price -->
                                        <h5 class="text-success mb-0">₹ 140</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="card p-2 shadow h-100">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/03.jpg') }}" class="card-img-top"
                                            alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-2">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                                        class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light mb-0 ms-2">2.5k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="h6 fw-light mb-0 ms-2">3.6</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">Javascript: The Definitive Guide (PDF
                                            Book)</a></h6>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                    class="fas fa-circle small fw-bold"></i> Business Development </a>
                                        </div>
                                        <!-- Price -->
                                        <h5 class="text-success mb-0">₹ 160</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                        <!-- Card item START -->
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="card p-2 shadow h-100">
                                <div class="rounded-top overflow-hidden">
                                    <div class="card-overlay-hover">
                                        <!-- Image -->
                                        <img src="{{ static_asset('assets/images/book/04.jpg') }}" class="card-img-top"
                                            alt="course image">
                                    </div>
                                    <!-- Hover element -->
                                    <div class="card-img-overlay">
                                        <div class="card-element-hover d-flex justify-content-end">
                                            <a href="#" class="icon-md bg-white rounded-circle">
                                                <i class="fas fa-shopping-cart text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body -->
                                <div class="card-body px-2">
                                    <!-- Badge and icon -->
                                    <div class="d-flex justify-content-between">
                                        <!-- Rating and info -->
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <!-- Info -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i
                                                        class="fas fa-user-graduate"></i></div>
                                                <span class="h6 fw-light mb-0 ms-2">15k</span>
                                            </li>
                                            <!-- Rating -->
                                            <li class="list-inline-item d-flex justify-content-center align-items-center">
                                                <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span class="h6 fw-light mb-0 ms-2">4.8</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <!-- Divider -->
                                    <hr>
                                    <!-- Title -->
                                    <h6 class="card-title"><a href="#">The Principles of Beautiful Graphics
                                            Design (Paperback)</a></h6>
                                    <!-- Badge and Price -->
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i
                                                    class="fas fa-circle small fw-bold"></i> Lifestyle </a></div>
                                        <!-- Price -->
                                        <h5 class="text-success mb-0">₹ 342</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                    <!-- Book Grid END -->
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary-soft">View more<i class="fas fa-sync ms-2"></i></a>
                    </div>
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- --------Page content END -->

    <!-- --------Video divider START -->
    <section class="bg-light position-relative">
        <!-- SVG decoration -->
        <figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
            <svg width="822.2px" height="301.9px" viewbox="0 0 822.2 301.9">
                <path class="fill-warning"
                    d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                </path>
            </svg>
        </figure>

        <!-- SVG decoration -->
        <figure class="position-absolute top-0 end-0">
            <svg width="822.2px" height="301.9px" viewbox="0 0 822.2 301.9">
                <path class="fill-primary"
                    d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z">
                </path>
            </svg>
        </figure>

        <!-- SVG decoration -->
        <figure class="position-absolute bottom-0 start-50 translate-middle-x ms-n9 mb-5">
            <svg width="23px" height="23px">
                <path class="fill-primary"
                    d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z">
                </path>
            </svg>
        </figure>

        <!-- SVG decoration -->
        <figure class="position-absolute bottom-0 end-0 me-5 mb-5">
            <svg width="22px" height="22px">
                <path class="fill-warning"
                    d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z">
                </path>
            </svg>
        </figure>

        <div class="container position-relative">
            <div class="row justify-content-between align-items-center my-5">

                <div class="col-lg-5 position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-0 start-0 translate-middle mt-n5">
                        <svg width="29px" height="29px">
                            <path class="fill-orange"
                                d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z">
                            </path>
                        </svg>
                    </figure>

                    <!-- Title -->
                    <h2 class="h1">Study whenever you want, from any place in the world.</h2>
                </div>

                <div class="col-lg-5 position-relative mt-4 mt-lg-0">
                    <!-- Image -->
                    <img src="{{ static_asset('assets/images/about/04.jpg') }}"
                        class="border border-5 border-white rounded-2" alt="">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Video link -->
                        <a href="https://www.youtube.com/embed/tXHviS-4ygo"
                            class="btn text-danger btn-round btn-white-shadow btn-lg mb-0" data-glightbox=""
                            data-gallery="video-tour">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------Video divider END -->

    <!-- --------Contact form START -->
    <section id="contact-form" class="position-relative overflow-hidden pt-0 pt-md-5 pt-lg-5 pb-lg-5">
        <div class="container pt-0 pt-lg-4 pb-lg-4">
            <div class="row g-4 g-sm-5 align-items-center">
                <div class="col-lg-6">
                    <h2>Access the right service for your kid today!!</h2>
                    <p>Claim your free 10-minute phone call to see if we are right for your kid.</p>

                    <div class="row mt-5">
                        <!-- Email box -->
                        <div class="col-sm-6 col-lg-12 col-xl-6 mb-5">
                            <div class="card card-body shadow">
                                <div
                                    class="icon-lg bg-warning text-white rounded-circle position-absolute top-0 start-100 translate-middle ms-n6">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h6>Email</h6>
                                <p class="h6 mb-0"><a href="#"
                                        class="text-primary-hover fw-light stretched-link">example@gmail.com</a></p>
                            </div>
                        </div>

                        <!-- Live support box -->
                        <div class="col-sm-6 col-lg-12 col-xl-6 mb-5">
                            <div class="card card-body shadow">
                                <div
                                    class="icon-lg bg-success text-white rounded-circle position-absolute top-0 start-100 translate-middle ms-n6">
                                    <i class="bi bi-whatsapp"></i>
                                </div>
                                <h6>WhatsApp number</h6>
                                <p class="h6 mb-0"><a href="#"
                                        class="text-primary-hover fw-light stretched-link">+256 359 556</a></p>
                            </div>
                        </div>

                        <!-- Telephone box -->
                        <div class="col-sm-6 col-lg-12 col-xl-6 mb-5 mb-xl-0">
                            <div class="card card-body shadow">
                                <div
                                    class="icon-lg bg-purple text-white rounded-circle position-absolute top-0 start-100 translate-middle ms-n6">
                                    <i class="fas fa-tty"></i>
                                </div>
                                <h6>Telephone</h6>
                                <p class="h6 mb-0"><a href="#"
                                        class="text-primary-hover fw-light stretched-link">+123 456 789</a></p>
                            </div>
                        </div>

                        <!-- Website box -->
                        <div class="col-sm-6 col-lg-12 col-xl-6 mb-5 mb-xl-0">
                            <div class="card card-body shadow">
                                <div
                                    class="icon-lg bg-orange text-white rounded-circle position-absolute top-0 start-100 translate-middle ms-n6">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h6>Website</h6>
                                <p class="h6 mb-0"><a href="#"
                                        class="text-primary-hover fw-light stretched-link">http://example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact form START -->
                <div class="col-lg-6">
                    <div class="card card-body shadow p-4 p-sm-5 position-relative">

                        <!-- Form START -->
                        <form class="row g-3 position-relative">
                            <!-- Name -->
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <label class="form-label">First name *</label>
                                <input type="text" class="form-control" aria-label="First name">
                            </div>

                            <!-- Last name -->
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <label class="form-label">Last name *</label>
                                <input type="text" class="form-control" aria-label="Last name">
                            </div>
                            <!-- Email -->
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control">
                            </div>
                            <!-- Phone number -->
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <label class="form-label">Phone number *</label>
                                <input type="text" class="form-control">
                            </div>
                            <!-- Select subject -->
                            <div class="col-12">
                                <label class="form-label">Select subject</label>
                                <select class="form-select js-choice z-index-9" aria-label=".form-select-sm">
                                    <option value="">Select subject</option>
                                    <option>Physics</option>
                                    <option>Chemistry</option>
                                    <option>History</option>
                                    <option>Language</option>
                                    <option>Marketing</option>
                                </select>
                            </div>
                            <!-- Comment -->
                            <div class="col-12">
                                <label class="form-label">Message *</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <!-- Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mb-0">Send message</button>
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>
    <!-- ----------Contact form END -->

    <!-- ---------Counter START -->
    {{-- <section class="py-0 py-xl-5">
        <div class="container">
            <div class="row g-4">
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
                        <span class="display-6 lh-1 text-warning mb-0"><i class="fas fa-tv"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="10" data-purecounter-delay="200"
                                    data-purecounter-duration="0">10</h5>
                                <span class="mb-0 h5">K</span>
                            </div>
                            <p class="mb-0">Online Courses</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-blue mb-0"><i class="fas fa-user-tie"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="200" data-purecounter-delay="200"
                                    data-purecounter-duration="0">200</h5>
                                <span class="mb-0 h5">+</span>
                            </div>
                            <p class="mb-0">Expert Tutors</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-user-graduate"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="60" data-purecounter-delay="200"
                                    data-purecounter-duration="0">60</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">Online Students</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class="col-sm-6 col-xl-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
                        <span class="display-6 lh-1 text-info mb-0"><i class="bi bi-patch-check-fill"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0"
                                    data-purecounter-end="6" data-purecounter-delay="300"
                                    data-purecounter-duration="0">6</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">Certified Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- -------Counter END -->

    <!-- ------Client feedback START -->
    <section class="bg-gradient-one position-relative pb-5">

        <div class="container">
            <!-- Title -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-0 fs-1">Our <span class="text-warning">Customer</span> Feedback</h2>
                    <p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
                </div>
            </div>

            <!-- Feedback START -->
            <div class="row">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-creative arrow-dark arrow-hover">
                    <div class="tiny-slider-inner" data-autoplay="true" data-edge="5" data-arrow="true"
                        data-dots="false" data-items="4" data-items-xl="3" data-items-md="2" data-items-xs="1">

                        <!-- Feedback item -->
                        <div>
                            <div class="bg-body text-center p-4 rounded-3  position-relative">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mb-3">
                                    <img class="avatar-img rounded-circle"
                                        src="{{ static_asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-2">Lori Stevens</h6>
                                <!-- Content -->
                                <blockquote class="mt-1">
                                    <p>
                                        <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                        Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him
                                        to widen. At weddings believed laughing
                                        <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Feedback item -->
                        <div>
                            <div class="bg-body text-center p-4 rounded-3  position-relative">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mb-3">
                                    <img class="avatar-img rounded-circle"
                                        src="{{ static_asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-2">Billy Vasquez</h6>
                                <!-- Content -->
                                <blockquote class="mt-1">
                                    <p>
                                        <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                        Its enjoyment Moonlight newspaper up agreeable depending. Timed voice share led him
                                        to widen. At weddings believed laughing
                                        <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Feedback item -->
                        <div>
                            <div class="bg-body text-center p-4 rounded-3  position-relative">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mb-3">
                                    <img class="avatar-img rounded-circle"
                                        src="{{ static_asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-2">Carolyn Ortiz</h6>
                                <!-- Content -->
                                <blockquote class="mt-1">
                                    <p>
                                        <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                        Newspaper up its enjoyment agreeable depending. Timed voice share led him to widen.
                                        At weddings believed laughing
                                        <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Feedback item -->
                        <div>
                            <div class="bg-body text-center p-4 rounded-3  position-relative">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mb-3">
                                    <img class="avatar-img rounded-circle"
                                        src="{{ static_asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                </div>
                                <!-- Title -->
                                <h6 class="mb-2">Carolyn Ortiz</h6>
                                <!-- Content -->
                                <blockquote class="mt-1">
                                    <p>
                                        <span class="me-1 small"><i class="fas fa-quote-left"></i></span>
                                        Newspaper up its enjoyment agreeable depending. Timed voice share led him to widen.
                                        At weddings believed laughing
                                        <span class="ms-1 small"><i class="fas fa-quote-right"></i></span>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider START -->
            </div>
            <!-- Feedback END -->
        </div>
    </section>
    <!-- ------Client feedback END -->
@endsection
