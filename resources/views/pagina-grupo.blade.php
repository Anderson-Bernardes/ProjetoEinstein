<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/pagina-grupo.css"> -->
    <link rel="stylesheet" type="text/css" href="css/pagina-grupo-2.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">




    <title>Perfil Grupo</title>
</head>
<body id="body" style="background-color:rgb(233,235,238);">
  <header>
    <nav class="navbar navbar-icon-top navbar-expand-xl" style="background-color: rgb(90, 84, 173);">
            <div class="container">
        <a class="navbar-brand  mx-1" href="{{route('home')}}" style="color: rgb(255, 255, 255); font-weight: bold;">Einstein</a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="margin-left: 20px;">
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Search" style="padding-left: 18px; border-radius: 40px; min-width:480px;" id="mysearch">
                  <div class="input-group-addon" style="margin-left: -38px; z-index: 3; border-radius: 40px; background-color: transparent; border:none;">
                    <button class="btn btn-light btn-sm" type="submit" style="border-radius: 20px;" id="search-btn"><i class="fa fa-search"></i></button>
                  </div>
                    </form>
          </ul>
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-envelope" style="color: rgb(255, 255, 255);">
                  <span class="badge badge-danger" >1</span>
                </i>

              </a>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item dropdown">
                        
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-user" style="color: rgb(255, 255, 255);">
                                <span class="badge badge-danger"></span>
                            </i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route("config")}}">Editar perfil</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Sair</a>
                            </div>
                        
                    </li>
                <!-- <li class="nav-item">

                  <a class="nav-link" href="#">
                    <i class="fa fa-user"  style="color: rgb(255, 255, 255);">
                      <span class="badge badge-danger" >3</span>
                    </i>

                  </a>
                  <a class="nav-link" href="#">
                      <img src="https://scontent.fpoo3-1.fna.fbcdn.net/v/t1.0-9/14517422_945412785570713_2191894243524876629_n.jpg?_nc_cat=109&_nc_ht=scontent.fpoo3-1.fna&oh=9a20577dddaca6b6a1507978493fbbe2&oe=5D70C21D" id="image" alt="">
                  </a>
              </li> -->

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
                                                 <div class="foto-grupo">

                                                        <img src="http://atividadesprofessores.com.br/wp-content/uploads/2016/11/corujinha-azul-03-918x1024.png" id="img-grupo" alt="...">


                                            </div>
                                        </div>
                                    </div>
                            </div>

                        <div class="avatar-feed">
                                        <div class="nome-da-pagina">
                                                <h5><strong>Matemática </strong></h5>
                                                <a href=""><p class="card-text"><small class="text-muted">@Einstein <i class="fas fa-check-circle" id="check-original"></i></small></p></a>
                                        </div>
                                        <div class="info-grupo">
                                            <div class="card card-informacoes">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                      <a class="nav-link active" href="pagina-grupo.blade.php"><p class="text-muted">Publicações 2.364</p>
                                                      </a>
                                                    </li>
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="{{route('grupoSeguidores')}}"><p class="text-muted">Seguidores 263 </p></a>
                                                    </li>
                                                    <li class="nav-item" id="lista">
                                                      <a class="nav-link" href="#"><p class="text-muted">Listas 9</p></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#"><p class="text-muted">Avaliações 4,2 <i class="fas fa-star"></i></p></a>
                                                      </li>
                                                    <div class="botao-de-seguir">
                                                            <a href="#" id="EsconderBotao" class="btn btn-secondary btn-sm btn-custom">Seguindo</a>
                                                            <a href="#" id="MostrarBotao" style="display:none" class="btn btn-secondary btn-sm btn-custom">Seguir</a>
                                                    </div>

                                                  </ul>






                                            </div>
                                        </div>



                        </div>


                        <div class="feed-de-grupo">

                          <div class="row">
                            <div class="col-12">
                                <div class="card-feed">
                                        <div class="row">
                                            <div class="col-6">

                                                  <div class="card cardpost">
                                                    <div class="foto-usuario-grupo">
                                                     <img src="https://66.media.tumblr.com/072ed1e88093445cf9bce1ce7eda5051/tumblr_pdofwwp1vx1xwj3nzo1_500.jpg" id="img-feed-grupo" alt="...">
                                                          <a href=""><p>@CelySastre</p></a>
                                                          <div class="opcoes"><a href=""><h3>...</h3></a></div>
                                                   </div>


                                                   <div class="publicacao-feed-foto">

                                                     <div class="card card-texto-foto">
                                                       <div class="texto-ao-lado">
                                                          <a href="">
                                                              <img src="https://image.slidesharecdn.com/listadeexercicios-vetoresmatrizesregistrosesub-algoritmos-131215224338-phpapp02/95/lista-de-exercicios-vetores-matrizes-registros-e-subalgoritmos-1-638.jpg?cb=1387147559" id="foto-exercico" alt="...">
                                                            </a>
                                                              <h6>Lista o de matemática IFsulDeMinas</h6>
                                                       </div>
                                                     </div>
                                                     <div class="tags">
                                                        <a href=""><p>#Matemática </a>
                                                        <a href=""><p>#Exercicio </a>
                                                        <a href=""><p>#Matemática </a>
                                                        <a href=""><p>#Exercicio </a>
                                                        <a href=""><p>#Exercicio </a>
                                                     </div>
                                                   </div>
                                                   <hr>
                                                   <div class="foster">
                                                      <a><p><i class="far fa-thumbs-up  ml-1 "  ></i> 145 </p></a>

                                                        <div class="foster-resolver">
                                                        <a href="" id="direito"><i class="fas fa-feather-alt"></i> resolver </a>

                                                        </div>

                                                        <div class="status">
                                                          <h5>   <i class="far fa-question-circle"></i></h5>
                                                        </div>


                                                   </div>

                                          </div>








                                        </div>
                                            <div class="col-6">
                                                <div class="card cardpost">
                                                    <div class="foto-usuario-grupo">
                                                     <img src="https://66.media.tumblr.com/1014660c32a3bbee4ab168136e6ac17b/f23b757ae3470152-a6/s250x400/c007d745ae83afb166b973de2ee22a24df67d51e.png" id="img-feed-grupo" alt="...">
                                                          <a href=""><p>@CelySastre</p></a>
                                                          <div class="opcoes"><a href=""><h3>...</h3></a></div>
                                                   </div>


                                                   <div class="publicacao-feed-foto">

                                                     <div class="card card-texto-foto">
                                                       <div class="texto-ao-lado">
                                                          <a href="">
                                                              <img src="https://image.slidesharecdn.com/listadeexercicios-vetoresmatrizesregistrosesub-algoritmos-131215224338-phpapp02/95/lista-de-exercicios-vetores-matrizes-registros-e-subalgoritmos-1-638.jpg?cb=1387147559" id="foto-exercico" alt="...">
                                                            </a>
                                                              <h6>Lista o de matemática IFsulDeMinas</h6>
                                                       </div>


                                                     </div>


                                                     <div class="tags">
                                                        <a href=""><p>#Matemática </a>
                                                        <a href=""><p>#Exercicio </a>
                                                        <a href=""><p>#Matemática </a>
                                                        <a href=""><p>#Exercicio </a>
                                                        <a href=""><p>#Exercicio </a>
                                                     </div>
                                                   </div>
                                                   <hr>
                                                   <div class="foster">
                                                      <a><p><i class="far fa-thumbs-up  ml-1 "  ></i> 145 </p></a>

                                                        <div class="foster-resolver">
                                                        <a href="" id="direito"><i class="fas fa-feather-alt"></i> resolver </a>

                                                        </div>

                                                        <div class="status">
                                                          <h5>   <i class="far fa-question-circle"></i></h5>
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

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
