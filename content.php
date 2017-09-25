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
