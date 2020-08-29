<html>
	<head>
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	    <!--Import Google Icon Font-->
     	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     	<!-- Import jquery-->
     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	    <!-- Compiled and minified JavaScript -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<script type="text/javascript">
		    $(document).ready(function(){
	 			$('.sidenav').sidenav();
	 		});
		</script>
	</head>
		
	<body>		
	  <nav>
	    <div class="nav-wrapper container">
	      <a href="#" class="brand-logo">CodeIgniter</a>
	      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="<?=base_url('veiculo')?>">Veiculo</a></li>
	      </ul>
	    </div>
	  </nav>

	  <ul class="sidenav" id="mobile-demo">
	    <li><a href="<?=base_url('veiculo')?>">Veiculo</a></li>
	  </ul>
        <div class="container">
        <h3>Cadastro de Veiculos</h3>

        <form method="post" action="gravar">
          <div class="row">
            <div class="input-field col s6">
              <input id="txtPlaca" type="text" name ="placa" class="validate">
              <label class="active" for="txtPlaca">Placa</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="txtDescricao" type="text" name ="descricao" class="validate">
              <label class="active" for="txtDescricao">Descrição</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="txtAno" type="number" name ="ano" class="validate">
              <label class="active" for="txtAno">Ano</label>
            </div>
          </div>


        <button class="btn waves-effect waves-light" type="submit" name="action">Gravar
          <i class="material-icons right">check</i>
        </button>
        
          
        </form>
        </div>
	</body>
</html>