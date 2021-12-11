@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <title>My Cart</title>
@endsection

@section('content')
    <div class="content">
        <div class="wrapper">
            <div class="content-title">
                <h2>My Cart</h2>
            </div>

            @foreach ($transactions as $transaction)
                @php
                    $ttlPrice = 0;
                @endphp
                <div class="history-trans">
                    <div class="history-trans-head flex space-between">
                        <div class="history-trans-date">
                            <p>{{ $transaction->transaction_date }}</p>
                        </div>

                    </div>

                    @foreach ($transaction->products as $item)
                        <div class="history-trans-item flex">
                            <div class="history-trans-item-img"
                                style="margin-top: 1rem; margin-left:3rem; margin-right:3rem">
                                <img src="/storage/products/{{ $item->image }}" alt="">
                            </div>

                            <div class="history-trans-item-contents">
                                <div class="history-trans-item-content flex">
                                    <h2>{{ $item->name }}</h2>
                                    <p>(IDR. {{ $item->price }})</p>
                                </div>

                                <div class="history-trans-item-content">
                                    <p>x{{ $item->pivot->quantity }} pcs</p>
                                </div>

                                <div class="history-trans-item-content float-right">
                                    IDR. {{ $item->price * $item->pivot->quantity }}

                                    @php
                                        $ttlPrice += $item->price * $item->pivot->quantity;
                                    @endphp
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="history-trans-foot float-right">
                        <h3>Total Price: IDR. {{ $ttlPrice }}</h3>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
