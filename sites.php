<?php 
	$pageTitle = 'Live Sites';
	include "template/header.php";
	include "connect.php";
	$statement = $db->prepare("SELECT * FROM liveSites");
	$statement->execute();
	$row = $statement->fetchall();
?>
<div id='cnt-header'>
  <h2>Live Sites</h2>
</div>

	<?php foreach($row as $sites)
	{ ?>
		<div class='section'>
			<div class='row'>
				<div class='small-12 columns'>
					<div class='row'>
						<div class='small-6 columns'>
							<?php if(file_exists("uploads/".$sites['site_img'])){?>
							<img src="uploads/<?php echo $sites['site_img']?>" alt='Website image'>
							<?php }else{ ?>
								<p class="text-center">No Image Available</p>
							<?php } ?>
						</div>
						<div class='small-6 columns'>
							<div class='row'>
								<div class='small-12 columns'>
									<h4>Site Name</h4>
									<p><?php echo $sites['name']?></p>
								</div>
								<div class='small-12 columns'>
									<h4>Site Link</h4>
									<p><a href="http://www.<?php echo $sites['link']?>" target='_blank'>http://www.<?php echo $sites['link']?></a></p>
								</div>
								<div class='small-12 columns'>
									<h4>Site Description</h4>
									<p>
										<?php echo $sites['site_desc']?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

<?php include "template/footer.php";?>