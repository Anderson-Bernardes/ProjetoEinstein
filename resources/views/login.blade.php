<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/homee.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">


    <title>Einstein - Cadastro ou Login</title>
</head>
<body id="body" style="background-color: #fff">
<header>
    <nav class="navbar navbar-icon-top navbar-expand-xl" style="background-color: rgb(90, 84, 173);">
        <div class="container">
            <a class="navbar-brand  mx-4" href="#"
               style="color: rgb(255, 255, 255); font-weight: bold; font-size: 35px; margin-bottom: 25px;">Einstein</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">


                </ul>
                <ul class="navbar-nav ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <li class="nav-item">
                            <div class="form-group">
                                <!--- <input type="text" class="form-control" placeholder="E-mail"> -->
                                <input id="email" type="email" placeholder="E-mail"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </li>
                        <li class="nav-item">


                            <div class="form-group">
                                <!--<input type="text" class="form-control" placeholder="Senha">-->

                                <input id="password" type="password" placeholder="Senha"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="login-bottom-text checkbox hidden-sm">
                                    <label>
                                        <input type="checkbox" id="">
                                        Esqueceu sua senha?
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <!---<input type="button" value="login" class="btn btn-light btn-header-login">---->
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </li>
                        <li class="nav-item">
                        </li>
                    </form>
                </ul>
            </div>

        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="descricao-site">
                <h3 class="fonte"> Bem-vindo ao Einstein</h3>
                <div class="descricao-einstein">


                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="CadastroIndex">

                <h3><i class="fa fa-shield"></i> Cadastre no Einstein agora</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <hr>
                    <div class="row">


                        <div class="form-group col-md-6">
                            <!--<input type="text" class="form-control" placeholder="Nome">-->
                            <input id="name" type="text" placeholder="Nome"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                   value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <input name="username" type="text" class="form-control" placeholder="Apelido" required>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <!--<input type="text" class="form-control" placeholder="E-mail">-->
                        <input id="email" type="email" placeholder="E-mail"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <!--<input type="password" class="form-control" placeholder="Senha">-->
                        <input id="password" placeholder="Senha" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <!--<input type="password" class="form-control" placeholder="Confirme sua senha">-->
                        <input id="password-confirm" placeholder="Confirme sua senha" type="password"
                               class="form-control" name="password_confirmation" required>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>Dia</label>
                            <div class="multibox">
                                <select name="dia" class="form-control">
                                    @for($i=1; $i<=31; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Mês</label>
                            <div class="multibox">
                                <select name="mes" class="form-control">
                                    <option value="01">Jan</option>
                                    <option value="02">Fev</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Abr</option>
                                    <option value="05">Maio</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Agos</option>
                                    <option value="09">Set</option>
                                    <option value="10">Out</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dez</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Ano</label>
                            <div class="multibox">
                                <select name="ano" class="form-control">
                                    @for($j=2019; $j>=1970; $j--)
                                        <option value="{{$j}}">{{$j}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>

                    <small>
                        Ao clicar em cadastrar, você concorda com nossos Termos e que <a href="#ponto1">nossa Política
                            de
                            Uso de Dados</a>
                        leu nossa Política de Uso de Dados, incluindo nosso Uso de Cookies.
                    </small>
                    <div class="form-group-botão">
                        <label class="control-label" for=""></label>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
</html>
