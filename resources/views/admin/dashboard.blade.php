@extends('_layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Event</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                    <th>Booking Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            </tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{$checkout->User->name}}</td>
                                        <td>{{$checkout->Event->title}}</td>
                                        <td>${{$checkout->Event->price}}</td>
                                        <td>{{$checkout->created_at->format('M d Y')}}</td>
                                        <td><span class="badge bg-info text-black">{{$checkout->payment_status}}</span></td>
                                        <td>{{$checkout->booking_code}}</td>
                                        <td>
                                            @if ($checkout->payment_status == 'waiting')
                                            <form action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                                @csrf
                                                <button class="btn btn-secondary btn-sm" disabled>Send Invoice</button>
                                            </form>
                                            @else
                                                @if (!$checkout->qrcode == 'qrcode')
                                                <form action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                                    @csrf
                                                    <button class="btn btn-primary btn-sm">Send Invoice</button>
                                                </form>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No events registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection