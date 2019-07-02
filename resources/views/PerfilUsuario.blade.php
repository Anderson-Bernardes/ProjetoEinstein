<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>Perfil</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/barra-esquerda.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/barra-direita.css')}}" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/feed.css')}}">
</head>
<body>
        <header>
                <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light border border-dark" style="background-color: #FFFFFF">
                    <div class="container">
                        <a class="navbar-brand h1 mb-1" href="{{route('home')}}">Einstein</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        </button>
                        <div class="collapse navbar-collapse" id="navBarSite">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{route('home')}}">Página Inicial</a>
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
                                        <a class="dropdown-item" href="{{route('config')}}>Configurações</a>

                                        <a href="{{route('logout')}}">Sair</a>
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
                                        <li class="name"> <a href="#">{{$user->name}}</a>
                                        </li>
                                        <li class="aluno">
                                        </li>
                                    </ul>
                                    </div>
                                    <nav class="side-menu">
                                        <ul class="nav">
                                            <li class="active"><a href="#"><span class="fa fa-user"></span> Perfil</a></li>
                                            <li><a href="configuracoes"><span class="fa fa-cog"></span> Configurações</a></li>
                                            <li><a href="#"><span class="fa fa-envelope"></span> Menssagem</a></li>
                                            <li><a href="amigos.php"><span class="fa fa-users"></span> Amigos</a></li>
                                            <li><a href="Paginas.php"><span class="fa fa-flag"></span> Páginas</a></li>
                                            <li><a href="#"><span class="fa fa-graduation-cap"></span> Material</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>
                
                        </div>
                <div class="col-md-6">
                    <div class="perfil-pagina-estudos">
                        <div class="card">
                            <div class="nome-do-usuario">
                                    <h3><?php  ?></h3>
                                    <P class="small status">Iniciante</P>
                                    <p><strong>Idade: </strong> 22 </p>
                                    <p><strong>Escolaridade: </strong> Ensino médio</p>
                                    <p><strong>Emblemas: </strong>
                                        <span class="emblemas">Iniciante</span> 
                                        <span class="emblemas">Aisten</span>
                                        <span class="emblemas">Professor</span>
                                        <span class="emblemas">RespondeTudo</span> <!-- no maximo 4 emblemas por perfil -emblemas + recentes -->
                                        </p>
                            </div>
                                <div class="avaliacao">
                                    <figure>
                                        <figcaption class="ratings text-right text-top">
                                            <p>Avaliações
                                            <a href="#">
                                                <span class="fa fa-star"></span>  <!-- estrela pintada exemplo -->
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star-o"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star-o"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star-o"></span>
                                            </a>
                                            <a href="#">
                                                 <span class="fa fa-star-o"></span> <!-- estrela sem pintar! a metida que o usuario vai adquirindo pontos as estrelas vao pintando -->
                                            </a> 
                                            </p>
                                        </figcaption>
                                    </figure> 
                                    </div>
                                    <hr>
                    </div>
                        <div class="feed">

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
                                        <a class="card-link" href="PaginaGrupoPerfil.php?idpag=<?php //echo $r['idpaginas']?>">
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

                                                            <a href="#"> <h6 class="media-heading reviews"><span class="fa fa-mail-forward"></span> Cely sastre</h6></a>
                                                            <p class="media-comment text-muted ml-2">
                                                                Comentáriosssssss
                                                            </p>

                                                            <a href="#" class="card-link-comentario"><i class="fa fa-gittip"></i> 2 Curtidas</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapse" id="replyOne">
                                            <ul class="media-list">
                                                <li class="media media-replied">
                                                    <a class="pull-left" href="#">
                                                        <img class="img-comentario rounded-circle" width="45" src="https://pbs.twimg.com/profile_images/509460244263497728/I7J3uwub_400x400.png" alt="">
                                                    </a>
                                                    <div class="card-comentarios">
                                                        <div class="media-body">

                                                            <a href="#"> <h6 class="media-heading reviews"><span class="fa fa-mail-forward"></span> Cely sastre</h6></a>
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

                        </div>
                </div>

               </div>

               <div class="col-md-3">
                <div class="raking">
                    <div class="card">
                            <div class="panel panel-default">
                                    <div class="panel-heading">

                                      <h1 class="page-header amigos">Amigos  <a href="amigos.php"><?php //echo "(".$resultado->num_rows.")" ?></a></h1><hr>
                                    </div>

                                      <div class="memberblock">

                                              <a href="PerfilUsuarioVisualizacao.php?ida=<?php //echo $amigos['idusuario'] ?>" class="member"> <img src="<?php //echo "fotosPerfil/".$amigos["fotoPerfil"] ?>" alt="">
                                        <div class="memmbername"><?php //echo $amigos['nome'] ?></div>
                                        </a>

                                        <!--no maximo 6 amigos no perfil + amigos no a href q vou criar uma aba e vai carregar todos-->
                                  </div>
                    </div>
                </div>
               </div>
                <div class="raking">
                    <div class="card">
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h1 class="page-header paginas">Grupos seguidos <a href="Paginas.php"><?php //echo "(".$retorno->num_rows.")" ?></a></h1><hr>
                                    </div>
                                      <div class="memberblock">

                                                <a href="PaginaGrupoPerfil.php?idpag=<?php //echo $paginas['idpaginas'] ?>" class="member"> <img
                                                            src="<?php //echo "FotosPagina/".$paginas['foto'] ?>"
                                                            alt="">
                                                    <div class="memmbername"><?php //echo $paginas['nome'] ?> </div>
                                                </a>
                                     <!--igualmente para páginas -->
                                      </div>
                    </div>
                </div>
               </div>
            </div>
            </div>
                    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
                    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
            <script type="text/javascript" src="/resources/js/pagina-inicial.js"></script>
                    <script type="text/javascript" src="{{asset('js/pagina-inicial.js')}}"></script>
</div>
</body>
</html>