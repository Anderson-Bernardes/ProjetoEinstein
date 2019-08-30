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
            <div class="card">
            <div class="card perfil">
                <div class="perfil-foto">
                    <img src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/14517422_945412785570713_2191894243524876629_n.jpg?_nc_cat=109&_nc_ht=scontent.fpoo3-1.fna&oh=9a20577dddaca6b6a1507978493fbbe2&oe=5D70C21D" class="img-thumbnail">
                </div>
                    <P class="nome" href="#">Marcely Sastre</p> 
                    <a href="" class="apelido">@Celysastre</a>                                            
            </div>  
                <!-- <div class="name-foto">
                    <p class="welcome"><strong> Bem Vindo(a)</strong></p>
                    @if($user->foto == 'null')
                        <img class="img-profile center-block"
                             src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="">
                    @else
                        <img class="img-profile img-thumbnail center-block"
                             src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                    @endif
                    <a class="nomeusuario" href="{{route('userPerfil')}}">{{$user->name}}</a>
                </div> -->
            </div>
            <div class="navcard">
                <div class="card opcoes">
                    <div class="nav flex-column" aria-orientation="vertical" >
                        <a class="nav-link active" href="#"><i class="fas fa-rss-square mx-2"></i> Feed</a>
                        <a class="nav-link" href="pagina-grupo.html"><i class="fa fa-flag mx-2"></i>Páginas</a>
                        <a class="nav-link" href="#"><i class="fa fa-graduation-cap mx-2"></i>Material</a>
                        <a class="nav-link" href="#v-pills-amigos"><i class="fa fa-users mx-2"></i>Amigos</a>
                        <a class="nav-link" href="#v-pills-recomendacoes"><i class="fas fa-book-reader mx-2"></i>Recomendações</a>
                        <a class="nav-link" href="#v-pills-emblemas"><i class="fas fa-crown mx-2"></i>Emblemas</a>
                    </div>
                 </div>
            </div> 
        </div>
        <div class="col-9">



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
            </form>


            <!-- <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-feed" role="tabpanel"
                     aria-labelledby="v-pills-feed-tab">
                    <div class="row">
                        <div class="col-8">
                            <form method="post" action="{{route('criaPost')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="card gedf-card ">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="posts-tab" data-toggle="tab"
                                                   href="#posts" role="tab" aria-controls="posts" aria-selected="true">Dúvida</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab"
                                                   aria-controls="images" aria-selected="false" href="#images">Vídeo
                                                    Aula</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab"
                                                   aria-controls="images" aria-selected="false"
                                                   href="#outros">Outros</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="posts" role="tabpanel"
                                                 aria-labelledby="posts-tab">
                                                <div class="form-group">
                                                    <label class="sr-only" for="message">post</label>
                                                    <textarea name="texto" class="form-control" id="message" rows="4"
                                                              placeholder="Escreva sua dúvida aqui (para obter uma boa resposta, descreva sua dúvida de forma simples e clara)"></textarea>
                                                </div>
                                                <div class="escolha">
                                                    <select name="grupo" class="form-control">
                                                        <option selected="">Escolha um grupo para enviar sua
                                                            pergunta
                                                        </option>
                                                        @foreach($grupos as $grupo)
                                                            <option name="{{$grupo->nome}}"
                                                                    value="{{$grupo->id}}">{{$grupo->nome}}</option>
                                                        @endforeach
                                                        {{-- <option selected="">Selecione a disciplina </option>
                                                         <option>Matemática</option>
                                                         <option>Historia</option>
                                                         <option>Geografia</option>
                                                         <option>Gramática</option>
                                                         <option>Inglês</option>
                                                         <option>Física</option>
                                                         <option>Química</option>
                                                         <option>Biologia</option>
                                                         <option>Filosofia</option>
                                                         <option>Sociologia</option>--}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="images" role="tabpanel"
                                                 aria-labelledby="images-tab">
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Upload do
                                                            Vídeo</label>
                                                        <div class="input-group mt-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">URL do Youtube</span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="URL"
                                                                   aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-2"></div>
                                            </div>
                                            <div class="tab-pane fade" id="outros" role="tabpanel"
                                                 aria-labelledby="outros-tab">
                                                <div class="form-group">
                                                    <div class="upload-drop-zone" id="drop-zone">
                                                        Arraste seus arquivos aqui <i class="fas fa-upload"></i>
                                                    </div>
                                                    <div class="row">
                                                        <div class="Material col-5">
                                                            <select class="form-control">
                                                                <option selected="">Tipo de material</option>
                                                                <option>Trabalhos</option>
                                                                <option>Exercícios</option>
                                                                <option>Provas</option>
                                                            </select>
                                                        </div>
                                                        <div class="escolha col-7">
                                                            <select class="form-control">
                                                                <option selected="">Escolha um grupo para fazer sua postagem
                                                                </option>
                                                                @foreach($grupos as $grupo)
                                                                    <option name="{{$grupo->nome}}"
                                                                            value="{{$grupo->id}}">{{$grupo->nome}}</option>
                                                                @endforeach
                                                                {{--<option selected="">Selecione a disciplina</option>
                                                                <option>Matemática</option>
                                                                <option>Historia</option>
                                                                <option>Geografia</option>
                                                                <option>Gramática</option>
                                                                <option>Inglês</option>
                                                                <option>Física</option>
                                                                <option>Química</option>
                                                                <option>Biologia</option>
                                                                <option>Filosofia</option>
                                                                <option>Sociologia</option>--}}
                                                            </select>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="py-2"></div>
                                            </div>
                                        </div>
                                        <div class="btn-toolbar justify-content-between">
                                            <div class="btn-group">
                                                <button name="postar" type="submit" class="btn btn-primary mt-2">
                                                    Enviar
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <i class="fa fa-globe"></i>
                                                </button>
                                                <div class="dropdown-menu mt-2 dropdown-menu-right"
                                                     aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i>
                                                        Público</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Apenas
                                                        eu</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-head">
                                    <h4 style="text-align:center;"><i class="fas fa-star mt-2"
                                                                      style="color: rgb(255,215,0)"></i></h4>
                                    <strong><p class="classi-position" style="text-align:center;">classificação</p>
                                    </strong>
                                    <hr>
                                </div>
                                <div class="card-corpo">

                                    <strong><h5 class="classi-position mt-2"
                                                style="text-align:center;font-family: fantasy; color: rgb(90, 84, 173);">
                                            INICIANTE</h5></strong>
                                    <div class="pontuacao-usuario" style="text-align:center;">
                                        <a href="#"> <i id="fa-estrelas" class="fa fa-star"></i><i id="fa-estrelas1"
                                                                                                   class="fa fa-star"></i><i
                                                id="fa-estrelas2" class="fa fa-star"></i><i id="fa-estrelas3"
                                                                                            class="fa fa-star"></i><i
                                                id="fa-estrelas4" class="fa fa-star"></i> </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="raking-geral">
                                    <strong> <i class="fas fa-crown mx-2" style="color: rgb(255,215,0);"></i>Ranking
                                        Semanal</a> </strong>
                                </div>
                                <hr>

                                <div class="usuarios-no-topo">
                                    <div class="row">
                                        <div class="foto-raking col-3">
                                            <img
                                                src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/28471636_1667459376624284_4323301383653421700_n.jpg?_nc_cat=109&_nc_ht=scontent.fpoo3-1.fna&oh=8c0e4e659476432a613894914549e816&oe=5D2E44CE"
                                                alt="Avatar">
                                        </div>
                                        <div class="nome-raking col-5">
                                            <a href="#">IBarrera</a>
                                        </div>
                                        <div class="pontos col-4">
                                            <strong><p>1850pts</p></strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="foto-raking col-3">
                                            <img
                                                src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/56196650_2113555888735986_4353139037431660544_n.jpg?_nc_cat=102&_nc_ht=scontent.fpoo3-1.fna&oh=6e97953cb2d20a53b6eb0f36dec832a7&oe=5D5D7C69"
                                                alt="Avatar">
                                        </div>
                                        <div class="nome-raking col-5">
                                            <a href="#">Marinhou</a>
                                        </div>
                                        <div class="pontos col-4">
                                            <strong><p>1800pts</p></strong>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="foto-raking col-3">
                                            <img
                                                src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/26731694_1773729232698306_2779420609315737612_n.jpg?_nc_cat=101&_nc_ht=scontent.fpoo3-1.fna&oh=d63828518cffdf5fd1c49bf8dae06d34&oe=5D759600"
                                                alt="Avatar">
                                        </div>
                                        <div class="nome-raking col-5">
                                            <a href="#">Marcel23</a>
                                        </div>
                                        <div class="pontos col-4">
                                            <strong><p>1150pts</p></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
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
