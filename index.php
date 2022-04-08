<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .input-field {
            width: 100%;
            border: solid;
            min-height: 50px;
            margin-bottom: 20px;
        }
        .btn {
            width: 100px;
            height: 50px;
            background-color: #000;
            color: #fff;
        }
    </style>
<body>
    <h1 style="display: flex; justify-content: center; align-items: center;">ADD NOTE</h1>
    <div style="display: flex; justify-content: center; align-items: center;">
    <form action="add.php" method="post">
   
                <input type="text" class="input-field" name="titre" placeholder="Titre" required>
                <textarea name="note" class="input-field" rows="5" placeholder="Note" required></textarea>
                <button type="submit" class="btn">Ajouter</button>
            
    </form>
    <?php echo '<h1> <a href="add.php">check list</a><br> </h1>';
echo '<h1> <a href="logout.php">logout</a></h1>';?>
</div>
    <?php
    session_start();


    ?>
</body>
</html>