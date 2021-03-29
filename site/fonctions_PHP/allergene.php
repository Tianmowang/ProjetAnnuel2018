	<script type="text/javascript" src="./js/jquery-3.3.1.js"></script>
  <?php

    function Allergene($db, $nom) {

      $statement = $db->prepare('SELECT * FROM Plat WHERE nom = ?');
      $statement->execute([$nom]);
      $data = $statement->fetch();
      if($data['allergene']== FALSE){
        return "Aucuns allergenes";
        ?>
        <script>
        /*
          $function(){
            $('.dessous').addClass('sans');
          }*/
        </script>
        <?php
      }
      else{
        return $data['allergene'];
         ?>
        <script>
          /*$function(){
            $('.dessous').removeClass('sans');
          }*/
        </script>
        <?php
      }
      
      
    }
    
    ?>

