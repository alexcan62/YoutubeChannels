<?php
$client = new Google_Client();
$client->setDeveloperKey(KEY);
$youtube = new Google_Service_YouTube($client);
$channel = $youtube->channels->listChannels('snippet,contentDetails,statistics', ['id' => 'UCj_iGliGCkLcHSZ8eqVNPDQ'])['items'][0];
?>

<h1>Chaîne : <em><?= $channel['snippet']['title'] ?></em></h1><hr>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">Informations générales</div>
            <div class="panel-body">
                <p class="text-muted">Description : <?= nl2br($channel['snippet']['description']) ?></p>
                <?php if(isset($channel['snippet']['customUrl'])): ?>
                    <p class="text-muted">URL personnalisé : https://www.youtube.com/user/<?= $channel['snippet']['customUrl'] ?></p>
                <?php endif; ?>
                <p class="text-muted">Incrit depuis le : <?= (new DateTime($channel['snippet']['publishedAt']))->format('d/m/Y') ?></p>
                <p class="text-muted">Pays : <?= $channel['snippet']['country'] ?></p>
                <p class="text-muted">Nombres de vues : <?= $channel['statistics']['viewCount'] ?></p>
                <p class="text-muted">Nombres de commentaires : <?= $channel['statistics']['commentCount'] ?></p>
                <p class="text-muted">Nombres d'abonnés : <?= $channel['statistics']['subscriberCount'] ?></p>
                <p class="text-muted">Nombres de vidéos : <?= $channel['statistics']['videoCount'] ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Illustration de la chaîne</div>
            <div class="panel-body">
                <img src="<?= $channel['snippet']['thumbnails']['high']['url'] ?>" width="50%">
            </div>
        </div>
    </div>
</div>