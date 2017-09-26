        

        <div class="container">
            <div class="row">

	           <div class="starter-template">
		          <h1>Welcome on the <?php echo get_bloginfo( 'name' ); ?> website</h1>
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

            <div class="row">

	           <div class="starter-template">
		          <h2>latest article : </h3>

		       </div>
		       <div class="blog-post">
					<h3 class="blog-post-title"><?php the_title(); ?></h2>
					<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
				 <?php the_content(); ?>
				</div>
			</div>
        </div>

      
