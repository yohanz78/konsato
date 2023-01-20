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
                        <td width="19%">
                            <img src="{{$checkout->event->image}}" height="120" alt="event-banner" style="border-radius: 10%; display: flex; justify-content: center;">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{$checkout->event->title}}</strong>
                            </p>
                            <p>
                                {{$checkout->category}}
                            </p>
                        </td>
                        <td>
                            <strong>$ {{$checkout->event->price}}</strong>
                        </td>
                        <td>
                            <strong class="{{$checkout->payment_status=='paid'?'text-success':'text-secondary'}}">
                                {{$checkout->payment_status}}
                            </strong>
                        </td>
                        <td>
                            @if ($checkout->payment_status == 'waiting')
                                <a href="{{$checkout->midtrans_url}}" target="_blank" class="btn btn-primary">Pay here</a>
                            @endif
                        </td>
                        <td>
                            <a href="https://wa.me/085123456789?text=Hai, Saya ingin bertanya tentang event {{$checkout->event->title}}" class="btn btn-primary">
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