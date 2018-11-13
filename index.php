<link rel='stylesheet' href='Views/Librairies/bootstrap.min.css'>
<link rel='stylesheet' href='Views/Librairies/font_awesome.css'>
<link rel='stylesheet' href="Views/Librairies/offcanvas.css" >

<script src='Views/Librairies/style.js'></script>
<script src='Views/Librairies/jquery.js'></script>
<script src='Views/Librairies/bootstrap.min.js'></script>

<?php

include 'Views/template/html_top.html';

if(isset($_GET['page'])) {
  switch($_GET['page']):
    case 'login';
        include 'Controllers/handling_data/login.php';
        break;
    case 'accueil';
	include 'Controllers/redirection_user.php';
        break;
    default:
        echo 'error <br> page not found';
  endswitch;
} else {
    include 'Controllers/handling_data/home.php';
}

include 'Views/template/html_bottom.html';

?>
