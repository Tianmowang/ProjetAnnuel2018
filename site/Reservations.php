<?php
session_start();
if(isset($_SESSION['frist_name']) && isset($_SESSION['name']) )
       echo '<p> Bienvenue' . ' ' .$_SESSION['frist_name'] . ' ' . $_SESSION['name'] . '! </p>';


include("config.php");
include("fonctions_PHP/price.php");
include("fonctions_PHP/allergene.php");

?>

<!DOCTYPE html>
<html>
<head>
  <?php include("header_Menu.php"); ?>  

</head>
<body>

<script type="text/javascript" src="ajax/add.js"></script>
<script type="text/javascript" src="ajax/remove.js"></script>

<form method="post" action="treatment_pdf.php"  id="frame9">
 
    <label for="name"> Quel Restaurant ?</label><br />
     <select name="name" id="name">
 
 <?php
 
$answer = $bdd->query('SELECT name FROM `vegnbio`.restaurant');
 
while ($data = $answer->fetch())
{
?>
           <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?></option>
<?php
}
?>

</select>
   </br>
      <label>Numéro de la table :</label> 
      <input type="text" name="table" />
       </br>

       <input type="submit" id="envoyer" value="Ticket de caisse"/>
</form>


<div class="dessous">

<div>
<div class="col-sm-offset-8 ">
<div id="frame6">
    
    <h1> Panier   </h1>
<div >
    <div id="List"></div> <!--  c'est a cette endroit que les commandes vont etre afficher -->
    <div id="List2"></div> <!-- le total de la commande/ total price -->
   <!-- <div id="nombre"></div> le nombre d'article -->

   <!--<a href="treatment_pdf.php">PDF</a>-->

    </div>
      </div>
</div>
</div>

<div id="left">


<div class=" col-sm-offset-1 ">
<h1> Entrée   </h1>
  
<div class="X" >
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div>Salade <br/>
        <img src="../picture/entree/salade2.jpg"  alt="picture entree number 2 " />

        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"  onclick="remove_cost('salade');remove_order('salade');"> - </button>

            </div>
            
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"> 

                
                 <?php
                echo Price($bdd, "salade");
                ?>

                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('salade');add_order('salade');"> + </button>
            </div>

            <div class="dessous">
            <br/> Les allergenes eventuels : <br/>

             <?php echo Allergene($bdd,"salade"); ?>

             </div>

            
  
        </div>
    </div>
  </div>
</div>
</div>
</div>



<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Samoussas <br/>
        <img src="../picture/entree/samou2.jpg" alt="picture entree number 3 "  />

        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('samoussas');remove_order('samoussas');"> - </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"> 

                
                 <?php echo Price($bdd, "samoussas"); ?>

                </button>
            </div>

        
            
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default " onclick="add_cost('samoussas');add_order('samoussas');"> + </button>
            </div>


            <div class="dessous"  >
            
            <br/> Les allergenes eventuels : <br/>

             <?php echo Allergene($bdd,"samoussas"); ?>

             </div>


        </div>
    </div>
  </div>
</div>
</div>
</div>
 

<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Sushi<br/>
        <img src="../picture/entree/sushi2.jpg" alt="picture entree number 4 "  />

        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('sushi');remove_order('sushi');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"> 

                
                 <?php
                echo Price($bdd, "sushi");
                ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('sushi');add_order('sushi');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd, "sushi"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Ratatouille  <br/>
        <img src="../picture/entree/ratatouille2.jpg"  alt="picture entree number 5 "  />

        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('ratatouille');remove_order('ratatouille');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

                
                 <?php
                 echo Price($bdd, "ratatouille");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('ratatouille');add_order('ratatouille');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"ratatouille"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div>Falafels<br/>
        <img src="../picture/entree/falafel2.jpg " alt="picture entree number 1 "  />

        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('falafels');remove_order('falafels');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

                 <?php
                 echo Price($bdd, "falafels");
                ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('falafels');add_order('falafels');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"falafels"); ?>

             </div>

        </div>
    </div>
  </div>
 </div>
 </div>
</div>
</div>

<div class="col-sm-offset-1">

<h1>Plat  </h1>

<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div>Omelette<br/> 
        <img src="../picture/food/omlette2.jpg" alt="picture food number 1 "   />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('omelette');remove_order('omelette');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

                
                 <?php
    echo Price($bdd, "omelette");
    ?>
                    
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('omelette');add_order('omelette');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"omelette"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div>lasagnes<br/> 
        <img src="../picture/food/lasagne2.jpg"  alt="picture food number 2 " />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('lasagnes');remove_order('lasagnes');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">  

                
                 <?php
                 echo Price($bdd, "lasagnes");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('lasagnes');add_order('lasagnes');"> + </button>
            </div>

             <div class="dessous">
            Les allergenes eventuels : <br/>

             <?php echo Allergene($bdd,"lasagnes"); ?>
             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div>choux verts et rouges avec du tofu <br/> 
        <img src="../picture/food/chou2.jpg" alt="picture food number 3 "  />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('melange de choux');remove_order('melange de choux');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
                
                 <?php
                    echo Price($bdd, "melange de choux");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('melange de choux');add_order('melange de choux');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"melange de choux"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
<div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Brouillade de tofu <br/>
        <img src="../picture/food/brouilard2.jpg" alt="picture food number 4 "  />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('brouillade');remove_order('brouillade');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

              

                 <?php
                 echo Price($bdd, "brouillade");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('brouillade');add_order('brouillade');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"brouillade"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Spaghettis <br/>
        <img src="../picture/food/spagheti2.jpg"  alt="picture food number 5 " />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('spaghettis');remove_order('spaghettis');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

                

                 <?php
                    echo Price($bdd, "spaghettis");
                ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('spaghettis');add_order('spaghettis');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"spaghettis"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Rougail de tofu fumé<br/>
        <img src="../picture/food/rougail2.jpg" alt="picture food number 6 " />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('rougail');remove_order('rougail');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

            

                 <?php
                 echo Price($bdd, "rougail");
                 ?>
                    
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('rougail');add_order('rougail');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"rougail"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>
  


<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Parmentier de lentilles <br/>
        <img src="../picture/food/Parmentier2.jpg" alt="picture food number 7 "  />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('parmentier');remove_order('parmentier');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">


                 <?php
                echo Price($bdd, "parmentier");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('parmentier');add_order('parmentier');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"parmentier"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>


<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Hamburger  <br/>
        <img src="../picture/food/hamburger2.png" alt="picture food number 7 "  />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('hamburger');remove_order('hamburger');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"> 


                 <?php
                 echo Price($bdd, "hamburger");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('hamburger');add_order('hamburger');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"hamburger"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
  <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Paella <br/>
        <img src="../picture/food/parlla2.jpg" alt="picture food number 9 "  />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('paella');remove_order('paella');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">


                 <?php
                 echo Price($bdd, "paella");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('paella');add_order('paella');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"paella"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Curry de légumes  <br/>
        <img src="../picture/food/Curry-Legumes2.jpg" alt="picture food number 10 "   />
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('curry');remove_order('curry');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

                

                 <?php
                 echo Price($bdd, "curry");
                ?>
                 </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('curry');add_order('curry');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"curry"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>



<div class="col-sm-offset-1">

  <h1>   Dessert  </h1>

<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Fraisier   <br/>
        <img src="../picture/dessert/fraisier2.jpg" alt="picture  dessert number 1 "/>
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('fraisier');remove_order('fraisier');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
                

                 <?php
                 echo Price($bdd, "fraisier");
                ?>
                 </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('fraisier');add_order('fraisier');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"fraisier"); ?>

             </div>

        </div>
    </div>
  </div>
 </div>
</div>
</div>


<div class="X">
  <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Cookies <br/>
        <img src="../picture/dessert/cookies2.jpeg" alt="picture  dessert number 2"/>
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('cookies');remove_order('cookies');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
               

                 <?php
                 echo Price($bdd, "cookies");
                 ?>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('cookies');add_order('cookies');" > + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"cookies"); ?>

             </div>

        </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Chesse cake <br/>
        <img src="../picture/dessert/cheese-cake2.jpg" alt="picture  dessert number 3 "/>
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('cheese cake');remove_order('cheese cake');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
               

                 <?php
                 echo Price($bdd, "cheese cake");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('cheese cake');add_order('cheese cake');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"cheese cake"); ?>

             </div>

        </div>
    </div>
  </div>
     </div>
  </div>
  </div>


<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 
        <div> Panacota <br/>
        <img src="../picture/dessert/panacota2.jpg"  alt="picture  dessert number 4 "/>
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('panacota');remove_order('panacota');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
                
                 <?php
                 echo Price($bdd, "panacota");
                 ?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('panacota');add_order('panacota');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"panacota"); ?>

             </div>

        </div>
    </div>
  </div>
     </div>
  </div>
  </div>


<div class="X">
 <div class="row centrer">
  <div class="col-sm-5 col-xs-5">
    <div class="thumbnail"> 

        <div> Entremet <br/>
        <img src="../picture/dessert/entremet2.jpg" alt="picture food number 10 "/>
        <div class="btn-group" role="group">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="remove_cost('entremet');remove_order('entremet');"> - </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">

                 <?php echo Price($bdd, "entremet");?>

                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" onclick="add_cost('entremet');add_order('entremet');"> + </button>
            </div>

             <div class="dessous">
                <br/> Les allergenes eventuels : <br/>

                <?php echo Allergene($bdd,"entremet"); ?>

             </div>

        </div>
    </div>
  </div> 
 </div>
</div>
</div>




</div>

</div>

</div>
<?php include('PiedDePage.php'); ?>
</body>
</html>