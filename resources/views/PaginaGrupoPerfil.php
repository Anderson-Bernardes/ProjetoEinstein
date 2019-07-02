<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nome da Pagina</title>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/barra-esquerda.css">
    <link rel="stylesheet" type="text/css" href="css/barra-direita.css">
    <link rel="stylesheet" type="text/css" href="css/feed.css">

    <?php
    session_start();
    // PHP para resgatar do banco os dados do usuario
    if (isset($_SESSION['idUsuario'])) {

        include 'bancoDeDados.php';
        $link = bancoDeDados::conectaBanco();
        $id = $_SESSION['idUsuario'];
        $consulta = "SELECT * FROM usuario WHERE idusuario='$id'";

        $result = mysqli_query($link, $consulta);
        //echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        $dados = mysqli_fetch_array($result);
        mysqli_close($link);
    }
    ?>

</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light border border-dark"
         style="background-color: #FFFFFF">
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
                            <a class="dropdown-item" href="paginaConfig.php">Configurações</a>
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
        <div class="col-3">
            <div class="view-account">
                <section class="module">
                    <div class="module-inner">
                        <div class="side-bar">
                            <div class="card">
                                <div class="user-info">
                                    <img class="img-profile center-block"
                                         src="<?php echo "fotosPerfil/".$dados['fotoPerfil'] ?>"
                                         alt="">
                                    <ul class="meta list list-unstyled">
                                        <li class="name"> <a href="#"><?php echo $dados['nome'] . " " . $dados['sobrenome']; ?></a> 
                                        </li>
                                        <li class="aluno"><?php echo $dados['tipo'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <nav class="side-menu">
                                    <ul class="nav">
                                        <li><a href="PerfilUsuario.php"><span class="fa fa-user"></span> Perfil</a></li>
                                        <li><a href="paginaConfig.php"><span class="fa fa-cog"></span> Configurações</a>
                                        </li>
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
        <div class="col-6">
                    <div class="perfil-pagina-estudos">
                                    <div class="card hovercard">
                                            <div class="cardheader">     
                                                  <!-- ta no css -->                
                                            </div>
                                            <div class="avatar">
                                                <img alt="" src="http://atividadesprofessores.com.br/wp-content/uploads/2016/11/corujinha-azul-03-918x1024.png">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <a>Matemática</a>
                                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </div>
                                                <div class="desc">Página de matemática dos administradores</div>
                                            </div>
                                            <div class="card-footer">
                                                    <a href="#" id="EsconderBotao" class="btn btn-primary btn-sm btn-custom">Seguindo</a>
                                                    <a href="#" id="MostrarBotao" style="display:none" class="btn btn-primary btn-sm btn-custom">Seguir</a>
                                            </div>     
                                    </div>                 
                    </div>
                    <hr>
                    <div class="caixa-ferramenta">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <textarea class="form-control" id="texto"
                                                  placeholder="Escreva sua duvida aqui (para opter uma boa resposta, descreva sua duvida de forma simples e clara)."
                                                  rows="4" id="comment"></textarea>
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
                                                        <p>Você pode enviar arquivos JPG, ou PNG (tamanho máximo sugerido de 10 MB). Não envie fotos que fujam da proposta do site</p>
                                                        <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <span class="btn btn-default btn-file">
                                                                            <input type="file" id="imgInp">
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <img id='img-upload'/>
                                                            </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Cancelar</button>
                                                  <button type="button" class="btn btn-outline-primary btn-sm">Salvar</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>



                                    <div class="botao-direita" id="ocutarBotao1">
                                        <button type="button" class="btn btn-outline-primary btn-sm">Enviar</button>
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
                                                <button type="submit" class="btn btn-outline-primary btn-sm">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                   <div class="feed-da-pagina">
                            <div class="card gedf-card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="mr-2">
                                                    <img class="rounded-circle" width="55" src="https://66.media.tumblr.com/5c3c50155a929f53ceb83d19403f2d29/tumblr_oxto3ue1wh1w7qgoro6_400.png" alt="">
                                                </div>
                                                <div class="ml-2">
                                                    <a class="h5 m-0" href="#">@Ricky3dimensoes</a>
                                                    <div class="h7 text-muted">Rick Sanchez</div>
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
                                        <a class="card-link" href="#">
                                            <h5 class="card-title">Matemática</h5>
                                        </a>
                                        <p class="card-text">
                                        uma área da cidade onde a absorção de raios é de 1,2 metros quadrados, e um iate com motor que se move a energia solar produz 400 watts a cada hora. Mas, se conseguíssemos aumentar a área para 1,5 metros quadrados, qual seria a medida de energia a ser produzida?
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> 2 Curtidas</a>
                                        <a href="#replyOne" class="card-link" data-toggle="collapse"><i class="fa fa-comment"></i> 1 comentários</a>
                                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartilhar</a>
                                        
                                        <div class="collapse" id="replyOne">
                                            <ul class="media-list">
                                                <li class="media media-replied">
                                                    <a class="pull-left" href="#">
                                                        <img class="img-comentario rounded-circle" width="45" src="https://66.media.tumblr.com/e172167d16664b83f5de3da65e8c498b/tumblr_oz80flBf7A1t4osjeo1_400.png" alt="">
                                                    </a>
                                                    <div class="card-comentarios">
                                                            <div class="media-body">
                                                                
                                                                    <a href="#" h7 class="media-heading reviews"><span class="fa fa-mail-forward"></span> @MortySanchez</a>

                                                                    
                                                                    <p class="media-comment text-muted ml-2">
                                                                    Área (em m²) Energia (em Wh)
                                                                            Agora, temos a equação:
                                                                            1,2 = 400
                                                                            1,5 x

                                                                            Multiplicamos 1,2 por x e 400 por 1,5
                                                                            Assim, 1,2x-1, 5x400
                                                                            X=1,5. 400 dividido por 1,2, resultando em 500.
                                                                    </p>
                                                                    <div class="card-footer text-muted">
                                                                        <div class="input-group input-group-sm">
                                                                            <input type="text" class="form-control" placeholder="Comente aqui :)">
                                                                            <a class="btn btn-outline-primary btn-sm" id="btn-coment">
                                                                                <span class="fa fa-edit"></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>                                                                       
                                                            </div>

                                                    </div>
                                                    
                                                </li>
                                               
                                            </ul>  
                                        </div>

                                        

                                        
                                    </div> 
                                </div>
                    </div>
                
           

                
            
        </div>
        <div class="col-3">
            <div class="raking">
                <div class="card">
                    <div class="card-head">
                            <div class="ml-3">
                                    <div class="h6">Matemática</div>                                    
                            </div>
                            <div class="ml-3">
                                    <div class="h7 text-muted">Criado por: admnistradores</div>
                            </div>
                    </div>
                    <hr>
                    <div class="card-body">
                    <div class="regular">
                             <div class="h6 text-muted">Curtidas</div>
                              <a data-toggle="modal" data-target="#ChamaSeguidores" href="#" class="h5">5.2342</a>
                    </div>
                        <hr>
                        <div class="h6 text-muted">Curtidas</div>
                        <div class="h5">6758</div>

                         <div class="modal fade" id="ChamaSeguidores" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5>Seguidores</h5>
                                    </div>
                                    <div class="modal-body">
                                            <div class="lista-de-amigos">
                                                    <div class="list-group">
                                                            <div class="list-group-item clearfix">
                                                                <div class="profile-teaser-left">
                                                                        <a class="pull" href="#">
                                                                    <div class="feedprofile-img"><img src="https://66.media.tumblr.com/cf5b4ec80ba7fec579ca588dd31bf9e2/tumblr_pexacmpdtI1u8g75c_540.jpg"/></div>
                                                                </div>
                                                                <div class="profile-teaser-main">
                                                                    <a href="#" h6 class="profile-name">Mulher gavião</h6></a>
                                                                    <div class="profile-info">
                                                                        <div class="info">Aluno(a)</div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- item -->
                                                            <div class="list-group-item clearfix">
                                                                <div class="profile-teaser-left">
                                                                        <a class="pull" href="#">
                                                                    <div class="feedprofile-img"><img src="https://66.media.tumblr.com/5ebe6276589bd7ea65752f7b31fe5486/tumblr_phzixloInE1wpot85o6_250.png"/></div>
                                                                </div>
                                                                <div class="profile-teaser-main">
                                                                    <a href="#" h6 class="profile-name">Sam</h6></a>
                                                                    <div class="profile-info">
                                                                        <div class="info">Aluno(a)</div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- item -->
                                                            <div class="list-group-item clearfix">
                                                                <div class="profile-teaser-left">
                                                                        <a class="pull" href="#">
                                                                    <div class="feedprofile-img"><img src="https://66.media.tumblr.com/7f7ba53354812b2ebe0739f921c4e3da/tumblr_pg39qoQg831x3ov88o4_250.png"/></div>
                                                                </div>
                                                                <div class="profile-teaser-main">
                                                                    <a href="#" h6 class="profile-name">Lidinha</h6></a>
                                                                    <div class="profile-info">
                                                                        <div class="info">Aluno(a)</div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- item -->
                                                    </div>                 
                                            </div>
                                            
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Cancelar</button>
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
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/pagina-inicial.js"></script>

<script type="text/javascript">
    
    $(function(){  
     $("#EsconderBotao").hover(
         function(){ $(this).addClass('btn btn-danger') },
        function(){ $(this).removeClass('btn-danger ') }
     );
     });
     $(function(){  
     $("#EsconderBotao").hover(
         function(){$(this).html("Deixar de seguir")},
         function(){$(this).html("Seguindo")}
     );

     
 });

    $("#EsconderBotao").click(function() {
        $("#EsconderBotao").toggle();
        $("#MostrarBotao").show();

    });
     $("#MostrarBotao").click(function() {
        $("#MostrarBotao").toggle();
        $("#EsconderBotao").show();

        


    });

    
 
 </script>
</html>