@extends('layout')

@section('content')
    <div class="container">
        <div class="grid-container">
            <div class="grid-x grid-margin-x small-up-2 medium-up-3">
                @foreach($products as $product)
                    <div class="cell">
                        <div class="card">
                            <img src="https://static.vecteezy.com/system/resources/previews/001/201/132/non_2x/beer-png.png">
                            <div class="card-section">
                                <h4>{{$product->name}}</h4>
                                <div style="display: flex; justify-content: space-between">
                                    <p>{{$product->description}}</p>
                                    <span style="min-width: 60px"><strong>$ {{$product->price}}</strong></span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
