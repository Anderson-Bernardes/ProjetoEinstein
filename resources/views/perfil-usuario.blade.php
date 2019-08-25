<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/perfil-usuario.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <title>Perfil Usuário</title>
</head>
<body id="body" style="background-color:rgb(233,235,238);">
<header>
    <nav class="navbar navbar-icon-top navbar-expand-xl" style="background-color: rgb(90, 84, 173);">
        <div class="container">
            <a class="navbar-brand  mx-1" href="#" style="color: rgb(255, 255, 255); font-weight: bold;">Einstein</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left: 20px;">
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Search"
                               style="padding-left: 18px; border-radius: 40px; min-width:480px;" id="mysearch">
                        <div class="input-group-addon"
                             style="margin-left: -38px; z-index: 3; border-radius: 40px; background-color: transparent; border:none;">
                            <button class="btn btn-light btn-sm" type="submit" style="border-radius: 20px;"
                                    id="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-envelope" style="color: rgb(255, 255, 255);">
                                <span class="badge badge-danger">1</span>
                            </i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell" style="color: rgb(255, 255, 255);">
                                <span class="badge badge-danger">2</span>
                            </i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="x" src="http://placehold.it/40x40" alt="">
                                </a>
                            </div>
                            <div id="center">
                                ASDASDASDDDDDDDDDDDDDDD
                                <div class="SolicitaAmizade">
                                    BOTÕ
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="#">
                            <i class="fa fa-user" style="color: rgb(255, 255, 255);">
                                <span class="badge badge-danger">3</span>
                            </i>
                        </a>
                        <a class="nav-link" href="#">
                            {{--<img
                                src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/14517422_945412785570713_2191894243524876629_n.jpg?_nc_cat=109&_nc_ht=scontent.fpoo3-1.fna&oh=9a20577dddaca6b6a1507978493fbbe2&oe=5D70C21D"
                                id="image" alt="">--}}
                            @if($user->foto == 'null')
                                <img class="img-profile center-block"
                                     src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="" id="image">
                            @else
                                <img class="img-profile img-thumbnail center-block"
                                     src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="" id="image">
                            @endif
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="corpo">
        <div class="capa">
            <div class="row">
                <div class="col-12">
                    <div class="card cardcapa">
                        <div class="cardheader">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="avatar-feed">
            <div class="row">
                <div class="col-3">
                    <!--<img src="https://66.media.tumblr.com/50d8edbe01db286bcc42c8ea2de0e381/tumblr_pu3c6pPYE41y9ujooo5_500.png" class="avatar-imagem" alt="..."-->
                    @if($user->foto == 'null')
                        <img class="avatar-imagem"
                             src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="">
                    @else
                        <img class="avatar-imagem"
                             src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                    @endif
                    <div class="nome-usuario">
                        <h6><strong>{{$user->name}}</strong></h6>
                        <a href=""><p class="card-text"><small class="text-muted">{{$user->username}}</small></p></a>
                        <a><p><small><i class="fas fa-graduation-cap"></i> Estudante</small></p></a>
                        <a><p class="card-text"><small><i class="fas fa-map-marker-alt"></i> Minas Gerais,
                                    Brazil</small></p></a>
                    </div>
                    <div class="mensagem-adicionar">
                        <button type="button" class="btn btn-default"><i class="fas fa-user-plus"></i></button>
                        <button type="button" class="btn btn-default"><i class="fas fa-envelope-open"></i></button>
                    </div>
                    <div class="amigos-adicionados">
                        <div class="nome-icon-amigos">
                            <a href="" style="color: black;"><small><i class="fas fa-users"></i> Lista de amigos
                                </small></a>
                        </div>
                        <div class="lista-de-amigos">
                            <div class="amigos">
                                <img
                                    src="https://66.media.tumblr.com/abf2bf28741a1debde3292529c2a8c0d/5e5c8ae68d670e74-ce/s640x960/ccc0a7670c5c0d49c7bb078770c5f67178088a83.jpg"
                                    class="imagem-amigo" alt="...">
                            </div>
                            <div class="amigos">
                                <img
                                    src="https://66.media.tumblr.com/b1843e9c97f0b2cc2398783f5571a224/5e5c8ae68d670e74-d8/s640x960/3d9f5e3d2b95035bc5979e230386ebadc75476b1.jpg"
                                    class="imagem-amigo" alt="...">
                            </div>
                            <div class="amigos">
                                <img
                                    src="https://66.media.tumblr.com/864ea69f0c888f6c0f5e931c1587e029/tumblr_pu3ktz2qPB1uxg9roo3_400.jpg"
                                    class="imagem-amigo" alt="...">
                            </div>
                            <div class="amigos">
                                <img
                                    src="https://66.media.tumblr.com/864ea69f0c888f6c0f5e931c1587e029/tumblr_pu3ktz2qPB1uxg9roo3_400.jpg"
                                    class="imagem-amigo" alt="...">
                            </div>
                            <div class="amigos">
                                <img
                                    src="https://66.media.tumblr.com/864ea69f0c888f6c0f5e931c1587e029/tumblr_pu3ktz2qPB1uxg9roo3_400.jpg"
                                    class="imagem-amigo" alt="...">
                            </div>
                            <div class="amigos">
                                <img
                                    src="https://66.media.tumblr.com/864ea69f0c888f6c0f5e931c1587e029/tumblr_pu3ktz2qPB1uxg9roo3_400.jpg"
                                    class="imagem-amigo" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="informa-perfil">
                        <div class="card gedf-card">
                            <div class="header">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                                           aria-controls="posts" aria-selected="true">Postagens</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="grupos-tab" data-toggle="tab" role="tab"
                                           aria-controls="grupos" aria-selected="false" href="#grupos">Páginas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="images-tab" data-toggle="tab" role="tab"
                                           aria-controls="images" aria-selected="false" href="#">Listas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="images-tab" data-toggle="tab" role="tab"
                                           aria-controls="images" aria-selected="false" href="#">Video Aulas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="images-tab" data-toggle="tab" role="tab"
                                           aria-controls="images" aria-selected="false" href="#">Emblemas</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                        @foreach($postagens['postagens'] as $post)
                                        <div class="card card-publicao">
                                            <div class="foto-usuario-grupo">
                                               {{-- <img
                                                    src="{{$user->foto}}"
                                                    id="img-feed-grupo" alt="...">--}}
                                                @if($user->foto == 'null')
                                                    <img id="img-feed-grupo"
                                                         src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="...">
                                                @else
                                                    <img id="img-feed-grupo"
                                                         src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="...">
                                                @endif
                                                <a href=""><p>{{$user->username}}</p></a>
                                                <div class="opcoes"><a href=""><h3>...</h3></a></div>
                                            </div>
                                            <div class="publicacao-feed-texto">
                                                <div class="titulo">
                                                    <h6>Matemática Básica</h6>
                                                </div>
                                                <p>{{$post['texto']}}
                                                </p>
                                                <div class="tags">
                                                    <a href=""><p>#Matemática</a>
                                                    <a href=""><p>#Exercicio</a>
                                                    <a href=""><p>#Matemática</a>
                                                    <a href=""><p>#Exercicio</a>
                                                    <a href=""><p>#Exercicio</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="foster">
                                                <a><p><i class="far fa-thumbs-up  ml-1 "></i> 145 </p></a>
                                                <a><p><i class="fas fa-share-square  ml-1"></i> 123</p></a>
                                                <div class="foster-resolver">
                                                    <a href="" id="direito"><p><i class="fas fa-feather-alt"></i>
                                                            resolver </p></a>
                                                </div>
                                                <div class="status">
                                                    <h5><i class="far fa-question-circle"></i></h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    {{--    <div class="card card-publicao">
                                            <div class="foto-usuario-grupo">
                                                <img
                                                    src="https://66.media.tumblr.com/50d8edbe01db286bcc42c8ea2de0e381/tumblr_pu3c6pPYE41y9ujooo5_500.png"
                                                    id="img-feed-grupo" alt="...">
                                                <a href=""><p>@CelySastre</p></a>
                                                <div class="opcoes"><a href=""><h3>...</h3></a></div>
                                            </div>
                                            <div class="publicacao-feed-texto">
                                                <div class="titulo">
                                                    <h6>Matemática Básica</h6>
                                                </div>
                                                <p>Matemática matemática matemática matemática 23-(2+8)-7​
                                                </p>
                                                <div class="tags">
                                                    <a href=""><p>#Matemática</a>
                                                    <a href=""><p>#Exercicio</a>
                                                    <a href=""><p>#Matemática</a>
                                                    <a href=""><p>#Exercicio</a>
                                                    <a href=""><p>#Exercicio</a>

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="foster">
                                                <a><p><i class="far fa-thumbs-up  ml-1 "></i> 145 </p></a>
                                                <a><p><i class="fas fa-share-square  ml-1"></i> 123</p></a>
                                                <div class="foster-resolver">
                                                    <a href="" id="direito"><p><i class="fas fa-feather-alt"></i>
                                                            resolver </p></a>
                                                </div>
                                                <div class="status">
                                                    <h5><i class="far fa-question-circle"></i></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-publicao">
                                            <div class="foto-usuario-grupo">
                                                <img
                                                    src="https://66.media.tumblr.com/50d8edbe01db286bcc42c8ea2de0e381/tumblr_pu3c6pPYE41y9ujooo5_500.png"
                                                    id="img-feed-grupo" alt="...">
                                                <a href=""><p>@CelySastre</p></a>
                                                <div class="opcoes"><a href=""><h3>...</h3></a></div>
                                            </div>

                                            <div class="publicacao-feed-texto">
                                                <div class="titulo">
                                                    <h6>Matemática Básica</h6>
                                                </div>
                                                <p>Matemática matemática matemática matemática 23-(2+8)-7​
                                                </p>
                                                <div class="tags">
                                                    <a href=""><p>#Matemática</a>
                                                    <a href=""><p>#Exercicio</a>
                                                    <a href=""><p>#Matemática</a>
                                                    <a href=""><p>#Exercicio</a>
                                                    <a href=""><p>#Exercicio</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="foster">
                                                <a><p><i class="far fa-thumbs-up  ml-1 "></i> 145 </p></a>
                                                <a><p><i class="fas fa-share-square  ml-1"></i> 123</p></a>
                                                <div class="foster-resolver">
                                                    <a href="" id="direito"><p><i class="fas fa-feather-alt"></i>
                                                            resolver </p></a>
                                                </div>
                                                <div class="status">
                                                    <h5><i class="far fa-question-circle"></i></h5>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                    <div class="tab-pane fade show active" id="grupos" role="tabpanel"
                                         aria-labelledby="grupos-tab">
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="card-deck">
                                                    <div class="card cardgrupos">
                                                        <img class="card-img-top"
                                                             src="https://picsum.photos/200/150/?random" alt="">
                                                        <div class="card-block">
                                                            <h5 class="text-bold">Tawshif Ahsan Khan</h5>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small>Last updated 3 mins ago</small>
                                                            <button class="btn btn-secondary float-right btn-sm">show
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <img class="card-img-top"
                                                             src="https://picsum.photos/200/150/?random" alt="">
                                                        <div class="card-block">
                                                            <h5 class="text-bold">Tawshif Ahsan Khan</h5>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <img class="card-img-top"
                                                             src="https://picsum.photos/200/150/?random" alt="">
                                                        <div class="card-block">
                                                            <h5 class="text-bold">Tawshif Ahsan Khan</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
      integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
      integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="css/bootstrap.min.css">
</html>
