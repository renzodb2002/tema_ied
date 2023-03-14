<?php 
/**
 * header
 * 
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Cardo|Montserrat:400,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
<header class="site-header" role="banner">
    <div class="header-inner section-inner">

        <div class="site-header__logo">
            <a href="/ied">
                Hello, I'm a WordPress Site
            </a>
        </div>

        <nav class="site-header__nav">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>