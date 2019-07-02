<!DOCTYPE html>

<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Configurações</title>

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
                        <a class="nav-link dropdown-toggle" href="{{route('userPerfil')}}" data-toggle="dropdown"
                           id="Navdrop">
                            Perfil
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Configurações</a>
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
                                    <a class="pull" href="#"></a>

                                    @if($user->foto == 'null')
                                        <img class="img-profile center-block"
                                             src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="">
                                    @else
                                        <img class="img-profile center-block"
                                             src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                                    @endif

                                    <div class="custom-file-upload">
                                        <a class="custom-file-upload" data-toggle="modal" data-target="#MdalFoto"
                                           href="#">
                                            <i class="fa fa-cloud-upload"></i> Adicionar foto
                                        </a>
                                    </div>

                                    <!-- Chama o modal -->

                                    <div class="modal fade" id="MdalFoto" tabindex="-1" role="dialog"
                                         aria-labelledby="MdalFoto" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Upload de
                                                        foto</h5>
                                                    <button type="submit" class="close" data-dismiss="modal"
                                                            aria-label="Close" name="enviar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{route('updateFotoUser')}}" method="post" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                                                <div class="modal-body">
                                                    <p>Você pode enviar arquivos JPG ou PNG (tamanho máximo
                                                        sugerido de 1 MB). Não envie fotos que contenham
                                                        nudez,trabalho artístico ou material protegido por direitos
                                                        autorais.</p>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="file"  name="foto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-primary btn-sm">Enviar
                                                    </button>
                                                </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>


                                    <hr>
                                    <ul class="meta list list-unstyled">
                                        <li class="name">{{$user->name.' '}}{{$user->sobrenome}}</li>
                                        <li class="email"><a href="#"><?php  ?></a></li>
                                    </ul>
                                </div>
                                <nav class="side-menu">
                                    <ul class="nav">
                                        <li><a href="{{route('userPerfil')}}"><span class="fa fa-user"></span>
                                                Perfil</a></li>
                                        <li class="active"><a href="#"><span class="fa fa-cog"></span>Configurações</a>
                                        </li>
                                        <li><a href="#"><span class="fa fa-envelope"></span> Menssagem</a></li>
                                        <li><a href="{{route('amigos')}}"><span class="fa fa-users"></span> Amigos</a></li>
                                        <li><a href="{{route('grupos')}}"><span class="fa fa-flag"></span> Grupos De Estudo</a></li>
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
                            <div class="card-body">

                                <div class="personal-info">
                                    <div class="alert alert-info alert-dismissable">
                                        <a class="panel-close close" data-dismiss="alert">×</a>
                                        <i class="fa fa-coffee"></i>
                                        Este é um <strong>.alert</strong>. não esqueça de preencher os campos vázios.
                                    </div>
                                    <h5 class="mx-sm-5">Informações gerais</h5>


                                    <form action="{{route('updateDadosUser')}}" method="post" class="form-horizontal"
                                          role="form">
                                        {{csrf_field()}}
                                        <div class="form-group  mx-sm-5">
                                            <label class="control-label">Nome:</label>
                                            <input class="form-control form-control-sm" type="text" name="nome"
                                                   value="{{$user->name}}">
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label">Sobrenome:</label>
                                            <input class="form-control form-control-sm" type="text" name="sobrenome"
                                                   placeholder="Sobrenome" value="{{$user->sobrenome}}">
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label">User:</label>
                                            <input type="text" name="user" class="form-control form-control-sm"
                                                   id="inlineFormInputGroupUsername" placeholder="Apelido"
                                                   value="{{$user->username}}">
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label">Sexo:</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="sexo"
                                                       class="custom-control-input" value="F"
                                                @if($user->sexo=='F')
                                                    checked
                                                        @endif
                                                >
                                                <label class="custom-control-label ml-3" for="customRadioInline1">Feminino</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="sexo"
                                                       class="custom-control-input" value="M"
                                                       @if($user->sexo=='M')
                                                       checked
                                                        @endif
                                                >
                                                <label class="custom-control-label"
                                                       for="customRadioInline2">Masculino</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" name="sexo"
                                                       class="custom-control-input" value="NE"
                                                       @if($user->sexo=='NE')
                                                       checked
                                                        @endif
                                                >
                                                <label class="custom-control-label" for="customRadioInline3">Não
                                                    especificar</label>
                                            </div>
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label for="uf" class="control-label">Data de nascimento:</label>
                                            <div class="nas">
                                                <select class="form-control form-control-sm " name="mes-nasc" id="mes-nasc">
                                                    <option value="1">janeiro</option>
                                                    <option value="2">fevereiro</option>
                                                    <option value="3">março</option>
                                                    <option value="4">abril</option>
                                                    <option value="5">maio</option>
                                                    <option value="6">junho</option>
                                                    <option value="7">julho</option>
                                                    <option value="8">agosto</option>
                                                    <option value="9">setembro</option>
                                                    <option value="10">outubro</option>
                                                    <option value="11">novembro</option>
                                                    <option value="12">dezembro</option>
                                                </select>
                                            </div>

                                            <div class="dia-nasc">
                                                <select class="form-control form-control-sm" name="dia-nasc" id="nasc">
                                                    @for($i=1; $i<=30; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mx-sm-5">
                                            <label for="uf" class="control-label">Ano do nascimento:</label>
                                            <div class="ano">
                                                <select class="form-control form-control-sm" name="ano-nasc" id="nasc">
                                                    @for($j=2019; $j>=1970; $j--)
                                                        <option value="{{$j}}">{{$j}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mx-sm-5">
                                            <label for="uf" class="control-label">UF</label>
                                            <select class="form-control form-control-sm" name="uf" id="uf">
                                                <option selected=""></option>
                                                <option value="ac">Acre</option>
                                                <option value="al">Alagoas</option>
                                                <option value="am">Amazonas</option>
                                                <option value="ap">Amapá</option>
                                                <option value="ba">Bahia</option>
                                                <option value="ce">Ceará</option>
                                                <option value="df">Distrito Federal</option>
                                                <option value="es">Espírito Santo</option>
                                                <option value="go">Goiás</option>
                                                <option value="ma">Maranhão</option>
                                                <option value="mt">Mato Grosso</option>
                                                <option value="ms">Mato Grosso do Sul</option>
                                                <option value="mg">Minas Gerais</option>
                                                <option value="pa">Pará</option>
                                                <option value="pb">Paraíba</option>
                                                <option value="pr">Paraná</option>
                                                <option value="pe">Pernambuco</option>
                                                <option value="pi">Piauí</option>
                                                <option value="rj">Rio de Janeiro</option>
                                                <option value="rn">Rio Grande do Norte</option>
                                                <option value="ro">Rondônia</option>
                                                <option value="rs">Rio Grande do Sul</option>
                                                <option value="rr">Roraima</option>
                                                <option value="sc">Santa Catarina</option>
                                                <option value="se">Sergipe</option>
                                                <option value="sp">São Paulo</option>
                                                <option value="to">Tocantins</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label">Tipo de usuário:</label>
                                            <select class="form-control form-control-sm" name="categoria">
                                                <option value="Aluno"
                                                        @if($user->categoria=='Aluno')
                                                        selected
                                                        @endif
                                                >Aluno
                                                </option>
                                                <option value="Professor"
                                                        @if($user->categoria=='Professor')
                                                        selected
                                                        @endif
                                                >
                                                    Professor(a)
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <input type="submit" name="salvar" class="btn btn-outline-primary"
                                                   value="Salvar ">
                                            <span></span>
                                            <input type="reset" class="btn btn-outline-secondary" value="Cancelar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">
                            <div class="card-body">
                                <div class="personal-info">
                                    <div class="alert alert-info alert-dismissible">
                                        <a class="panel-close close" data-dismiss="alert">×</a>
                                        <i class="fa fa-coffee"></i>
                                        Este é um <strong>.alert</strong>. não esqueça de preencher os campos vázios.
                                    </div>
                                    <h5>Escolaridade</h5>
                                    <div class="form-group mx-sm-5">
                                        <label for="uf" class="control-label">Escolha seu nivel de escolaridade:</label>
                                        <select class="form-control form-control-sm" name="esc" id="esc">
                                            <option selected=""></option>
                                            <option value="ac">Ensino médio</option>
                                            <option value="al">Faculdade</option>
                                        </select>
                                    </div>
                                    <div class="form-group mx-sm-5">
                                        <input type="submit" name="salvar" class="btn btn-outline-primary"
                                               value="Salva">
                                        <span></span>
                                        <input type="reset" class="btn btn-outline-secondary" value="Cancelar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">em andamento
                        </div>
                        <div class="tab-pane fade" id="v-pills-config" role="tabpanel"
                             aria-labelledby="v-pills-config-tab">
                            <div class="card-body">
                                <div class="personal-info">
                                    <h5 class=" mx-sm-5">Configurações</h5>
                                    <form method="post" action="salvaConfig.php?id=1" class="form-horizontal"
                                          role="form">
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label">Email:</label>
                                            <fieldset disabled>
                                                <input class="form-control form-control-sm" type="text" name="email"
                                                       value="<?php //echo $dados['email']; ?>">
                                            </fieldset>
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label">Nova senha:</label>
                                            <input class="form-control form-control-sm" type="password" name="senha"
                                                   value="">
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <td class="form-control mx-sm-5"><a data-toggle="modal" href="#myModal">Excluir
                                                    conta</a></td>
                                        </div>
                                        <div class="form-group mx-sm-5">
                                            <label class="control-label"></label>
                                            <input type="submit" name="salvar" class="btn btn-outline-primary"
                                                   value="Atualizar ">
                                            <span></span>
                                            <input type="reset" class="btn btn-outline-secondary" value="Cancelar">
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Você realmente deseja excluir sua conta?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    data-dismiss="modal">Cancelar
                                            </button>
                                            <form action="ExcluirConta.php" method="post">
                                                <button type="submit" class="btn btn-outline-primary" name="conta">Sim
                                                </button>
                                            </form>
                                        </div>
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
                           role="tab" aria-controls="v-pills-home" aria-selected="true">Editar perfil</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                           role="tab" aria-controls="v-pills-profile" aria-selected="false">Escolaridade</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                           role="tab" aria-controls="v-pills-messages" aria-selected="false">Idiomas</a>
                        <a class="nav-link" id="v-pills-config-tab" data-toggle="pill" href="#v-pills-config" role="tab"
                           aria-controls="v-pills-config" aria-selected="false">Configurações gerais</a>
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