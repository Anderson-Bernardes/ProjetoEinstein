<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/homee.css">


    <link rel="stylesheet" type="text/css" href="css/paginaConfig.css">
    <link rel="stylesheet" type="text/css" href="css/editar-usuario.css">


    <title>Einstein</title>
</head>
<body id="body" style="background-color:rgb(233,235,238);">
<header>
    <nav class="navbar navbar-icon-top navbar-expand-xl" style="background-color: rgb(90, 84, 173);">
        <div class="container">
            <a class="navbar-brand  mx-1" href="{{route('home')}}" style="color: rgb(255, 255, 255); font-weight: bold;">Einstein</a>
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
                            <i class="fa fa-user" style="color: rgb(255, 255, 255);">
                                <span class="badge badge-danger">3</span>
                            </i>

                        </a>
                        <!-- <a class="nav-link" href="{{route('userPerfil')}}">
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
                        </a> -->
                    </li> 

                </ul>

            </div>

        </div>
    </nav>
</header>


<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card card-atualziar-foto">
                <div class="avatar">
                    <!--<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avt img-thumbnail " alt="">-->
                    @if($user->foto == 'null')
                        <img class="avt img-thumbnail"
                             src="{{url('storage/FotoPerfil/defaultPerfil.jpg')}}" alt="" >
                    @else
                        <img class="avt img-thumbnail"
                             src="{{url('storage/FotoPerfil/'.$user->foto)}}" alt="">
                    @endif
                </div>

                <form action="{{route('updateFotoUser')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="custom-input-file">
                    <label class="uploadPhoto">
                        <spam style="font-size: 30px"><i class="fas fa-camera "></i></spam>
                        <input type="file" class="change-avatar file-upload" name="foto" id="avatar">
                    </label>
                </div>
                    <p class="mt-2">Atualize sua foto de perfil</p>
                    <div class="botao" style="text-align: center;">
                        <button type="submit" class="btn btn-default mb-2">Atualizar</button>
                    </div>
                </form>
            </div>
            <form action="{{route('updateDadosUser')}}" method="post">
                {{csrf_field()}}
                <div class="card cardinfo">
                <div class="info">
                    <p class="mt-2" style="text-align: center;">Editar perfil</p>
                    <input name="nome" class="form-control form-control mt-2" type="text" placeholder="Nome" value="{{$user->name}}">
                    <input name="user" class="form-control form-control mt-2" type="text" placeholder="@Apelido" value="{{$user->username}}">
                   {{-- <select class="custom-select mt-2" id="inlineFormCustomSelectPref">
                        <option selected value="1">Estudante</option>
                        <option value="2">Professor</option>
                    </select>--}}
                    <select class="custom-select mt-2" id="inlineFormCustomSelectPref" name="categoria">
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
                    <div class="panel-group mt-3" style="text-align: center;">
                        <a data-toggle="collapse" href="#collapse1" style="text-decoration: none;">Aniversário</a>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body mt-2">
                                <div class="form-row">
                                    <div class="col-6">
                                        <select class="custom-select" id="inlineFormCustomSelect">
                                            <option selected>Dia</option>
                                            @for($i=1; $i<=31; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select class="custom-select" id="inlineFormCustomSelect">
                                            <option selected>Ano</option>
                                            @for($j=2019; $j>=1970; $j--)
                                                <option value="{{$j}}">{{$j}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form mes mt-2">
                                    <select class="custom-select" id="inlineFormCustomSelect">
                                        <option selected>Mês</option>
                                        <option value="01">Janeiro</option>
                                        <option value="02">Fevereiro</option>
                                        <option value="03">Março</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Maio</option>
                                        <option value="06">Junho</option>
                                        <option value="07">Julho</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Setembro</option>
                                        <option value="10">Outubro</option>
                                        <option value="11">Novembro</option>
                                        <option value="12">Dezembro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="botao">
                        <button type="submit" class="btn btn-default mt-4">Salvar</button>
                    </div>

                </div>


            </div>

            </form>
        </div>


        <div class="col-9">
            <div class="card editarperfil">
                <form method="POST" action="{{route('updateDadosUser') }}">
                    {{csrf_field()}}

                    <strong class="mt-3"><p>Dados pessoais</p></strong>
                <form>
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="disabledTextInput">E-mail:</label>
                            <input type="text" id="disabledTextInput" class="form-control"
                                    value="{{$user->email}}">
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Sexo:</label>
                        <select class="custom-select" id="sexo" name="sexo">
                            <!--<option value="nd"></option>-->
                            <option value="NE" selected>Não identificar</option>
                            <option value="F"
                            @if($user->sexo=='F')
                                selected
                                @endif
                            >Feminino</option>
                            <option value="M"
                            @if($user->sexo == 'M')
                                selected
                                @endif
                                >Masculino</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Estado:</label>
                        <select class="custom-select" id="uf" name="uf">
                            <option value="nd"></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="c">Você está estudando para:</label>
                        <select class="custom-select" id="c">
                            <option value="nd"></option>
                            <option value="nd">Concurso publico</option>
                            <option value="AC">Ensino médio</option>
                            <option value="AC">Ensino fundamental</option>
                            <option value="AC">ENEM</option>
                        </select>
                    </div>
                </form>
                <div class="botao">
                    <button type="submit"  class="btn btn-default mt-4 mb-4">Salvar</button>
                </div>
                </form>

            </div>
            <div class="card excluirperfil">
                    <strong class="mt-3"><p>Conta</p></strong>
                <div class="form-group">

                    <label for="inputPassword5">Nova senha:</label>
                    <input type="password" id="inputPassword5" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                           aria-describedby="passwordHelpBlock">


                    <small id="passwordHelpBlock" class="form-text text-muted">
                        sua senha tem que possuir de 8-12 caracteres, contendo letras ou números, sem espaço ou
                        caracteres especiais.
                    </small>
                    <label for="inputPassword5" class="mt-2">Digite a senha novamente:</label>
                    <input type="password" id="inputPassword5" class="form-control"
                           aria-describedby="passwordHelpBlock" name="password_confirmation" required>
                    <small id="passwordHelpBlock" class="form-text text-muted"></small>
                    <hr>
                    <a href="" class="mt-4" style="text-align: center;"><p>Excluir conta</p></a>

                </div>
                <div class="botao">
                    <button type="submit" class="btn btn-default mt-4 mb-4">Salvar</button>
                </div>
            </div>
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


<script type="text/javascript">
    $(document).ready(function () {
        var readURL = function (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.avt').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        };
        $(".file-upload").on('change', function () {
            readURL(this);
        });
    });
</script>
</html>
