<?php 
	$pageTitle = 'Design';
	include "template/header.php";
	include "connect.php";
	$statement1 = $db->prepare("SELECT * FROM branding");
	$statement1->execute();
	$count1=$statement1->rowCount();
	$row1 = $statement1->fetchall();

	$statement2 = $db->prepare("SELECT * FROM digital");
	$statement2->execute();
	$count2=$statement2->rowCount();
	$row2 = $statement2->fetchall();

	$statement3 = $db->prepare("SELECT * FROM icons");
	$statement3->execute();
	$count3=$statement3->rowCount();
	$row3 = $statement3->fetchall();

	$statement4 = $db->prepare("SELECT * FROM illustrations");
	$statement4->execute();
	$count4=$statement4->rowCount();
	$row4 = $statement4->fetchall();

?>
<div id='cnt-header'>
  <h2>Graphics</h2>
</div>
<div class='section'>
	<div class='row'>
		<div class='small-12 columns'>
			<ul class="accordion" data-accordion>
			  <li class="accordion-navigation">
			    <a  class='acc-title' href="#panel1a">Branding</a>
			    <div id="panel1a" class="content active">
			      <div class='row'>
			      	<?php
			      		if($count1 > 0){
				      		$counter = 0;
				      		foreach($row1 as $branding){
				      			$counter++;
				      			echo 
				      			"
									<div class='small-4 columns'>
										<a href='uploads/".$branding['branding_img']."' data-lightbox='branding' data-title='".$branding['desc']."'>
											<img src='uploads/".$branding['branding_img']."' alt='Branding type image'>
										</a>
									</div>
				      			";
				      			if($counter % 3 == 0){
								echo "<div class='small-12 columns divider'></div>";
								}
				      		}
				      	}else{
				      		echo"<div class='small-12 columns'><h3 class='text-center'>Currently Empty</h3></div>";
				      	}
			      	 ?>	
				</div>
			   </div>
			  </li>
			  <li class="accordion-navigation">
			    <a class='acc-title' href="#panel2a">Digital</a>
			    <div id="panel2a" class="content">
			      <div class='row'>
						<?php
							if($count2 > 0){
					      		$counter = 0;
					      		foreach($row2 as $digital){
					      			$counter++;
					      			echo 
					      			"
										<div class='small-4 columns'>
											<a href='uploads/".$digital['digital_img']."' data-lightbox='digital' data-title='".$digital['desc']."'>
												<img src='uploads/".$digital['digital_img']."' alt='Digital type image'>
											</a>
										</div>
					      			";
					      			if($counter % 3 == 0){
									echo "<div class='small-12 columns divider'></div>";
									}
					      		}
					      	}else{
				      			echo"<div class='small-12 columns'><h3 class='text-center'>Currently Empty</h3></div>";
				      		}
				      	?>	
					</div>
			    </div>
			  </li>
			  <li class="accordion-navigation">
			    <a class='acc-title' href="#panel3a">Illustrations</a>
			    <div id="panel3a" class="content">
			      	<div class='row'>
						<?php
							if($count4 > 0){
					      		$counter = 0;
					      		foreach($row4 as $illustration){
					      			$counter++;
					      			echo 
					      			"
										<div class='small-4 columns'>
											<a href='uploads/".$illustration['illustration_img']."' data-lightbox='illustration' data-title='".$illustration['desc']."'>
												<img src='uploads/".$illustration['illustration_img']."' alt='Illustration type image'>
											</a>
										</div>
					      			";
					      			if($counter % 3 == 0){
									echo "<div class='small-12 columns divider'></div>";
									}
					      		}
					      	}else{
				      			echo"<div class='small-12 columns'><h3 class='text-center'>Currently Empty</h3></div>";
				      		}
				      	?>
					</div>
			    </div>
			  </li>
			   <li class="accordion-navigation">
			    <a class='acc-title' href="#panel4a">Icons</a>
			    <div id="panel4a" class="content">
			      	<div class='row'>
			      		<?php
							if($count3 > 0){
					      		$counter = 0;
					      		foreach($row3 as $icon){
					      			$counter++;
					      			echo 
					      			"
										<div class='small-4 columns'>
											<a href='uploads/".$iconl['icon_img']."' data-lightbox='icon' data-title='".$icon['desc']."'>
												<img src='uploads/".$icon['icon_img']."' alt='Icon type image'>
											</a>
										</div>
					      			";
					      			if($counter % 3 == 0){
									echo "<div class='small-12 columns divider'></div>";
									}
					      		}
					      	}else{
				      			echo"<div class='small-12 columns'><h3 class='text-center'>Currently Empty</h3></div>";
				      		}
					      ?>
					</div>
			    </div>
			  </li>
			</ul>
		</div>
	</div>
</div>
<?php include "template/footer.php";?>