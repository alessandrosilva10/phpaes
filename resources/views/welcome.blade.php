<!DOCTYPE html>
<html>

<head>
    <title>PHPães</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
    <thead>
        <?php
        use App\Categorias;
        $categorias = Categorias::all();
        ?>
        <div class="container-fluid">
            <div class="row text-right" style="background: rgb(162, 0, 37);">
                <div class="col-12" style="color: white">
                    @if (Auth::check())
                    <span>Olá, {{ Auth::user()->name }} |</span>
                    <a href="{{ url('/logout') }}">Sair |</a>
                    <a href="/minha-conta/{{ Auth::user()->id }}"><span>MINHA CONTA |</span></a>
                    @else
                    <a href="/login"><span>LOGIN |</span></a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">CADASTRE-SE |</a>
                    @endif
                    @endif
                    <a href="/carrinho"><span style="margin-right: 20px">CARRINHO</span></a>
                </div>
            </div>

            <div class="row">
                <div class="col-4 text-center" style="border-bottom-width: 4px; border-bottom-style: solid; border-bottom-color: rgb(162, 0, 37)">
                    <span style="color: rgb(162, 0, 37); font-size: 40px">PHPães</span>
                </div>
                <div class="col-8 text-right" style="margin-top: 25px; border-bottom-width: 4px; border-bottom-style: solid; border-bottom-color: rgb(162, 0, 37)">
                    <a href="/"><span class="option-menu" style="margin-right: 10px; color: rgb(87, 87, 87); font-size: 20px">INÍCIO |</span></a>
                    <div class="dropdown">
                        <a href="#" class="dropbtn"><span class="option-menu" style="color: rgb(87, 87, 87); font-size: 20px">PRODUTOS |</span></a>
                        <div class="dropdown-content" style="margin-top: 7px; background-color: lightred; border-color: rgb(162, 0, 37); border-style:solid; border-width:2px;border-radius:5%">
                            @foreach($categorias as $categoria)
                            <p class="btn-drop" style="text-align: left; padding-left: 7px; font-weight: bold; cursor: pointer" onclick="window.location.href='/produto/{{$categoria->idCategoria}}'">{{ $categoria->descricao}}</p>
                            @endforeach
                        </div>
                    </div>
                    <a href="/receitas" ><span class="option-menu" style="margin-right: 10px; color: rgb(87, 87, 87); font-size: 20px">RECEITAS |</span></a>
                    <a href="/quem-somos"><span class="option-menu" style="margin-right: 10px; color: rgb(87, 87, 87); font-size: 20px">QUEM SOMOS |</span></a>
                    <a href="/contato"><span class="option-menu" style="margin-right: 20px; color: rgb(87, 87, 87); font-size: 20px">CONTATO |</span></a>
                    @if(Auth::check() && Auth::user()->id == 1)
                    <a href="/admin/painel"><span class="option-menu" style="margin-right: 10px; color: rgb(87, 87, 87); font-size: 20px">ADMINISTRADOR</span></a>
                    @endif
                </div>
            </div>
        </div>
    </thead>
    <tbody>
        <br>
        @yield('conteudo')
        <br>
    </tbody>
</body>
<footer>
    <div class="container-fluid">
        <div class="row text-center" style="background: rgb(162, 0, 37)">
            <div class="col-4 footer-pagina" style="color: white; margin-top: 40px; margin-bottom: 40px">
                <p style="font-weight: bold">ONDE ESTAMOS</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.4253400330063!2d-50.43318628540605!3d-22.675204835348215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94953a20abb1a9b3%3A0xcbefbfc19411721!2sR.+Leonor%2C+1204+-+Vila+Fabiano%2C+Assis+-+SP%2C+19802-420!5e0!3m2!1spt-BR!2sbr!4v1558013934368!5m2!1spt-BR!2sbr" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-4" style="color: white; margin-top: 40px; margin-bottom: 40px">
                <p style="font-weight: bold">CONTATO</p>
                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                <br>
                <a href="https://web.whatsapp.com/" target="_blank">WhatsApp</a>
                <br>
                <a href="https://twitter.com/login?lang=pt" target="_blank">Twitter</a>
                <br>
                <a href="https://www.instagram.com/?hl=pt-br" target="_blank">Instagram</a>
            </div>
            <div class="col-4 footer-pagina" style="color: white; margin-top: 40px; margin-bottom: 40px">
                <p style="font-weight: bold">ACESSE</p>
                <a href="/produto/paes">Pães</a>
                <br>
                <a href="/produto/paes">Doces</a>
                <br>
                <a href="/produto/paes">Bolos</a>
                <br>
                <a href="/produto/paes">Salgados</a>
                <br>
                <a href="/produto/paes">Receitas</a>
            </div>
        </div>
    </div>
</footer>

</html>