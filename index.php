
<?php
 require 'vendor/autoload.php';
 require 'core/bootstrap.php';

 require __dir__.'/views/common/head.php';
 
require Router::load('routes.php')->direct(Request::uri());
require __dir__.'/views/common/footer.php';
?>
