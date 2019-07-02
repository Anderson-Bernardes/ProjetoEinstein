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

    <link rel="stylesheet" type="text/css" href="css/barra-esquerda.css">
    <link rel="stylesheet" type="text/css" href="css/barra-direita.css">
    <link rel="stylesheet" type="text/css" href="css/feed.css">

    <?php
    session_start();
    // PHP para resgatar do banco os dados do usuario
    if(isset($_SESSION['idUsuario']))
    {
        include 'bancoDeDados.php';
        $link=bancoDeDados::conectaBanco();
        $id=$_SESSION['idUsuario'];
        $consulta="SELECT * FROM usuario WHERE idusuario='$id'";

        $result=mysqli_query($link, $consulta);
        //echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        $dados=mysqli_fetch_array($result);
        //mysqli_close($link);
    }
    ?>


</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light border border-dark" style="background-color: #FFFFFF">
        <div class="container">
            <a class="navbar-brand h1 mb-1" href="PaginaInicial.php">Einstein</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            </button>
            <div class="collapse navbar-collapse" id="navBarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="PaginaInicial.php">Página Inicial</a>
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
                            <a class="dropdown-item" href="#">Configurações</a>
                            <a class="dropdown-item" href="#">Sair</a>
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

                                    <img class="img-profile center-block" src="<?php echo "fotosPerfil/".$dados['fotoPerfil'] ?> " alt="">
                                    <ul class="meta list list-unstyled">
                                        <li class="name"><?php echo $dados['nome']." ".$dados['sobrenome']; ?>
                                            <label class="label label-info">Aluno(o)</label>
                                        </li>
                                        <li class="email"><a href="#"><?php echo $dados['email']; ?></a></li>
                                    </ul>
                                </div>
                                <nav class="side-menu">
                                    <ul class="nav">
                                        <li><a href="PerfilUsuario.php"><span class="fa fa-user"></span> Perfil</a></li>
                                        <li><a href="paginaConfig.php"><span class="fa fa-cog"></span> Configurações</a></li>
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
                        <?php
                            $ida=$_GET['ida'];
                            $query="SELECT nome, sobrenome FROM usuario WHERE idusuario='$ida'";
                            $queryResult=mysqli_query($link, $query);
                            $r=$queryResult->fetch_assoc();
                        ?>
                        <h3><?php echo $r['nome']." ".$r['sobrenome'] ?></h3>
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
            </div>

        </div>
        <div class="col-md-3">
            <div class="raking">
                <div class="card">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php
                            $queryAmigos="SELECT nome, fotoPerfil FROM usuario u INNER JOIN (SELECT idusuario FROM amigos WHERE idusuario1='$ida') p 
                                                          ON u.idusuario=p.idusuario";
                            $resultado=mysqli_query($link, $queryAmigos);
                            ?>


                            <h1 class="page-header amigos">Amigos de <?php echo $r['nome']." " ?><a href="amigos.php"><?php echo "(".$resultado->num_rows.")" ?></a></h1><hr>
                        </div>

                        <div class="memberblock">
                            <?php
                            for($i=0;$i<$resultado->num_rows;$i++)
                            {
                                $amigos=$resultado->fetch_assoc();
                                ?>
                                <a href="#" class="member"> <img src="<?php echo "fotosPerfil/".$amigos["fotoPerfil"] ?>" alt="">
                                    <div class="memmbername"><?php echo $amigos['nome'] ?></div>
                                </a>
                                <?php
                            }
                            ?>
                            <!--no maximo 6 amigos no perfil + amigos no a href q vou criar uma aba e vai carregar todos-->

                        </div>

                    </div>
                </div>
            </div>
            <div class="raking">
                <div class="card">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <?php
                            $queryPaginas="SELECT * FROM paginas p INNER JOIN (SELECT paginas_idpaginas FROM paginascurtidas WHERE usuario_idusuario='$ida  ') pc 
                                                      on pc.paginas_idpaginas=p.idpaginas";
                            $retorno=mysqli_query($link, $queryPaginas);
                            ?>

                            <h1 class="page-header paginas">Grupos seguidos por <?php echo $r['nome']." " ?><a href="Paginas.php"><?php echo "(".$retorno->num_rows.")" ?></a></h1><hr>
                        </div>
                        <div class="memberblock">
                            <?php
                            for($i=0;$i<$retorno->num_rows;$i++) {
                                $paginas=$retorno->fetch_assoc();
                                ?>
                                <a href="#" class="member"> <img
                                        src="<?php echo "FotosPagina/".$paginas['foto'] ?>"
                                        alt="">
                                    <div class="memmbername"><?php echo $paginas['nome'] ?> </div>
                                </a>
                                <?php
                            }
                            ?>
                            <!--igualmente para páginas -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/pagina-inicial.js"></script>

</div>
</body>


</html>