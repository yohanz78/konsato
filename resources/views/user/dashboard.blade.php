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
            <table class="table">
                <tbody>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_event.png')}}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>Yoasobi Concert</strong>
                            </p>
                            <p>
                                September 24, 2021
                            </p>
                        </td>
                        <td>
                            <strong>$100</strong>
                        </td>
                        <td>
                            <strong>Waiting for Payment</strong>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Get Invoice
                            </a>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_event.png')}}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>Yoasobi Concert</strong>
                            </p>
                            <p>
                                September 24, 2021
                            </p>
                        </td>
                        <td>
                            <strong>$100</strong>
                        </td>
                        <td>
                            <strong><span class="text-green">Payment Success</span></strong>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Get Invoice
                            </a>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_event.png')}}" height="120" alt=" ">
                        </td>
                        <td>
                            <p class=" mb-2 ">
                                <strong>Yoasobi Concert</strong>
                            </p>
                            <p>
                                September 24, 2021
                            </p>
                        </td>
                        <td>
                            <strong>$100</strong>
                        </td>
                        <td>
                            <strong><span class="text-red ">Canceled</span></strong>
                        </td>
                        <td>
                            <a href="# " class="btn btn-primary ">
                                Get Invoice
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection