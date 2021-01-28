<!DOCTYPE html>
<html lang="eng">

<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
    
    <?php include(dirname(__DIR__).'head.php'); ?>
    <title>Nitrogen</title>
    <meta name="description" content="We can help you track your cycle!"/>
    <meta name="keywords" content="period, cycle, menstruate, woman's body"/>
</head>

<body>
<div class="container">
<a title="Nitrogen"> <!-- napis Nitrogen po najechaniu -->
    <div class="logo">
        <img src="../Public/img/nitrogen.svg">
        <img src="../Public/img/pngguru.com.png">
    </div>
</a>
    <div class="content">
    </div>

    
    <form action="?page=login" method="POST">
        <div class="messages">
            <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
            ?>
        </div>

        <input name="Name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email@email.com">
        <input name="password" type="password" placeholder="password">
        
    <div class="twobuttons"> 
    <button type="submit">REGISTER</button>
        <button type="submit">LOG IN</button>
    </div>

    </form>
</div> <!-- koniec div container -->
</body>
</html>