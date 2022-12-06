<?php foreach ($notifications as $notification) { ?>
    <div>Title : <?= $notification->title ?></div>
    <div>Message : <?= $notification->message ?></div>
    <div>Link : <?= $notification->link ?></div>
    <hr>
<?php } ?>
