<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Article</title>
        <link rel="stylesheet" href="style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>

<?php
$articles =[
    ['nom'=>'cookies', 'prix'=>'100', 'photo'=>'./img/Cookies.jpg'],
    ['nom'=>'madeleines','prix'=>'200', 'photo'=>'./img/Madeleines.jpg'], 
    ['nom'=>'boudoirs','prix'=>'150', 'photo'=>'./img/Boudoirs.jpg'],
];
?>

    <body>
        <div class="body">

            <header>
                <h1>La boutique de la super Mamie <br/>qui était partie acheter des gâteaux</h1>
            </header>
            
            <?php
            /* Pour chaque élément du tableau, on affiche la photo, le nom et le prix */
            foreach($articles as $i){
                echo '<div class="article">';
                	echo '<div class="photo">';
               		echo '<a href="article.php?nom=' . $i['nom'] . '">';
                    echo '<img src="' . $i['photo'] . '"/>';
                    echo '</a>';
               		echo "</div>";
                	echo '<div class="nom">Vous voulez des <strong>' . ($i['nom']) . '</strong> ?';
                	echo "</div>";
                	echo '<div class="prix">Prix : <strong>' . ($i['prix']). ' Simflouz</strong>.';
                	echo "</div>";
                echo "</div>";
            }
            ?>

        </div>
    </body>
</html>