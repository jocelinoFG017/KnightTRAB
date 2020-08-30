<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <!-- Import jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $(".sidenav").sidenav();
            });
        </script>
    </head>

    <body>
        <nav class="nav-extended black">
            <div class="nav-wrapper">
                <a href="<?=base_url('home')?>" class="brand-logo center">Saint Seiya: Knights of the Zodiac</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>

            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="<?=base_url('saint')?>">Personagens</a></li>
                    <li class="tab"><a class="active" href="<?=base_url('saint/formulario')?>">Cadastro</a></li>
                     <li class="tab"><a class="active" href="<?=base_url('saint/sobre')?>">Sobre</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?=base_url('saint')?>">Personagens</a></li>
            <li class="tab"><a class="active" href="<?=base_url('saint/formulario')?>">Cadastro</a></li>
            <li class="tab"><a class="active" href="<?=base_url('saint/sobre')?>">Sobre</a></li>
            <img src="<?=base_url('images/uni.jpg')?>" style="width: 100%; height: 80%;" />
        </ul>
        <div class="container">
            <h3>Cadastro de Personagens</h3>

            <form method="post" action="gravar">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="txtNome" type="text" name="nome" class="validate" />
                        <label class="active" for="txtNome">Nome</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="txtDescricao" type="text" name="descricao" class="validate" />
                        <label class="active" for="txtDescricao">Descrição</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="txtArmadura" type="text" name="armadura" class="validate" />
                        <label class="active" for="txtArmadura">Armadura</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input id="txtConstelacao" type="text" name="constelacao" class="validate" />
                        <label class="active" for="txtConstelacao">Constelação</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="number" id="txtIdade" type="text" name="idade" class="validate" />
                        <label class="active" for="txtIdade">Idade</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Gravar
                    <i class="material-icons right">check</i>
                </button>
            </form>
        </div>
    </body>
</html>
