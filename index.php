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
    
<section class="about-area pt-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 mb-60">
                  <div class="section-title text-center">
                     <h4>Nuestro menú</h4>
                  </div>
               </div>
            </div>
            <div class="row menu_style1">
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-6.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-5.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-4.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-3.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="single_menu_list">
                     <img src="http://infinityflamesoft.com/html/restarunt-preview/assets/img/menu/menu-2.jpg" alt="">
                     <div class="menu_content">
                        <h4>Chicken Fried Salad  <span>$45</span></h4>
                        <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row pb-60">
               <div class="col-xl-12 text-center">
                  <div class="box_btn">
                     <a href="#">load more</a>
                  </div>
               </div>
            </div>
         </div>
      </section>



<?php

if (file_exists('xml/carta.xml')) {
    $menus = simplexml_load_file('xml/carta.xml');
} else {
    exit('Error abriendo carta.xml.');
}

                $aux=[];
                foreach($menus->menu as $menu){
                    if(!in_array((string)$menu['tipo'],$aux)){
                        //echo '<li class="nav-item">';
                        // if (isset($_GET['tipo'])) {
                        // if($_GET['tipo']==$menu['tipo']){
                        //   echo $menu['tipo'].'">'.$menu['tipo'];
                        // } else {
                        //   echo $menu['tipo'].'">'.$menu['tipo'];
                        // }} else {
                        //   echo $menu['tipo'].'">'.$menu['tipo'];
                        // }
                        // echo '<a class="nav-link" aria-current="page" href="?cine='.$film['cine'].'">'.$film['cine'].'</a>';
                        //echo '</li>';
                        array_push($aux,(string)$menu['tipo']);
                    }
                }


?>

</body>
</html>