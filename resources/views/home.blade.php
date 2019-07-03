<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Páginas Inicial</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/barra-esquerda.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/barra-direita.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/feed.css')}}">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light border border-dark"
         style="background-color: #FFFFFF">
        <div class="container">
            <a class="navbar-brand h1 mb-1" href="#">Einstein</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            </button>
            <div class="collapse navbar-collapse" id="navBarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Página Inicial</a>
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
                        <a class="nav-link dropdown-toggle" href="{{route('userPerfil')}}" data-toggle="dropdown" id="Navdrop">
                            Perfil
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('config')}}">Configurações</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Sair</a>
                        </div>
                    </li>
                </ul>
                    <form class="form-inline" method="POST" action="#">
                          <input class="form-control ml-4 mr-2" type="text" name="pesquisar" placeholder="Buscar...">
                            <button class="btn btn-dark" type="submit" value="ENVIAR" >Ok</button>
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
                                    <div class="pull" href="PerfilUsuario.php">

                                        @if($user->foto == 'null')
                                            <img class="img-profile center-block"
                                                 src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="">
                                        @else
                                            <img class="img-profile center-block"
                                            src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                                        @endif

                                    <ul class="meta list list-unstyled">
                                        <li class="name"> <a href="{{route('userPerfil')}}">{{$user->name.' '.$user->sobrenome}}</a>
                                        </li>
                                        <li class="aluno">{{$user->tipo}}</li>
                                        <li class="email">{{$user->email}}</li>
                                    </ul>
                                    </div>
                                </div>
                                <nav class="side-menu">
                                    <ul class="nav">
                                        <li><a href="{{route('userPerfil')}}"><span class="fa fa-user"></span> Perfil</a></li>
                                        <li><a href="{{route('config')}}"><span class="fa fa-cog"></span> Configurações</a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-envelope"></span> Menssagem</a></li>
                                        <li><a href="{{route('amigos')}}"><span class="fa fa-users"></span> Amigos</a></li>
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
        <form method="post" action="{{route('criaPost')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="caixa-ferramenta">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <textarea class="form-control" id="texto"
                                      name="texto"
                                      placeholder="Escreva sua duvida aqui (para opter uma boa resposta, descreva sua duvida de forma simples e clara)."
                                      rows="4" id="comment"></textarea>
                        </div>
                        <div class="escolha">
                            <select name="grupo" class="form-control  form-control-sm">
                                <option selected="">Escolha uma página para enviar sua pergunta</option>
                                    @foreach($grupos as $grupo)
                                        <option name="{{$grupo->nome}}" value="{{$grupo->id}}">{{$grupo->nome}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="botao-enviar" id="ocutarBotao">
                            <a data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary btn-sm">
                                <span class="fa fa-photo"></span>
                            </a>
                            <a class="btn btn-outline-primary btn-sm" id="btn">
                                <span class="fa fa-tasks"></span>
                            </a>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Upload de foto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Você pode enviar arquivos JPG ou PNG (tamanho máximo sugerido de 1 MB). Não envie fotos que fujam da proposta do site</p>
                                            <div class="form-group">
                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <span class="btn btn-default btn-file">
                                                                            <input name="imagem" type="file" id="imgInp">
                                                                        </span>
                                                                    </span>
                                                </div>
                                                <img id='img-upload'/>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-outline-primary btn-sm">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="botao-direita" id="ocutarBotao1">
                            <button type="submit" name="postar" class="btn btn-outline-primary btn-sm">Enviar</button>
                        </div>





                        <div class="card" id="sobcard" style="display:none">
                            <div class="card-body">
                                <p>Escolha a opção correta</p>
                                <div class="radio">
                                    <input type="radio" type="text" name="optionsRadios" id="optionsRadios2"
                                           value="option2">
                                    <label for="optionsRadios2"><input type="text" class="form-control form-control-sm"
                                                                       placeholder="Respota 1"></label>
                                </div>
                                <div class="radio">
                                    <input type="radio" type="text" name="optionsRadios" id="optionsRadios2"
                                           value="option2">
                                    <label for="optionsRadios2"><input type="text" class="form-control form-control-sm"
                                                                       placeholder="Respota 2"></label>
                                </div>
                                <div class="radio">
                                    <input type="radio" type="text" name="optionsRadios" id="optionsRadios2"
                                           value="option2">
                                    <label for="optionsRadios2"><input type="text" class="form-control form-control-sm"
                                                                       placeholder="Resposta 3"></label>
                                </div>
                                <div class="radio">
                                    <input type="radio" type="text" name="optionsRadios" id="optionsRadios2"
                                           value="option2">
                                    <label for="optionsRadios2"><input type="text" class="form-control form-control-sm"
                                                                       placeholder="Respota 4"></label>
                                </div>
                                <div class="radio">
                                    <input type="radio" type="text" name="optionsRadios" id="optionsRadios2"
                                           value="option2">
                                    <label for="optionsRadios2"><input type="text" class="form-control form-control-sm"
                                                                       placeholder="Respota 5"></label>
                                </div>
                                <hr>
                                <div class="botao-direita-radio">
                                    <a class="btn btn-outline-primary btn-sm" id="btn-volta">
                                        <span class="fa fa-tasks"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            </form>
           <!-- <?php
/*
            $sql = "SELECT * FROM postspagina pp INNER JOIN (SELECT * FROM paginas p INNER JOIN (SELECT paginas_idpaginas FROM paginascurtidas WHERE usuario_idusuario='$id') pc 
on pc.paginas_idpaginas=p.idpaginas) pag ON pp.idpaginas=pag.idpaginas";

            $link = bancoDeDados::conectaBanco();

            $resp = mysqli_query($link, $sql);

            */?>

            <div class="feed">
                --><?php
/*                    for($i=0;$i<$resp->num_rows;$i++)
                    {
                $r = $resp->fetch_assoc();

                $idu=$r['usuario_idusuario'];
                        $selecionaNomeUsuario="SELECT idusuario, nome, sobrenome, fotoPerfil, apelido FROM usuario WHERE idusuario='$idu'";
                        $r1=mysqli_query($link, $selecionaNomeUsuario);
                        $nomeU=$r1->fetch_assoc();
                */?>

                        <div class="feed-da-pagina">
                            <div class="card gedf-card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                <img class="rounded-circle" width="55" src="<?php //echo "fotosPerfil/".$nomeU['fotoPerfil'] ?>" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <a class="h5 m-0" href="PerfilUsuarioVisualizacao.php?ida=<?php //echo $nomeU['idusuario'] ?>"><?php //if($nomeU['apelido']!= null) echo $nomeU['apelido'] ?></a>
                                                <div class="h7 text-muted"><?php //echo $nomeU['nome']." ".$nomeU['sobrenome'] ?></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                    <div class="h6 dropdown-header">Configuração</div>
                                                    <a class="dropdown-item" href="#">Denunciar</a>
                                                    <a class="dropdown-item" href="#">Apagar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min atrás</div>
                                    <a class="card-link" href="PaginaGrupoPerfil.php?idpag=<?php// echo $r['idpaginas']?>">
                                        <h5 class="card-title"><?php //echo $r['nome'] ?></h5>
                                    </a>


                                    <p class="card-text">
                                        <?php //echo $r['texto'] ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="card-link"><i class="fa fa-gittip"></i> <?php //echo $r['curtidas'] ?> Curtidas</a>
                                    <a href="#replyOne" class="card-link" data-toggle="collapse"><i class="fa fa-comment"></i> 20 comentários</a>
                                    <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartilhar</a>

                                    <div class="collapse" id="replyOne">
                                        <ul class="media-list">
                                            <li class="media media-replied">
                                                <a class="pull-left" href="#">
                                                    <img class="img-comentario rounded-circle" width="45" src="https://pbs.twimg.com/profile_images/509460244263497728/I7J3uwub_400x400.png" alt="">
                                                </a>
                                                <div class="card-comentarios">
                                                    <div class="media-body">

                                                        <a href="#"> <h7 class="media-heading reviews"><span class="fa fa-mail-forward"></span> Cely sastre</h7></a>
                                                        <p class="media-comment text-muted ml-2">
                                                            Comentáriosssssss
                                                        </p>

                                                        <a href="#" class="card-link-comentario"><i class="fa fa-gittip"></i> 2 Curtidas</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                <?php //} ?>








            </div>
        </div>
        <div class="col-3">
            <div class="raking">
                <div class="card">
                    <div class="card-head">
                        <img class="img-raking" src="fotos/chevron.png">
                        <p class="raking-position">Rankings</p>
                        <hr>
                    </div>
                    <div class="card-body">
                        <a class="pull-left" href="#">
                            <img class="img-feed-raking"
                                 src="https://66.media.tumblr.com/3099855a6e9c016f4568420c9f57303e/tumblr_inline_o4mcz1ZY4e1rhc5v0_500.gif"
                                 width="35" height="35" alt="Avatar">
                        </a>
                        <a class="nome-raking" href="#"></a>
                        <p class="pontos">30000 pts </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pagina-inicial.js')}}"></script>
</html>