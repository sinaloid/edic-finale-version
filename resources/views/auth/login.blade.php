@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Connexion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Addresse Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-01">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn sin-bg-3">
                                    {{ __('Connexion') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oubli?? ?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        </div>
                            <div class="col-md-6 offset-md-4">
                                <div class="login-or">
                                    <hr class="hr-or">
                                    <span class="span-or">ou</span>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <p class="text-center">
                                    <a href="javascript:void();" class="google btn mybtn mt-1"><i class="fa fa-google-plus">
                                        </i> Se connecter avec Google
                                    </a>
                                    <a href="javascript:void();" class="google btn mybtn mt-1"><i class="fa fa-facebook-f">
                                        </i> Se connecter avec Facebook
                                    </a>
                                    <a href="javascript:void();" class="google btn mybtn mt-1"><i class="fa fa-twitter">
                                        </i> Se connecter avec Twitter
                                    </a>
                                    <hr>
                                </p>
                            </div>
                            <div class="form-group">
                                <p class="text-center col-md-6 offset-md-4">Je n'ai pas de compte <a href="{{ route('register') }}"
                                        id="signup">Inscrivez-vous ici</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection