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
                            <img src="{{$event->image}}" alt="events-banner" class="cover">
                            <h1 class="package mb-3">
                                {{$event->title}}
                            </h1>
                            <p class="description">
                                @foreach ($event->EventsDetail as $item)
                                Artist: {{$item->artist}} <br>
                                Tanggal: {{$item->tanggal}} <br>
                                Lokasi: {{$item->lokasi}} <br>
                                @endforeach
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
                        @if ($errors->any())
                            <div class="alert alert-warning" role="alert">
                                <strong>Oops!</strong> {{$errors->first()}}
                            </div>
                        @endif
                        <form action="{{route('checkout.store', $event->id)}}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{@Auth::user()->email}}" aria-describedby="emailCheckout" required>
                                @if ($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{@Auth::user()->name}}" aria-describedby="fullnameCheckout" required>
                                @if ($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                <input name="category" type="text" class="form-control {{$errors->has('category') ? 'is-invalid' : ''}}" aria-describedby="categoryCheckout" required>
                                @if ($errors->has('category'))
                                        <p class="text-danger">{{$errors->first('category')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <input name="phone" type="text" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{old('phone') ?: @Auth::user()->phone}}" aria-describedby="phoneCheckout" required>
                                @if ($errors->has('phone'))
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input name="address" type="text" class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" value="{{old('address') ?: @Auth::user()->address}}" aria-describedby="addressCheckout" required>
                                @if ($errors->has('address'))
                                        <p class="text-danger">{{$errors->first('address')}}</p>
                                @endif
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{asset('images/ic_secure.svg')}}" alt=""> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection