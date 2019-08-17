@extends('welcome')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 style="text-align: center">Cadastre-se</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Preencha Todos os Dados</h3>
                <label for="name" class="col-form-label text-md-right">Nome</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <label for="cpf" class="col-form-label text-md-right">CPF</label>
                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">
                @if ($errors->has('cpf'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                @endif
                <label for="email" class="col-form-label text-md-right">E-mail</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <label for="password" class="col-form-label text-md-right">Senha</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label for="password-confirm" class="col-form-label text-md-right">Confirmar Senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                
                <!--<label for="endereco" class="col-form-label text-md-right">Endereço</label>
                <input id="endereco" type="text" class="form-control" name="endereco" required>
                
                <label for="complemento" class="col-form-label text-md-right">Complemento</label>
                <input id="complemento" type="text" class="form-control" name="complemento">

                <label for="cep" class="col-form-label text-md-right">CEP</label>
                <input id="cep" type="text" class="form-control" name="cep">

                <label for="telefone" class="col-form-label text-md-right">Telefone</label>
                <input id="telefone" type="text" class="form-control" name="telefone">

                <label for="celular" class="col-form-label text-md-right">Celular</label>
                <input id="celular" type="text" class="form-control" name="celular">-->

                <br>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-user" style="margin-right: 3px"></i> Cadastrar
                </button>       
            </form>
        </div>
    </div>
</div>
@endsection
