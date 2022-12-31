@extends('_layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    Riwayat Tiket
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_event.png')}}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{$checkout->event->title}}</strong>
                            </p>
                            <p>
                                {{$checkout->created_at->format('M d, Y')}}
                            </p>
                        </td>
                        <td>
                            <strong>$ {{$checkout->event->price}}</strong>
                        </td>
                        <td>
                            <strong>Waiting for Payment</strong>
                        </td>
                        <td>
                            <a href="https://wa.me/085780276907?text=Hai, Saya ingin bertanya tentang event {{$checkout->event->title}}" class="btn btn-primary">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr class="align-middle">
                        <td colspan="5">
                            <h3><strong>You haven't book any event</strong></h3>
                            <h4>Book an <a href="{{route('index')}}" style="color: #FBBF02">event</a> now!</h4>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection