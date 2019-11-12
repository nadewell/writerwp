<!DOCTYPE html>
<html <?php language_attributes(); //language_attributes echo the language type for the html, "en" for English ?>> 
<head>
    <meta charset="<?php bloginfo( 'charset' ); //bloginfo gives details about the website. charset is the paramter used to get output of the website charset value.?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); // wp_head returns all the css and js scripts that are enqueued in functions.php ?>
</head>
<body <?php body_class(); ?>>
    <h2>Hello, This is the writer wordpress theme.</h2>
    <?php wp_footer(); //just like head tag we also enter scripts just before body tag ending. so wp_footer returns all scripts that are enqueued in functions.php to be placed in footer. ?>
</body>
</html>