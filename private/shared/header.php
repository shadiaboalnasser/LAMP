<?php
    if(!isset($page_title)) {$page_title = 'Projects';}
?>

<!doctype html>

<html lang="en">
<head>
    <title>LAMP <?php echo $page_title;?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/style.css');?>" />
    <script src="<?php echo url_for(  '/scripts/jquery-3.3.1.js') ?>"></script>
</head>

<body>

<header>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo WWW_ROOT . '/pages/index.php';?>">Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo WWW_ROOT . '/pages/new.php';?>">New</a>
        </li>

    </ul>


</header>
