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
	    <li><a href="veiculo">veiculo</a></li>
	  </ul>
        
       <div class="container">
        <h3>Listagem de Veiculos</h3>



      <table class="striped">
        <thead>
          <tr>
              <th>Placa</th>
              <th>Descrição</th>
              <th>Ano</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach($veiculos as $vey) : ?> 
          <tr>
          	<td> <?=$vey['placa']?> </td>
          	<td> <?=$vey['descricao']?> </td>
          	<td> <?=$vey['ano']?> </td>
          </tr>

          <? endforeach?>
        </tbody>
      </table>
      <a href="<?=base_url('veiculo/formulario')?>" class="right btn-floating btn-large waves-effect waves-light red">
      	<i class="material-icons">add</i>
      </a>
      
      </div>
	</body>
</html>