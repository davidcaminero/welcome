
<h1>AWS2 Matrix World</h1>


<form action="upload-image.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
</form>


<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" ) {
			$name = substr($img,0,-4);
			echo "<a href='profile/$name.html'>";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br />";
		}
	}
	
?>

</ul>
