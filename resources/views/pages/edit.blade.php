@extends('layout')

@section('content')

    <div class="container">
        <div class="container">
            <form method="POST" action="{{route('products.update', $product) }}">
                @csrf
                @method('PUT')

                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-6 cell">
                            <label>Nombre del producto
                                <input value="{{$product->name}}" required min="3" type="text" name="name" >
                            </label>
                        </div>
                        <div class="medium-6 cell">
                            <label>Precio del producto
                                <input value="{{$product->price}}" required type="number" name="price" placeholder="Precio">
                            </label>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x mx-auto">
                        <div class="cell">
                            <label>
                                Descripción del producto
                                <textarea name="description" required rows="10" placeholder="Descripción">{{$product->description}}</textarea>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="success button">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
