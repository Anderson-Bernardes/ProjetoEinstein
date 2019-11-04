<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/homee.css">
    <link rel="stylesheet" type="text/css" href="css/paginaConfig.css">
    <!--script type="text/javascript" src="js/feed.js"></script>-->
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <title>Einstein</title>
</head>
<body id="body" style="background-color:rgb(233,235,238);">
<header>
    <nav class="navbar navbar-icon-top navbar-expand-xl" style="background-color: rgb(90, 84, 173);">
        <div class="container">
            <a class="navbar-brand  mx-1" href="{{route('config')}}" style="color: rgb(255, 255, 255); font-weight: bold;">Einstein</a>
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
                                    <img class="x" src="http://placehold.it/40x40">
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
                        <a class="nav-link" href="{{route("userPerfil")}}">
                            {{--<img
                                src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/14517422_945412785570713_2191894243524876629_n.jpg?_nc_cat=109&_nc_ht=scontent.fpoo3-1.fna&oh=9a20577dddaca6b6a1507978493fbbe2&oe=5D70C21D"
                                id="image">--}}
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
    <div class="row">
        <div class="col-3">

            <div class="card perfil">
                <div class="perfil-foto">
                    <!--<img src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/14517422_945412785570713_2191894243524876629_n.jpg?_nc_cat=109&_nc_ht=scontent.fpoo3-1.fna&oh=9a20577dddaca6b6a1507978493fbbe2&oe=5D70C21D" class="img-thumbnail">-->
                    @if($user->foto == 'null')
                        <img class="img-thumbnail"
                             src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="" >
                    @else
                        <img class="img-thumbnail"
                             src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                    @endif
                </div>
                    <P class="nome" href="#">{{$user->name}}</p>
                    <a href="{{route('userPerfil')}}" class="apelido">{{$user->username}}</a>

            </div>
            <div class="navcard">
                <div class="card opcoes">
                    <div class="nav flex-column" aria-orientation="vertical" >
                        <a class="nav-link active" href="#"><i class="fas fa-rss-square mx-2"></i> Inicial</a>
                        <a class="nav-link" href="pagina-grupo.html"><i class="fa fa-flag mx-2"></i>Grupos</a>
                        <a class="nav-link" href="#"><i class="fa fa-graduation-cap mx-2"></i>Cursos</a>
                        <a class="nav-link" href="#v-pills-amigos"><i class="fa fa-users mx-2"></i>Amigos</a>
                        <a class="nav-link" href="#v-pills-recomendacoes"><i class="fas fa-book-reader mx-2"></i>Recomendações</a>
                        <a class="nav-link" href="#v-pills-emblemas"><i class="fas fa-crown mx-2"></i>Emblemas</a>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-6">


        </div>

        <div class="col-3">
                            <div class="card progresso">
                                <div class="progress blue">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">20%</div>
                                </div>

                                <div class="progresso-nome">
                                  <p class="nivel">Nível: Iniciante</p>
                                </div>
                            </div>

                            <div class="card raking-semanal">
                              <div class="raking-geral">
                                <p> <i class="fas fa-crown mx-2 mt-3"  style="color: rgb(255,215,0);"></i>Ranking Geral</a> </p>
                                <hr>
                            </div>
                            <div class="usuarios-no-topo">
                                <div class="row">
                                    <div class="foto-raking col-3">
                                        <img src="https://www.orkut.br.com/assets/img/profile/4024549345d688f480c2cb6.13537197_9221a8459ee197993a99f95859f5d4fb.jpg" class="">
                                    </div>
                                    <div class="nome-raking col-5">
                                      <a href="#">@1234567890</a>
                                    </div>
                                    <div class="pontos col-4">
                                      <p>10pts</p>
                                    </div>
                                  </div>

                            </div>
                            <div class="usuarios-no-topo">
                                <div class="row">
                                    <div class="foto-raking col-3">
                                        <img src="https://www.orkut.br.com/assets/img/profile/4024549345d688f480c2cb6.13537197_9221a8459ee197993a99f95859f5d4fb.jpg" class="">
                                    </div>
                                    <div class="nome-raking col-5">
                                      <a href="#">@celysastre</a>
                                    </div>
                                    <div class="pontos col-4">
                                      <p>10pts</p>
                                    </div>
                                  </div>

                            </div>

                            </div>
                 </div>

<!-- 
            <form id="editor1">
                <label for="editor1">Editor 1</label>
                <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'editor1',{
                    extraPlugins: 'mathjax',
                        mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
                        height: 320});
                </script>
            </form> -->


          

    </div>
</div>
</body>
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
