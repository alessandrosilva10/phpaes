@extends('welcome')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-12" style="padding-left:35%">
            <h1 style="text-align: center; margin-left:-55%">Entre</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Dados Pessoais</h3>
                <label for="email" class="col-form-label text-md-right">E-mail</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                <label for="password" class="col-form-label text-md-right">Senha</label>
                <input id="password" type="password" size="40%" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <div class="form-check">
                    <input class="form-check-input" style="margin-left: -10px" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember" style="margin-left: 5px">
                        Salvar
                    </label>
                </div>
                <br>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-sign-in-alt" style="margin-right: 3px"></i> Entrar
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: black">
                    Esqueci minha senha
                </a>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection