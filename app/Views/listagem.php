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
	   <nav class="nav-extended black">
            <div class="nav-wrapper">
                <a href="home" class="brand-logo center">Saint Seiya: Knights of the Zodiac</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>

            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="saint">Personagens</a></li>
                    <li class="tab"><a class="active" href="<?=base_url('saint/formulario')?>">Cadastro</a></li>
                </ul>
            </div>
        </nav>

	  <ul class="sidenav" id="mobile-demo">
	    <li><a href="<?=base_url('saint')?>">Personagens</a></li>
	  </ul>
	  
	  <div class="container">

	  <h3>Lista de Personagens</h3>
	  <table class="striped">
        <thead>
          <tr>
              <th>Nome</th>
              <th>Descrição</th>
              <th>Armadura</th>
              <th>Constelação</th>
              <th>Idade</th>
          </tr>
        </thead>

        <tbody>
        	<?php foreach( $saints as $v){ ?>
        	<tr>
        		<td> <?=$v['nome']?> </td>
        		<td> <?=$v['descricao']?> </td>
        		<td> <?=$v['armadura']?> </td>
        		<td> <?=$v['constelacao']?> </td>
        		<td> <?=$v['idade']?> </td>
        	</tr>

        	<?php } ?>
        </tbody>
      </table>

        <a href="<?=base_url('saint/formulario')?>" class="right btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
            

      </div>


        
	</body>
</html>