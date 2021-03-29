<?php
session_start();
if(isset($_SESSION['frist_name']) && isset($_SESSION['name']) )
       echo '<p> Bienvenue' . ' ' .$_SESSION['frist_name'] . ' ' . $_SESSION['name'] . '! </p>';
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
      include("header_marche.php");
      include("fonctions_PHP/Menu_Of_Day.php");
      
       ?>
</head>

<body id="Menu">

<br/>

<div class="jumbotron col-sm-offset-10" id="frame5">


  <a href="../picture/Menu.jpg"> <img src="../picture/Menu.jpg"  alt="picture  dessert number 5 " 
    /></a><br/>
 
    <?php
    echo Menu_Day($bdd,1);
    ?>
  </div>
<div class="jumbotron col-sm-offset-2  ">
<h1> Entrée   </h1>
   <a href="../picture/entree/falafel.jpg" > <img src="../picture/entree/falafel-mini.jpg" alt="picture entree number 1 " class="pull-left" /></a>
   <p> Falafels de pois chiches </p>
  
  <a href="../picture/entree/salade.jpg"> <img src="../picture/entree/salade-mini.jpg"  alt="picture entree number 2 " class="pull-left"/></a>
  <p>Salade crue de tranches de courge jaune et lamelles de chou rouge et blanc </p>

  <a href="../picture/entree/samou.jpg"> <img src="../picture/entree/samou-mini.jpg" alt="picture entree number 3 " class="pull-left" /></a>
  <p> Samoussas de légumes à l’indienne </p>

  <a href="../picture/entree/sushi.jpg" > <img src="../picture/entree/sushi-mini.jpg" alt="picture entree number 4 " class="pull-left" /></a>
  <p> Vegans sushi   </p>


  <a href="../picture/entree/ratatouille.jpg"  > <img src="../picture/entree/ratatouille-mini.jpg"  alt="picture entree number 5 " class="pull-left" /></a>
  <p> Ratatouille  </p>
  <br/>

</div>

<div class="jumbotron col-sm-offset-3">


  <h1>Plat  </h1>
   <a href="../picture/food/omlette.jpg" > <img src="../picture/food/omlette-mini.jpg" alt="picture food number 1 " class="pull-left" /></a>
   <p> Omelette végétalienne de pommes de terre à l’espagnole </p>
  
  <a href="../picture/food/lasagne.jpg"> <img src="../picture/food/lasagne-mini.jpg"  alt="picture food number 2 " class="pull-left"/></a>
  <p>Nos delicieux lasagnes a la sauce de tomates fait maison </p>

  <a href="../picture/food/chou.jpg"> <img src="../picture/food/chou-mini.jpg" alt="picture food number 3 " class="pull-left" /></a>
  <p> Mélanges des choux verts et rouges avec du tofu </p>

   <a href="../picture/food/brouilard.jpg" > <img src="../picture/food/brouilard-mini.jpg" alt="picture food number 4 " class="pull-left" /></a>
  <p> Brouillade de tofu </p>

  <a href="../picture/food/spagheti.jpg"> <img src="../picture/food/spaghetti-mini.jpg"  alt="picture food number 5 " class="pull-left"/></a>
  <p> Spaghettis façon thaï : carottes, champignons, citron & cacahuètes </p>

  <br/>

  <a href="../picture/food/rougail.jpg"> <img src="../picture/food/rougail-mini.jpg" alt="picture food number 6 " class="pull-left"/></a>
  <p>Rougail de tofu fumé </p>
  
  <a href="../picture/food/Parmentier.jpg"> <img src="../picture/food/Parmentier-mini.jpg" alt="picture food number 7 " class="pull-left" /></a>
  <p> Parmentier de lentilles, à la moutarde à l’ancienne</p>


  <a href="../picture/food/hamburger.png"  > <img src="../picture/food/hamburger-mini.png" alt="picture food number 8 " class="pull-left"  /></a>
  <p> Hamburger </p>

  <a href="../picture/food/parlla.jpg" > <img src="../picture/food/parlla-mini.jpg" alt="picture food number 9 " class="pull-left" /></a>
  <p> Paella a la version végétalienne   </p>

  <a href="../picture/food/Curry-Legumes.jpg"  > <img src="../picture/food/Curry-Legumes-mini.jpg" alt="picture food number 10 " class="pull-left"  /></a>
  <p> Curry de légumes </p>

</div>

<div class="jumbotron col-sm-offset-4">

  <h1>   Dessert  </h1>

  <a href="../picture/dessert/fraisier.jpeg"  > <img src="../picture/dessert/fraisier-mini.jpg" alt="picture  dessert number 1 "  class="pull-left"  /></a>
  <p> Fraisier </p>

  <a href="../picture/dessert/cookies.jpg"  > <img src="../picture/dessert/cookies-mini.jpg"  alt="picture  dessert number 2 "  class="pull-left"  /></a>
  <p> Cookies </p>

  <a href="../picture/dessert/cheese-cake.jpg"  > <img src="../picture/dessert/cheese-cake-mini.jpg" alt="picture  dessert number 3 "   class="pull-left"  /></a>
  <p> Chesse cake </p>

  <a href="../picture/dessert/panacota.jpg"   > <img src="../picture/dessert/panacota-mini.jpg"  alt="picture  dessert number 4 "  class="pull-left"  /></a>
  <p> Panacota </p>

  <a href="../picture/dessert/entremet.jpg"   > <img src="../picture/dessert/entremet-mini.jpg"  alt="picture  dessert number 5 "  class="pull-left"  /></a><br/>

  <p> Entremet </p>
  <br/>

  </div>

</div>
<?php include('PiedDePage.php'); ?>
</body>
</html>