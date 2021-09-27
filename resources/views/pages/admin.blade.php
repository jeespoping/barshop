@extends('layout')

@section('content')

    <div class="container">
        <div class="grid-container">
            <p><button class="button" data-open="Modal1">Crear producto</button></p>
        </div>
    </div>

    <div class="reveal" id="Modal1" data-reveal>
        <div class="container">
            <form method="POST" action="{{route('products.store')}}">
                @csrf
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-6 cell">
                            <label>Nombre del producto
                                <input required min="3" type="text" name="name" placeholder="Producto">
                            </label>
                        </div>
                        <div class="medium-6 cell">
                            <label>Precio del producto
                                <input required type="number" name="price" placeholder="Precio">
                            </label>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x mx-auto">
                        <div class="cell">
                            <label>
                                Descripción del producto
                                <textarea required rows="10" placeholder="Descripción"></textarea>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="success button">Guardar</button>
                </div>

            </form>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


@endsection
