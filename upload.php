<?php

require 'include/header.php';
require 'language.php';

?>

<div class="container jumbotron text-center" style="margin-bottom: 0; position: relative;">
	<a href="index.php"><i class="fas fa-home"></i></a>
	<i class="fas fa-check-circle fas-xl"></i>
	<h2><?php echo $success[$lang]; ?></h2>
</div>

<?php
require 'include/footer.php';
?>