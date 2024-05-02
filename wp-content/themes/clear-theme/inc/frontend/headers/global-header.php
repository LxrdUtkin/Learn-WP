<!doctype html>
<html lang="en">
<?php global $wp; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<?php
$bodyClasses = ($args['body_classes'] ?? '');
?>
<body <?php body_class($bodyClasses); ?>>

<header class="layout-header">
    <div class="wrapper">
        <div class="logo-wrapper">
            <img src="wp-content/themes/lacoste.jpg">
        </div>
        <?php
            wp_nav_menu($args = array(
                'menu' => 'Header Menu',
                'menu_class' => 'header-menu',
                'container' => 'div',
                'container_class' => 'main-menu',
            ))
        ?>
    </div>
</header>