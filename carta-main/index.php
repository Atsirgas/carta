<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./css/styles.css">

</head>
<body>
    


<?php
//comporbar si existe el xml

if (file_exists('xml/carta.xml')) {
    $menus = simplexml_load_file('xml/carta.xml');
} else {
    exit('Error abriendo carta.xml.');
}

?>

<section class="about-area pt-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 mb-60">
                  <div class="section-title text-center">
                     <h4>Nuestro menú</h4>
                  </div>
               </div>
            </div>
            <h1>Entrantes</h1>

<?php
   foreach($menus->menu as $menu){
      if($menu['tipo']=='Entrantes'){

         echo '<div class="row menu_style1">
         <div class="col-md-4">
            <div class="single_menu_list">
               <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
               <div class="menu_content">
                  <h4>' .$menu->plato.'  <span>'.$menu->precio.'</span></h4>
                  <p>'.$menu->descripcion.'</p>
                  <p>'.$menu->calorias.'</p>';
                  //icono de marisco pescado postres
                  if ($menu->caracteristicas=='Marisco'){
                     echo '<img class="icon" src="./img/crab.png" alt="nogluten">';
                  } elseif ($menu->caracteristicas=='Pescado') {
                     echo '<img class="icon" src="./img/fish.png" alt="nogluten">';
                  } elseif ($menu->caracteristicas=='Dulces') {
                     echo '<img class="icon" src="./img/cake.jpg" alt="nogluten">';
                  }
                  //icono gluten no gluten (danny esto es un lio)
                  if ($menu->gluten=='No'){
                     echo '<img class="icon" src="./img/no_gluten.png" alt="nogluten">';
                  } else{
                     echo '<img class="icon" src="./img/gluten.svg" alt="nogluten">';
                  }
               '</div>
            </div>
         </div>';
      }
   }

?>
<br>
<br>
<br>
<br>
<br>
<br>

<h1>Primeros</h1>


<?php

   foreach($menus->menu as $menu){
      if($menu['tipo']=='Primeros'){

         echo '<div class="row menu_style1">
         <div class="col-md-4">
            <div class="single_menu_list">
               <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
               <div class="menu_content">
                  <h4>' .$menu->plato.'  <span>'.$menu->precio.'</span></h4>
                  <p>'.$menu->descripcion.'</p>
                  <p>'.$menu->calorias.'</p>';
                  //icono de marisco pescado postres
                  if ($menu->caracteristicas=='Marisco'){
                     echo '<img class="icon" src="./img/crab.png" alt="nogluten">';
                  } elseif ($menu->caracteristicas=='Pescado') {
                     echo '<img class="icon" src="./img/fish.png" alt="nogluten">';
                  } elseif ($menu->caracteristicas=='Dulces') {
                     echo '<img class="icon" src="./img/cake.jpg" alt="nogluten">';
                  }
                  //icono gluten no gluten (danny esto es un lio)
                  if ($menu->gluten=='No'){
                     echo '<img class="icon" src="./img/no_gluten.png" alt="nogluten">';
                  } else{
                     echo '<img class="icon" src="./img/gluten.svg" alt="nogluten">';
                  }
               '</div>
            </div>
         </div>';
      }
   }

?>

<br>
<br>
<br>
<br>
<br>
<br>

<h1>Postres</h1>


<?php

   foreach($menus->menu as $menu){
      if($menu['tipo']=='Postres'){

         echo '<div class="row menu_style1">
         <div class="col-md-4">
            <div class="single_menu_list">
               <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
               <div class="menu_content">
                  <h4>' .$menu->plato.'  <span>'.$menu->precio.'</span></h4>
                  <p>'.$menu->descripcion.'</p>
                  <p>'.$menu->calorias.'</p>';
                  //icono de marisco pescado postres
                  if ($menu->caracteristicas=='Marisco'){
                     echo '<img class="icon" src="./img/crab.png" alt="nogluten">';
                  } elseif ($menu->caracteristicas=='Pescado') {
                     echo '<img class="icon" src="./img/fish.png" alt="nogluten">';
                  } elseif ($menu->caracteristicas=='Dulces') {
                     echo '<img class="icon" src="./img/cake.jpg" alt="nogluten">';
                  } else {
                     echo '<img class="icon" src="./img/fruit.png" alt="nogluten">';
                  }
                  //icono gluten no gluten (danny esto es un lio)
                  if ($menu->gluten=='No'){
                     echo '<img class="icon" src="./img/no_gluten.png" alt="nogluten">';
                  } else{
                     echo '<img class="icon" src="./img/gluten.svg" alt="nogluten">';
                  }
               '</div>
            </div>
         </div>';
      }
   }

?>

</body>
</html>