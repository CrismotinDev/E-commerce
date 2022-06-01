<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motin Games - Ecommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    @yield('scriptjs')
</head>

<body>


            <nav class="navbar navbar-light navbar-expand-md bg-ligth pl-5 pr-5 mb-5">
                <a href="https://www.gamemotin.com.br/" class="navbar-brand"><img src="{{asset('images/logo1.jpg')}}" width="140"></a>
                <div class="collpase navbar-collapse">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i></a>
                        <a class="nav-link" href="{{ route('categoria') }}"><i class="fas fa-bars"></i></a>
                        <a class="nav-link" href="{{ route('cadastrar') }}"><i class="fas fa-user"></i></a>
                        <a class="nav-link" href="{{ route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>

            </nav>

            <div class="container">
                <div class="row">
                    <!-- nesta div teremos uma area que os arquivos irao adicionar conteudo-->
                    @yield('conteudo')
                </div>
            </div>

</body>

</html>
