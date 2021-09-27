@extends('layout')

@section('content')
    <div class="large-6 large-centered columns">
        <div class="login-box">

            <div class="row">
                <div class="large-12 columns">
                    <h3>Iniciar sesión</h3>
                    <form method="POST" action="{{route('login')}}">
                        @csrf

                        <div class="row">
                            <div class="large-12 columns">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>Email o contraseña invalidas</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <input type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>Email o contraseña invalidas</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 large-centered columns">
                                <input type="submit" class="button expand" value="Entrar"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
