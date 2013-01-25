<?php $this->inc('elements/header.php');?>


    <div class="container">
		<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
				<p>
				<strong>colonne1</strong>
				</p>
				 <?php
				 $a = new Area('col1');
				  $a->display($c);
				  ?>
				</div>
			</div>
		     <div class="span4">
		        <div class="hero-unit">
				<p>
				<strong>colonne2</strong>
				</p>
				 <?php
				 $a = new Area('col2');
				  $a->display($c);
				  ?>
				</div>
			 </div>
			<div class="span4">
		        <div class="hero-unit">
				<p>
				<strong>colonne3</strong>
				</p>
				 <?php
				 $a = new Area('col3');
				  $a->display($c);
				  ?>
				</div>
		      
		    </div>
		</div>
		<div class="row">
		<div class="span12">
		        <div class="hero-unit">
				 <?php
				 $a = new Area('Bas 12');
				  $a->display($c);
				  ?>
				</div>
			 </div>
	</div>
<?php $this->inc('elements/footer.php');?>