<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Páginas</title>

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
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="Navdrop">
                            Perfil
                        </a>
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
        <div class="col-3">
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
                                        <li class="name">{{$user->name.' '}}{{$user->sobrenome}}
                                            <label class="label label-info">Aluno(o)</label>
                                        </li>
                                        <li class="email"><a href="#">{{$user->email}}</a></li>
                                    </ul>
                                </div>
                                <nav class="side-menu">
                                    <ul class="nav">
                                        <li><a href="{{route('userPerfil')}}"><span class="fa fa-user"></span>
                                                Perfil</a></li>
                                        <li><a href="{{route('config')}}"><span class="fa fa-cog"></span>
                                                Configurações</a></li>
                                        <li><a href="#"><span class="fa fa-envelope"></span> Menssagem</a></li>
                                        <li><a href=#><span class="fa fa-users"></span> Amigos</a></li>
                                        <li class="active"><a href="#"><span class="fa fa-flag"></span>
                                                Grupos de Estudo</a></li>
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

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <hr>
                            <div class="card-deck">

                                <div class="card">
                                    <img class="card-img-top"
                                         src="FotosPagina/<?php //echo $post['foto'] ?>"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <a class="card-title text-center"
                                           href="PaginaGrupoPerfil.php?idpag=<?php //echo $post['idpaginas'] ?>"><?php //echo $post['nome'] ?></a>
                                        <p class="card-text text-muted"><?php //echo $post['Assunto'] ?></p>
                                        <p class="card-text text-center">
                                            <a href="<?php //echo "unfollowPagina.php?idp=".$post['idpaginas'] ?>"
                                               id="teste1" class="btn btn-primary btn-sm btn-custom">Seguindo</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>


                        <!--estrutura de repeticao para carregar as paginas CRIADAS-->
                        <div class="tab-pane fade" id="v-pills-paginascurtidas" role="tabpanel"
                             aria-labelledby="v-pills-paginascurtidas-tab">
                            <div class="form-group mx-sm-2">
                                <div class="card-deck">

                                        @foreach($grupos as $grupo)
                                    <div class="card">
                                        <img class="card-img-top"
                                             src="{{url('storage/Grupos/'.$grupo->foto)}}"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <a class="font-weight-bold"
                                                   href="aginaGrupoPerfil.php?idpag=">{{$grupo->nome}}</a>
                                            </div>
                                            <p class="font-weight-light">{{$grupo->tema}}</p>
                                            <p class="card-text text-center">
                                                <a href="deletePagina.php?idpag="
                                                    class="btn-primary btn-sm btn-custom">Excluir</a>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                                <hr>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="v-pills-criarpagina" role="tabpanel"
                             aria-labelledby="v-pills-criarpagina-tab">
                            <div class="card-body">
                                <div class="personal-info">
                                    <div class="form-group mx-sm-5">
                                        <h5>Criar página</h5>
                                        <h6>Crie sua página e receba curtidas e avaliações de outras pessoas</h6>

                                        <form action="{{route('criaGrupo')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <label for="exampleInputEmail1">Nome da página</label>
                                            <input type="text" class="form-control" id="ExempleNomePagina"
                                                   aria-describedby="NomePagina"
                                                   placeholder="Dê um nome para sua página" name="nome">

                                            <label for="exampleInputPassword1">Categoria</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Descreva sua página" name="tema">

                                            <label>Selecione uma imagem para a página</label>
                                            <input type="file" name="foto">
                                            <button type="submit" class="btn btn-primary" name="criar">Criar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

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
                           role="tab" aria-controls="v-pills-home" aria-selected="true">Páginas seguidas</a>
                        <a class="nav-link" id="v-pills-paginascurtidas-tab" data-toggle="pill"
                           href="#v-pills-paginascurtidas" role="tab" aria-controls="v-pills-paginascurtidas"
                           aria-selected="false">Páginas Criadas</a>
                        <a class="nav-link" id="v-pills-criarpagina-tab" data-toggle="pill" href="#v-pills-criarpagina"
                           role="tab" aria-controls="v-pills-criarpagina" aria-selected="false">Criar Páginas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
<script type="text/javascript">

    $(function () {
        $("#teste1").hover(
            function () {
                $(this).addClass('btn btn-danger')
            },
            function () {
                $(this).removeClass('btn-danger ')
            }
        );
    });
    $(function () {
        $("#teste1").hover(
            function () {
                $(this).html("Deixar de seguir")
            },
            function () {
                $(this).html("Seguindo")
            }
        );
    });
</script>
</html>