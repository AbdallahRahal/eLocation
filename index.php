<link rel='stylesheet' href='views/librairies/bootstrap.min.css'>
<link rel='stylesheet' href='views/librairies/font_awesome.css'>
<link rel='stylesheet' href="views/librairies/offcanvas.css" >

<script src='views/librairies/style.js'></script>
<script src='views/librairies/jquery.js'></script>
<script src='views/librairies/bootstrap.min.js'></script>

<?php
session_start();

include 'views/template/html_top.html';

if(isset($_GET['page'])) {
  switch($_GET['page']):
    case 'accueil';
	include 'controllers/redirection_user.php';
        break;
    default: ?>
    <center><img style="width:90%" src="http://cdn2.hubspot.net/hubfs/53/404-error-page-examples.jpeg" > <?php
        echo "<br>lol<br>No issue </center>?";
  endswitch;
} else {
    include 'controllers/handling_data/home.php';
}

include 'views/template/html_bottom.html';

?>