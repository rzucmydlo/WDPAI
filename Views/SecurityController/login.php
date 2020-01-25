<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <?php include(dirname(__DIR__).'/Common/head.php'); ?>
    <title>Nitrogen</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../Public/img/nitrogen.svg">
        <img src="../Public/img/pngguru.com.png">
    </div>

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
</div>
</body>
</html>