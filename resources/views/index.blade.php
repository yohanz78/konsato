@extends('_layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div id="bannerCarousel" class="col-lg-12 carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mycarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mycarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mycarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/banner-1.png')}}" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/banner-2.png')}}" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/banner-3.png')}}" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mycarouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mycarouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
        </div>
        <div class="row brands">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{asset('images/brands.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap copywriting">
                <p class="story">
                    GOOD INVESTMENT
                </p>
                <h2 class="primary-header">
                    Start Your Journey
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="product-card">
                                <img src="{{asset('images/product-1.png')}}" alt="Ticket 1">
                                <h1 class="title">Dreamers Concert</h1>
                                <p class="desc">
                                    Artist: Jung Kook <br>
                                    Tanggal: dd/mm/yyyy
                                </p>
                                <p class="price">$100</p>
                                <p><a href="#" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="product-card">
                                <img src="{{asset('images/product-1.png')}}" alt="Ticket 1">
                                <h1 class="title">Dreamers Concert</h1>
                                <p class="desc">
                                    Artist: Jung Kook <br>
                                    Tanggal: dd/mm/yyyy
                                </p>
                                <p class="price">$100</p>
                                <p><a href="#" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="product-card">
                                <img src="{{asset('images/product-1.png')}}" alt="Ticket 1">
                                <h1 class="title">Dreamers Concert</h1>
                                <p class="desc">
                                    Artist: Jung Kook <br>
                                    Tanggal: dd/mm/yyyy
                                </p>
                                <p class="price">$100</p>
                                <p><a href="#" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-4 col-12">
                            <div class="product-card">
                                <img src="{{asset('images/product-1.png')}}" alt="Ticket 1">
                                <h1 class="title">Dreamers Concert</h1>
                                <p class="desc">
                                    Artist: Jung Kook <br>
                                    Tanggal: dd/mm/yyyy
                                </p>
                                <p class="price">$100</p>
                                <p><a href="#" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="product-card">
                                <img src="{{asset('images/product-1.png')}}" alt="Ticket 1">
                                <h1 class="title">Dreamers Concert</h1>
                                <p class="desc">
                                    Artist: Jung Kook <br>
                                    Tanggal: dd/mm/yyyy
                                </p>
                                <p class="price">$100</p>
                                <p><a href="#" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="product-card">
                                <img src="{{asset('images/product-1.png')}}" alt="Ticket 1">
                                <h1 class="title">Dreamers Concert</h1>
                                <p class="desc">
                                    Artist: Jung Kook <br>
                                    Tanggal: dd/mm/yyyy
                                </p>
                                <p class="price">$100</p>
                                <p><a href="#" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    SUCCESS STUDENTS
                </p>
                <h2 class="primary-header">
                    We Really Love Laracamp
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                I was not really into code but after they teach me how to train my logic then I was really fall in love with code
                            </p>
                            <div class="user">
                                <img src="{{asset('images/fanny_photo.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Fanny
                                    </h4>
                                    <p class="role">
                                        Developer at Google
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                Code is really important if we want to build a company and strike to the win
                            </p>
                            <div class="user">
                                <img src="{{asset('images/angga.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Angga
                                    </h4>
                                    <p class="role">
                                        CEO at BWA Corp
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                My background is design and art but I do really love how to make my design working in the development phase
                            </p>
                            <div class="user">
                                <img src="{{asset('images/beatrice.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Beatrice
                                    </h4>
                                    <p class="role">
                                        QA at Facebook
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright Laracamp BWA Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection