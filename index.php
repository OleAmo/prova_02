

<h1 style="font:oblique bold 120% cursive">Exemple de prova de funcionament PHP / HTML</h1>
</br>
</br>


<?php

  $fruites=['Tomaquets','Pebrots','Cebes','Patates'];
  echo '<select>';
  foreach ($fruites as $key => $value) {
    echo '<option style="color: black; background-color:yellow; font:sans-serif">'.$value.'</option>';
  }

  echo '</select></br></br></br></br></br></br>';
  echo '<h2 style="font:oblique bold 100% cursive">Any actual: '.(date('Y')).'</h2></br>';

 ?>

 <h1 style="font:oblique bold 90% sans-serif">Muestra del Array de la Variable</h1></br>


 <?php
 print_r($fruites);
 ?>
