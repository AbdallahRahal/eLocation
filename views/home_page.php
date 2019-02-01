<?php
    //echo "<br><br><br><br><br><br><br><br>";
  $i=1;
  $lien_photo= array();

    while($donneesAffichage = $affichage_carrousel->fetch(PDO::FETCH_ASSOC)){
      $lien_photo[$i] = $donneesAffichage['Photo'];
      $nom[$i] = $donneesAffichage['nom'];
      $id[$i] = $donneesAffichage['id'];
      $categorie_id[$i] = $donneesAffichage['categorie_id'];
      $i++;
    }
    if ($dernier_art_visités != NULL) {
      
    while($test = $dernier_art_visités->fetchAll(PDO::FETCH_ASSOC)){
      for ($s=0; $s < count($test) ; $s++) {
      
      $dernier_nom[$s] = $test[$s]['nom'];
      $dernier_photo[$s] = $test[$s]['Photo'];
      $dernier_id[$s] = $test[$s]['id'];
      $dernier_cat_id[$s] = $test[$s]['categorie_id'];
      $dernier_prix[$s] = $test[$s]['prix'];
      }
    }

  }else{
    $no_visite = true;
  }
?>
<link rel="stylesheet" type="text/css" href="views/librairies/style.css">

<link rel="stylesheet" type="text/css" href="views/librairies/slick.css">

<link rel="stylesheet" type="text/css" href="views/librairies/animate.css">

<link rel="stylesheet" type="text/css" href="views/librairies/hamburgers.css">

<link rel="stylesheet" type="text/css" href="views/librairies/animsition.css">

<link rel="stylesheet" type="text/css" href="views/librairies/select2.min.css">

<link rel="stylesheet" type="text/css" href="views/librairies/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="views/librairies/util.css">

<link rel="stylesheet" type="text/css" href="views/librairies/main.css">

<link rel="stylesheet" type="text/css" href="views/librairies/lightbox.min.css">

<body class="animsition">

<section style="margin-top: 3%;height: 80%" class="slide1">
<div class="wrap-slick1">
<div class="slick1">
<div class="item-slick1 item1-slick1" style="background-image: url(views/img/sport.jpg);height: 120%">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span style="color: black;" class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
  <strong>
    <h3>
      Sport été saison 2019
    </h3>
  </strong>
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" style="color: black;" data-appear="fadeInUp">
Nouvelles arrivées, sois le premier à louer</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">

<a href="index.php?page=accueil&rub=cat&cat=6" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Louer
</a>
</div>
</div>
</div>
<div class="item-slick1 item2-slick1" style="background-image: url(views/img/saison-hiver.jpg);height: 120%">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span style="color: black;" class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
  <strong>
    <h3>
      Sport Hiver saison 2019
    </h3>
  </strong></span>
<h2 style="color: black;" class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
Préparez votre hiver à l'avance</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">

<a href="index.php?page=accueil&rub=cat&cat=7" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Louer
</a>
</div>
</div>
</div>
<div class="item-slick1 item3-slick1" style="background-image: url(views/img/foott.jpg);height: 120%">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span style="color: black;" class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
    <strong>
    <h3>
Deviens le meilleur joueur du 94
    </h3>
  </strong></span>
<h2 style="color: black;" class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
Loues nos articles</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">

<a href="index.php?page=accueil&rub=cat&cat=1" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Loeues</a>
</div>
</div>
</div>
</div>
</div>
</section>
<br><br><br><br><br><br><br><br><br>
<div style="" class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Quelques Nouveautées
</h3>
</div>

<section style="background-color: #f2f2f2;" class="banner bgwhite p-t-40 p-b-40">
<div class="container">
<div class="row">
<div  class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

<div class="block1 hov-img-zoom pos-relative m-b-30">
<img  src="views/img/<?=$lien_photo[6]?>" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a href="index.php?page=accueil&rub=cat&cat=<?=$categorie_id[6]?>&art=<?=$id[6]?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
<?=$nom[6]?>
</a>
</div>
</div>

<div class="block1 hov-img-zoom pos-relative m-b-30">
<img src="views/img/<?=$lien_photo[1]?>" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a href="index.php?page=accueil&rub=cat&cat=<?=$categorie_id[1]?>&art=<?=$id[1]?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
<?=$nom[1]?>

</a>
</div>
</div>
</div>
<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

<div class="block1 hov-img-zoom pos-relative m-b-30">
<img src="views/img/<?=$lien_photo[2]?>" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a href="index.php?page=accueil&rub=cat&cat=<?=$categorie_id[2]?>&art=<?=$id[2]?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
<?=$nom[2]?>
</a>
</div>
</div>
 
<div class="block1 hov-img-zoom pos-relative m-b-30">
<img src="views/img/<?=$lien_photo[3]?>" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a href="index.php?page=accueil&rub=cat&cat=<?=$categorie_id[3]?>&art=<?=$id[3]?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
<?=$nom[3]?>
</a>
</div>
</div>
</div>
<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

<div class="block1 hov-img-zoom pos-relative m-b-30">
<img src="views/img/<?=$lien_photo[4]?>" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a href="index.php?page=accueil&rub=cat&cat=<?=$categorie_id[4]?>&art=<?=$id[4]?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
<?=$nom[4]?>

</a>
</div>
</div>

<div style="margin-top: 160px;" class="block2 wrap-pic-w pos-relative m-b-30">
<div class="block2-content sizefull ab-t-l flex-col-c-m">
<h4 class="m-text4 t-center w-size3 p-b-8">
Decouvres vite le site</h4>
<p class="t-center w-size4">
Deviens un bon client, et obtiens des réductions</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="newproduct bgwhite p-t-45 p-b-105">
<div style="max-height: 70%" class="container">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Vos dernières visites 
</h3>
</div>

<div class="wrap-slick2">
<div class="slick2">
<div class="item-slick2 p-l-15 p-r-15">
<?php (empty($dernier_photo[0])) ? $photo = "bonhomme-pas-content.jpg" : $photo = $dernier_photo[0]; ?>
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="views/img/<?=$photo?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<?php (isset($no_visite) && $no_visite == true || !isset($dernier_cat_id[0]) )? $lien = "" : $lien = "index.php?page=accueil&rub=cat&cat==$dernier_cat_id[0]&art=$dernier_id[0]"; ?>
<a href="<?=$lien?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Voir l'article
</a>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="" class="block2-name dis-block s-text3 p-b-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[0]) )? "tu n'as pas assez surfer sur le site" : $dernier_nom[0]; ?>
</a>
<span class="block2-price m-text6 p-r-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[0]) )? "" : $dernier_prix[0]." €";?>
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">
<?php (empty($dernier_photo[1])) ? $photo = "bonhomme-pas-content.jpg" : $photo = $dernier_photo[1]; ?>
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="views/img/<?=$photo?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<?php (isset($no_visite) && $no_visite == true || !isset($dernier_id[1]) )? $lien = "" : $lien = "index.php?page=accueil&rub=cat&cat=$dernier_cat_id[1]&art=$dernier_id[1]"; ?>
<a href="<?=$lien?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Voir l'article
</a>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[1]) )? "tu n'as pas assez surfer sur le site" : $dernier_nom[1]; ?>
</a>
<span class="block2-price m-text6 p-r-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[1]) )? "" : $dernier_prix[1]." €"; ?>
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">
<?php (empty($dernier_photo[2])) ? $photo = "bonhomme-pas-content.jpg" : $photo = $dernier_photo[2]; ?>
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="views/img/<?=$photo?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<?php (isset($no_visite) && $no_visite == true || !isset($dernier_id[2]) )? $lien = "" : $lien = "index.php?page=accueil&rub=cat&cat=$dernier_cat_id[2]&art=$dernier_id[2]"; ?>
<a href="<?=$lien?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Voir l'article
</a>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[2]) )? "tu n'as pas assez surfer sur le site" : $dernier_nom[2]; ?>
</a>
<span class="block2-price m-text6 p-r-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[2]) )? "" : $dernier_prix[2]." €"; ?>
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">
<?php (empty($dernier_photo[3])) ? $photo = "bonhomme-pas-content.jpg" : $photo = $dernier_photo[3]; ?>
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
<img src="views/img/<?=$photo?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<?php (isset($no_visite) && $no_visite == true || !isset($dernier_id[3]) )? $lien = "" : $lien = "index.php?page=accueil&rub=cat&cat=$dernier_cat_id[3]&art=$dernier_id[3]"; ?>
<a href="<?=$lien?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Voir l'article
</a>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[3]) )? "tu n'as pas assez surfer sur le site" : $dernier_nom[3]; ?>
</a>
<span class="block2-oldprice m-text7 p-r-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[3]) )? "" : $dernier_prix[3]." €"; ?>
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">
<?php (empty($dernier_photo[4])) ? $photo = "bonhomme-pas-content.jpg" : $photo = $dernier_photo[4]; ?>
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="views/img/<?=$photo?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<?php (isset($no_visite) && $no_visite == true || !isset($dernier_id[4]) )? $lien = "" : $lien = "index.php?page=accueil&rub=cat&cat=$dernier_cat_id[4]&art=$dernier_id[4]"; ?>
<a href="<?$lien?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Voir l'article
</a>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[4]))? "tu n'as pas assez surfer sur le site" : $dernier_nom[4]; ?>
</a>
<span class="block2-price m-text6 p-r-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[4]) )? "" : $dernier_prix[4]." €"; ?>
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">
<?php (empty($dernier_photo[5])) ? $photo = "bonhomme-pas-content.jpg" : $photo = $dernier_photo[5]; ?>
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="views/img/<?=$photo?>" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">
<?php (isset($no_visite) && $no_visite == true || !isset($dernier_id[5]) )? $lien = "" : $lien = "index.php?page=accueil&rub=cat&cat=$dernier_cat_id[5]&art=$dernier_id[5]"; ?>
<a href="<?=$lien?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
Voir l'article
</a>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[5]) )? "tu n'as pas assez surfer sur le site" : $dernier_nom[5]; ?>
</a>
<span class="block2-price m-text6 p-r-5">
<?php echo (isset($no_visite) && $no_visite == true || !isset($dernier_id[5]) )? "" : $dernier_prix[5]." €"; ?>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section style="background-color: #f2f2f2;" class="instagram p-t-20">
<div class="sec-title p-b-52 p-l-15 p-r-15">
<h3 class="m-text5 t-center">
ELocation, c'est quoi ?</h3>
</div>
<div style="margin-left: 20%;" class="flex-w">
<div class="block4 wrap-pic-w">
<div style="margin-top: 90px;" >
<img src="views/img/eLocation.png" alt="IMG-INSTAGRAM">
</div>
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p style="font-size: 20px;" class="s-text10 m-b-15 h-size1 of-hidden">
Un projet de semestre 2, dévelopéé en php, qui permet de louer en ligne toutes sortes de materiel sportif
</p>
<span class="s-text9">
Photo by @Ferras
</span>
</div>
</a>
</div>
<div class="block4 wrap-pic-w">
<img src="views/img/matos.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p style="font-size: 20px;" class="s-text10 m-b-15 h-size1 of-hidden">
Eté, Hiver, Foot, Basket...
Viens sur eLocation et loues toutes sortes d'articles, ils t'attendent!!!
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="views/img/serrer.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">

</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p style="font-size: 20px;" class="s-text10 m-b-15 h-size1 of-hidden">
Vends nous tes articles, ils seront disponible a la location pour ceux qui n'ont pas les moyens d'acheter l'article</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="views/img/intech.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">

</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p style="font-size: 17px;" class="s-text10 m-b-15 h-size1 of-hidden">
IN’TECH est une École Supérieure d’Ingénierie Informatique, rattachée au Groupe d'enseignement supérieur et de recherche ESIEA.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>
</div>
</section>

<section class="shipping bgwhite p-t-62 p-b-46">
<div class="flex-w p-l-15 p-r-15">
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
Récupérez vos articles dans le point relais que vous souhaitez</h4>
<a href="#" class="s-text11 t-center">
Plusieurs autour de chez vous
</a>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
<h4 class="m-text12 t-center">
Pas d'annulation</span>
</h4>
<span class="s-text11 t-center">
Nous ne rendons sous aucun pretexte les article qui nous ont étés vendus</span>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
Toujours ouvert</h4>
<span class="s-text11 t-center">
24h/24h - 7j/7j</span>
</div>
</div>
</section>

<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
<center>
<div style="margin-left: 31%" class="flex-w p-b-90">
<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
<h4 class="s-text12 p-b-30">
eLocation
</h4>
<div>
<p class="s-text7 w-size27">
Semestre 2
</p>
</div>
</div>
<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
<h4 class="s-text12 p-b-30">
Categories
</h4>
<ul>
<li class="p-b-9">
<a href="index.php?page=accueil&rub=cat&cat=6" class="s-text7">
Eté
</a>
</li>
<li class="p-b-9">
<a href="index.php?page=accueil&rub=cat&cat=2" class="s-text7">
Foot
</a>
</li>
<li class="p-b-9">
<a href="index.php?page=accueil&rub=cat&cat=7" class="s-text7">
Hiver
</a>
</li>
<li class="p-b-9">
<a href="index.php?page=accueil&rub=cat&cat=3" class="s-text7">
Tennis
</a>
</li>
</ul>
</div>

<form>
<div class="w-size2 p-t-20">
</div>
</form>
</div>
</div>
<div class="t-center p-l-15 p-r-15">
Intech, eLocation, Semester 2.
<div class="t-center s-text8 p-t-20">
Copyright © 2017 Colorlib. All rights reserved.
</div>
</div>
</center>
</footer>

<div class="btn-back-to-top bg0-hov" id="myBtn">
<span class="symbol-btn-back-to-top">
<i class="fa fa-angle-double-up" aria-hidden="true"></i>
</span>
</div>

<script data-cfasync="false" src="https://colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/animsition/js/animsition.min.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/bootstrap/js/popper.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/slick/slick.min.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/js/slick-custom.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/countdowntime/countdowntime.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/lightbox2/js/lightbox.min.js"></script>

<script type="text/javascript" src="https://colorlib.com/etc/fashe/vendor/sweetalert/sweetalert.min.js"></script>
<div id="dropDownSelect1"></div>

<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to cart !", "success");
      });
    });

    $('.block2-btn-addwishlist').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");
      });
    });
  </script>

<script src="https://colorlib.com/etc/fashe/js/main.js"></script>
</body>
</html>
