<?php 
	$pageTitle = 'Wireframes';
	include "template/header.php";
	include "connect.php";
	$statement = $db->prepare("SELECT * FROM wireframe");
	$statement->execute();
	$row = $statement->fetchall();
?>
<div id='cnt-header'>
  <h2>Wireframes</h2>
</div>
<div class='section'>
	<div class='row'>
		<div class='small-12 columns'>
			<div class='row'>

				<?php 
				$count = 0;
				foreach($row as $wireframe){
				$count ++
				?>
				<div class='small-4 columns'>
					<a href="uploads/<?php echo $wireframe['wireframe_img']?>" data-lightbox="wireframe" data-title="<?php echo $wireframe['desc']?>">
						<img src="uploads/<?php echo $wireframe['wireframe_img']?>" alt='wireframe image'>
					</a>
				</div>
				
				<?php if($count%3 == 0){?>
				<div class='small-12 columns divider'></div>

				<?php }} ?>
			</div>
		</div>
	</div>
</div>
<?php include "template/footer.php";?>