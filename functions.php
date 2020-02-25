<?php

function afficheArticle($nom, $prix, $photo)
{
	echo '<div class="article">';
		echo '<div class="photo">';
	    echo '<img src="' . $photo . '"/>';
			echo "</div>";
		echo '<div class="nom">Vous voulez des <strong>' . $nom . '</strong> ?';
		echo "</div>";
		echo '<div class="prix">Prix : <strong>' . $prix. ' Simflouz</strong>.';
		echo "</div>";
	echo "</div>";
}

?>