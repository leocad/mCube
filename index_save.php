<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="content/picture/favicon.ico">

    <title>JoJocad Website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/starter-template.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/footer_style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
          <a class="navbar-brand" href="">Jojocad</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>


	     

        <div class="container">
            <div class="row">

	           <div class="starter-template">
		          <h1>Welcome on the jojo website </h1>
		          <p class="lead"> Here you can find a small selection of my different theme</p>
		     </div>

			</div>

	<div class="row">
		 <?php
			try{		
				
				$bdd = new PDO('mysql:host=localhost;dbname=jojocad;charset=utf8', 'root', ''); // change with yours
			}
			catch(Exception $e){

				
			        die('Erreur : '.$e->getMessage());
			}

			$reponse = $bdd->query('SELECT * FROM theme');


			while ($donnees = $reponse->fetch())
			{
			?>

				<div class="col-sm-4 text-center img-responsive">
	              <h3> <?php echo $donnees['titre']; ?></h3>    
	              	<a href= "content/theme/<?php echo $donnees['titre']; ?>.php">
	              		<img src = <?php echo $donnees['photo']?> style="width:200px;height:200px;border-radius:25px;text-align:center;">
	              		<p><?php echo $donnees['description']; ?></p> 
	              	</a>

	            </div>

			<?php
		}

				$reponse->closeCursor(); 
             ?>


          </div>
        </div>


    <footer class="footer">
      <div class="container">
        <span class="text-muted">
          <p style="text-align: right"> leocad 2017 </p> 

        </span>
          
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>

  </body>



</html>
