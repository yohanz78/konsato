@extends('_layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <h2 class="primary-header">
                    Checkout Ticket
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{asset('images/item_event.png')}}" alt="" class="cover">
                            <h1 class="package">
                                YOASOBI CONCERT
                            </h1>
                            <p class="description">
                                Artist: Ayase x Lilas Ikuta <br>
                                Tanggal: dd/mm/yyyy <br>
                                Lokasi: <br>
                                Kategori tempat duduk:
                                <ul>
                                    <li>Normal</li>
                                    <li>VIP</li>
                                    <li>VVIP</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="#" class="basic-form">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Card Number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">Expired</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label for="exampleInputEmail1" class="form-label">CVC</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection