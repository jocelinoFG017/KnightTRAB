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
	        <li><a href="veiculo">Veiculo</a></li>
	      </ul>
	    </div>
	  </nav>

	  <ul class="sidenav" id="mobile-demo">
	    <li><a href="veiculo">veiculo</a></li>
	  </ul>
        
	</body>
</html>