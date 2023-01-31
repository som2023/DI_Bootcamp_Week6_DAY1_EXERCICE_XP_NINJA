<?php
 if(isset($_POST['btnValider']))
 {
    if(!empty($_POST['select_colour'])){  
      $slt= count ($_POST['select_colour']);
      $nom=$_POST['input_nom'];
      echo 'la couleur favorite de '.$nom.' est '.$slt; 
      foreach($_POST['select_colour'] as $name){
        echo '<p>' .$name . '</p>';
      }

    }else{
      echo 'vous devez choisir au moins une couleur';
    }
   
     
 }
 
?>
     