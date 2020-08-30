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

	  <h3>A história de Saint Seiya</h3>

    <p>Saint Seiya (nome original da série) conta a história de um grupo de cinco jovens guerreiros cuja função era proteger Saori Kido, reencarnação de Atena, a deusa grega da sabedoria. Para lutar, eles utilizam a energia interior e do cosmos, e suas armaduras que são inspiradas em constelações e na mitologia grega. A animação é dividida em quatro sagas: Saga do Santuário; Saga de Asgard; Saga de Poseidon e Saga de Hades.  </p>
	  

        
      </div>


        
	</body>
</html>