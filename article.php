<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Article</title>
        <link rel="stylesheet" href="style.css"/>
    </head>

<?php
$articles =[
    ['nom'=>'cookies', 'prix'=>'100', 'photo'=>'./img/Cookies.jpg'],
    ['nom'=>'madeleines','prix'=>'200', 'photo'=>'./img/Madeleines.jpg'], 
    ['nom'=>'boudoirs','prix'=>'150', 'photo'=>'./img/Boudoirs.jpg'],
];
$existe = false;
$nom = $_GET['nom'];
?>

    <body>
        <div class="body">
            <header>
                <h1>La boutique de la super Mamie <br/>qui était partie acheter des gâteaux</h1>
            </header>

            <?php
                foreach($articles as $i) 
                {          
                    if($i['nom'] == $nom)
                    {
                        $existe = true;
                        echo '<div class="article">';
                            echo '<div class="photo">';
                            echo '<img src="' . $i['photo'] . '"/>';
                            echo "</div>";
                            echo '<div class="nom">Vous voulez des <strong>' . ($i['nom']) . '</strong> ?';
                            echo "</div>";
                            echo '<div class="prix">Prix : <strong>' . ($i['prix']). 'Simflouz</strong>.';
                            echo "</div>";
                        echo "</div>";
                    }
                }
                if (!$existe) echo "Aucun produit séléctionné";    

            ?>
        </div>
    </body>
</html>

