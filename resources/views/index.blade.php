@extends('_layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div id="bannerCarousel" class="col-lg-12 carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
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
                        @foreach ($product as $events)
                        <div class="col-lg-4 col-12 mt-4">
                            <div class="product-card">
                                <span><img src="{{$events->image}}" alt="event-banner"></span>
                                <h1 class="title">{{$events->title}}</h1>
                                <p class="desc">
                                    @foreach ($events->EventsDetail as $item)
                                    Artist: {{$item->artist}} <br>
                                    Tanggal: {{$item->tanggal}}
                                    @endforeach
                                </p>
                                <p class="price">${{$events->price}}</p>
                                <p><a href="{{route('checkout.create', $events->slug)}}" class="btn btn-master btn-primary w-100 mt-3">BUY NOW</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    BENEFITS USING OUR SERVICES
                </p>
                <h2 class="primary-header">
                    Easily Order Online Concert
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe.png')}}" class="icon" alt="">
                    <h3 class="title">
                        Worldwide
                    </h3>
                    <p class="support">
                        Konsato menyediakan tiket konser <br> online di seluruh dunia
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe-1.png')}}" class="icon" alt="">
                    <h3 class="title">
                        Simple Payment
                    </h3>
                    <p class="support">
                        Konsato memiliki banyak sistem <br> pembayaran yang dapat <br> digunakan saat membeli tiket
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe-2.png')}}" class="icon" alt="">
                    <h3 class="title">
                        Popular Artist
                    </h3>
                    <p class="support">
                        Konsato bekerja sama <br> dengan artis-artis terkenal
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{asset('images/ic_globe-3.png')}}" class="icon" alt="">
                    <h3 class="title">
                        Free Merchandise
                    </h3>
                    <p class="support">
                        Setiap pembelian tiket dengan <br> kategori tertentu akan mendapatkan free merchandise
                    </p>
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
                    SUCCESS CONCERT
                </p>
                <h2 class="primary-header">
                    We Really Love Konsāto
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
                                The Concert opening ceremony was absolutely spectacular!
                            </p>
                            <div class="user">
                                <img src="{{asset('images/fanny_photo.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Tyson
                                    </h4>
                                    <p class="role">
                                        Gamer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                It was a wonderful concert Awesome performance! Thanks to all your team for the atmosphere!
                            </p>
                            <div class="user">
                                <img src="{{asset('images/angga.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Kenneth Adam
                                    </h4>
                                    <p class="role">
                                        Event Organizer
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{asset('images/stars.svg')}}" alt="">
                            <p class="message">
                                I can't believe Yoasobi wants to come to a concert in Indonesia, I'm really speechless! very touched!   
                            </p>
                            <div class="user">
                                <img src="{{asset('images/beatrice.png')}}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Regi Prabowo
                                    </h4>
                                    <p class="role">
                                        Youtuber
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright Konsato Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection