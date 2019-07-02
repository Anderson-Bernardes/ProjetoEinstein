<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Amigos</title>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/barra-esquerda.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/barra-direita.css')}}" type="text/css">


</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light border border-dark"
         style="background-color: #FFFFFF">
        <div class="container">
            <a class="navbar-brand h1 mb-1" href="{{route('home')}}">Einstein</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            </button>
            <div class="collapse navbar-collapse" id="navBarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Notificação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Mensagem</a>

                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="Navdrop">Perfil</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('config')}}">Configurações</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Sair</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                    <button class="btn btn-dark" type="submit">Ok</button>
                </form>
            </div>

        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-3">
             <div class="view-account">
                        <section class="module">
                            <div class="module-inner">
                                <div class="side-bar">
                                    <div class="card">
                                    <div class="user-info">

                                        @if($user->foto == 'null')
                                            <img class="img-profile center-block"
                                                 src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="">
                                        @else
                                            <img class="img-profile center-block"
                                                 src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                                        @endif

                                        <ul class="meta list list-unstyled">
                                        <li class="name"> <a href="#">{{$user->name.' '}}{{$user->sobrenome}}></a>
                                        </li>
                                        <li class="aluno"><?php /*echo $dados['tipo'] */?>
                                        </li>
                                    </ul>
                                    </div>
                                    <nav class="side-menu">
                                        <ul class="nav">
                                            <li><a href="PerfilUsuario.php"><span class="fa fa-user"></span> Perfil</a></li>
                                            <li><a href="{{route('config')}}"><span class="fa fa-cog"></span> Configurações</a></li>
                                            <li><a href="#"><span class="fa fa-envelope"></span> Menssagem</a></li>
                                            <li class="active"><a href="#"><span class="fa fa-users"></span> Amigos</a></li>
                                            <li><a href="{{route('grupos')}}"><span class="fa fa-flag"></span> Páginas</a></li>
                                            <li><a href="#"><span class="fa fa-graduation-cap"></span> Material</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>

        </div>
        <div class="col-6">
            <div class="caixa-ferramenta">
                <div class="card">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="amigos">
                                <div class="breac">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Amigos
                                                de {{$user->name.' '}}{{$user->sobrenome}} </li>
                                        </ol>
                                    </nav>
                                </div>
                                @foreach($amigos as $amigo)
                                <div class="lista-de-amigos">

                                    <div class="list-group">
                                            <div class="list-group-item clearfix">
                                                <div class="profile-teaser-left">
                                                    <a class="pull" href="#"></a>
                                                        <div class="profile-img">
                                                            @if($amigo->foto == 'null')
                                                                <img class="img-profile center-block"
                                                                     src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="">
                                                            @else
                                                                <img class="img-profile center-block"
                                                                     src="{{url('storage/FotoPerfil/'.$amigo->foto)}}" alt="">
                                                            @endif
                                                        </div>
                                                </div>
                                                <div class="profile-teaser-main">
                                                    <a href="PerfilUsuarioVisualizacao.php?ida=<?php /*echo $r['idusuario']*/?>"
                                                       class="profile-name">{{$amigo->name.' '}}{{$amigo->sobrenome}}</a>
                                                    <div class="profile-info">
                                                        <div class="info"><?php /*echo $r['tipo'] */?></div>
                                                        <p class="text-right"><a data-toggle="modal"
                                                                                 data-target="#excluiramigo" href="#"
                                                                                 class="btn btn-sm btn-outline-danger"><i
                                                                        class="fa fa-trash"></i> Deletar</a></p>
                                                    </div>
                                                </div>
                                            </div><!-- item -->
                                    </div>
                                </div>
                                @endforeach
                                <form action="{{route('removeAmigo')}}" method="post">
                                    {{csrf_field()}}
                                <div class="modal fade" id="excluiramigo" tabindex="-1" role="dialog"
                                     aria-labelledby="excluiramigo" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Desfazer amizade</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Tem certeza que deseja excluir esse amigo?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-primary btn-sm"
                                                        data-dismiss="modal">Cancelar
                                                </button>
                                                <button name="remover" type="submit" class="btn btn-outline-danger btn-sm">Excluir
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">
                            <div class="breac">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Solicitação de amizade
                                        </li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="lista-de-amigos">
                                <div class="list-group">



                                        <div class="list-group-item clearfix">
                                            <div class="profile-teaser-left">
                                                <a class="pull" href="#"></a>
                                                    <div class="profile-img"><img
                                                                src="<?php /*echo "fotosPerfil/" . $resul['fotoPerfil'] */?>"/>
                                                    </div>
                                            </div>
                                            <div class="profile-teaser-main">
                                                <a href="#"
                                                   class="profile-name"><?php /*echo $resul['nome'] . " " . $resul['sobrenome'] */?></a>
                                                <div class="profile-info">
                                                    <div class="info"><?php /*echo $resul['tipo'] */?></div>
                                                    <p class="text-right"><a href="aceitarAmigo.php?ida=<?php /*echo $resul['idusuario'] */?>" class="btn btn-sm btn-outline-success"><i
                                                                    class="fa fa-check"></i>Aceitar</a></p>
                                                </div>
                                            </div>
                                        </div><!-- item -->

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">Em andamento
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="raking">
                <div class="card">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-home"
                           role="tab" aria-controls="v-pills-home" aria-selected="true">Amigos</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                           role="tab" aria-controls="v-pills-profile" aria-selected="false">Solicitações
                            <span class="badge badge-primary badge-pill "><?php /*if ($res->num_rows > 0) echo $res->num_rows */?></span>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                           role="tab" aria-controls="v-pills-messages" aria-selected="false">Bloqueados</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>