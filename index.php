<?php 
require 'vendor/autoload.php';

use src\entites\Category;
 $category =  new Category();
// $cat =new Category();

 $category->setCategorie( "fcgvhbn,;,jhg");

//  var_dump(value: $cats);
//   $category->getCategoryById(2) ;
 var_dump($category);
 $category->addCategorie();



?>