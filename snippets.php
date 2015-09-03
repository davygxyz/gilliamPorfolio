<?php 
	$pageTitle = 'Snippets';
	include "template/header.php";
//http://www.freeformatter.com/html-escape.html#ad-output .... html character converter
	include "connect.php";
	$statement = $db->prepare("SELECT * FROM snippets");
	$statement->execute();
	$count = $statement->rowCount();
	$row = $statement->fetchall();
?>
<div id='cnt-header'>
  <h2>Code Snippets</h2>
</div>
<div class='row'>
	<div class='small-12 columns'>
		<?php 
			if ($count > 0){
				foreach($row as $snippet){
					echo
					"
						<div class='section'>
							<h4 class='snip-title'>".$snippet['title']."</h4>
							<pre>
								<code>
								".htmlspecialchars($snippet['snippet_text'])."
								</code>
							</pre>
							<p class='snip-p'>
							".$snippet['desc']."
							</p>
						</div>


					";
				}
			}
			else{
				echo"
					<div class='section'>
						<h4>No Snippets at this time.</h4>
					</div>
				";
			}
		?>
	</div>
</div>
<?php include "template/footer.php";?>