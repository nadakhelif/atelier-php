<?php
session_start();
if (!isset($_SESSION['notes'])){
    $_SESSION['notes'] = [];
}
if (isset($_POST['titre']) && isset($_POST['note'])){
    $_SESSION['notes'][] = ['titre' => $_POST['titre'], 'note' => $_POST['note']]; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .container {
            max-width: 800px;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
        }
     

   
    </style>
<body>
<div class="container">
<?php
                    foreach ($_SESSION['notes'] as $note):
                ?>
                    <div style="border:solid ">
                        <b><?= $note['titre'] ?></b>
                        <div><?= $note['note'] ?></div>
                    </div>
                <?php
                    endforeach
                ?>
</div>
<?php echo '<h1> <a href="./index.php">add here +</a><br> </h1>';
echo '<h1> <a href="./logout.php">logout</a></h1>';?>
    
</body>
</html>