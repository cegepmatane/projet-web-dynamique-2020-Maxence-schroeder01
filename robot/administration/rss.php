<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

$MESSAGE_SQL_LISTE_FILM = "SELECT * FROM transformer";

$requeteListeFilms =BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_FILM);
$requeteListeFilms->execute();
$listeFilms = $requeteListeFilms->fetchALL();
//print_r($listeFilms);
?><?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
	<title>Liste des Transformers</title>
	<atom:link href="http://localhost/journal/feed/" rel="self" type="application/rss+xml" />
	<link>http://51.161.33.187/robot/</link>
	<description>Les meilleurs Transformers</description>
	<lastBuildDate>Mon, 10 Ma 2020 18:21:12 +0000	</lastBuildDate>
	<language>fr-CA</language>
	<sy:updatePeriod> hourly	</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<generator>Programmation manuelle</generator>
<?php 
// Si Jamais il y a des erreurs c'est votre aide qui ait mal fichus
	foreach($listeFilms as $film)
	{
	?>
	<item>
		<title><?=$film['titre']?></title>
		<link>http://51.161.33.187/robot/film.php?id=<?=$film['id']?></link>
		<pubDate>Mon, 10 Ma 2020 18:21:12 +0000</pubDate>
		<category><![CDATA[Film]]></category>
		<guid isPermaLink="false">http://51.161.33.187/robot/film.php?id=<?=$film['id']?></guid>
		<description><![CDATA[<?=$film['description']; ?>]]></description>
		<content:encoded><![CDATA[<?=$film['Activite']; ?>]]></content:encoded>
        <content:encoded><![CDATA[<?=$film['origine']; ?>]]></content:encoded>
        <content:encoded><![CDATA[<?=$film['taille']; ?>]]></content:encoded>
        <content:encoded><![CDATA[<?=$film['illustration']; ?>]]></content:encoded>
	</item>
	<?php
	}

?>
							
	</channel>
</rss>
