<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <title>Document</title>
</head>

<body>
     <?php wp_head();?>

     <header>
          <div class="container">
               <?php
          wp_nav_menu(
    array(
                    'theme_location'=>'top-menu',
                    //'menu' => 'Top Bar',
                    'menu_class'=> 'top-bar'
               )
)
          ?>
          </div>
     </header>