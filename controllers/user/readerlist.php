<?php
if (!isset($_SESSION['email'])) {
	?>
	<script type="text/javascript">
		alert("Please login first to access booklist!");
		 window.location.href="/";
		</script>
		<?php
	exit;
}
$issue='reader';
$has_data=App::get('Users')->UserlistAdmin($issue);
$has_data->execute();
$data=$has_data->fetchAll(PDO::FETCH_OBJ);
require './views/users/readerlists.view.php';