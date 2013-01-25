<?php $this->inc('elements/header.php');?>


    
		<div class="row">
		    <div class="span10">
		        <div class="hero-unit">
				<?php
			$a = new Area('contenu');
			$a->display($c);
			?>
				  <a class="btn btn-primary btn-large">Plus d'infos</a>
				</div>
		      
		      <div class="row">
		      	<div class="span5">
				<?php
			$a = new Area('contenu');
			$a->display($c);
			?>
		      		<h2>Lorem ipsum dolor</h2>
		      		<p>
			      		Maecenas suscipit, felis eu placerat semper, enim lacus condimentum mauris, quis adipiscing eros urna ac sapien. Integer magna enim, laoreet et sollicitudin eget, dapibus nec dui. Nunc bibendum, velit vel mattis sollicitudin
			      	</p>
		      	</div>	      	
		      	<div class="span5">
				<?php
			$a = new Area('contenu');
			$a->display($c);
			?>
		      		<h2>Lorem ipsum dolor</h2>
		      		<p>
			      		Maecenas suscipit, felis eu placerat semper, enim lacus condimentum mauris, quis adipiscing eros urna ac sapien. Integer magna enim, laoreet et sollicitudin eget, dapibus nec dui. Nunc bibendum, velit vel mattis sollicitudin
			      	</p>
		      	</div>
		      </div>
		      
		    </div>
		    <div class="span2">
			<?php
			$a = new Area('contenu');
			$a->display($c);
			?>
		    	<div class="well well-small">
					<h3>Contenu latéral</h3>
					<p>
						Curabitur non felis in risus eleifend ultricies. Sed a tellus eros, a euismod ipsum.
					</p>
				</div>
		    </div>
	    </div>
	    
	  
<?php $this->inc('elements/footer.php');?>