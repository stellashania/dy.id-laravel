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

            @php
                $ttlPrice = 0;
                $idx = 0;
            @endphp

            @foreach ($cart as $item)
                {{-- {{ dd($item->id) }} --}}
                @foreach ($item->products as $i)
                    @php
                        $idx++;
                    @endphp

                    <div class="cart-item flex">
                        <div class="cart-item-img" style="margin-left: 5%">
                            <img src="/storage/products/{{ $i->image }}" alt="" style="width: 75%; height: auto">
                        </div>

                        <div class="cart-item-contents">
                            <div class="cart-item-content flex">
                                <h1>{{ $i->name }}</h1>
                                <p style="margin-left: 1rem">(IDR. {{ $i->price }})</p>
                            </div>

                            <div class="cart-item-content">
                                {{-- <p>x{{ $i->findOrFail($item->id)->pivot->quantity }} pcs</p> --}}
                                <p>x{{ $i->pivot->quantity }} pcs</p>
                            </div>

                            <div class="cart-item-content">
                                {{-- <p>IDR. {{ $i->price * $i->findOrFail($item->id)->pivot->quantity }}</p> --}}
                                <p>IDR. {{ $i->price * $i->pivot->quantity }}</p>
                                @php
                                    $ttlPrice += $i->price * $i->pivot->quantity;
                                @endphp
                            </div>

                            {{-- <div class="cart-item-buttons flex">
                                <button class="yellow-btn">Edit</button>
                                <button class="red-btn">Delete</button>
                            </div> --}}

                            <div class="flex">
                                <a href="/update-cart-item/{{ $i->pivot->cart_id }}/{{ $i->pivot->product_id }}"
                                    class="yellow-btn" style="margin-right: 0.5rem; padding-bottom: 0rem">
                                    Update
                                </a>

                                <form action="/delete-cart-item/{{ $i->pivot->cart_id }}/{{ $i->pivot->product_id }}"
                                    method="POST">
                                    @csrf
                                    <input type="submit" value="Delete" class="red-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach

            <div class="div" style="display: flex; justify-content: space-between">
                <div>
                    <h3 style="margin-bottom: .5rem">Total Price:</h3>
                    <p>IDR. {{ $ttlPrice }}</p>
                </div>

                <div>
                    <form action="#" method="POST">
                        @csrf
                        <input type="submit" value="Checkout ({{ $idx }})" class="yellow-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
