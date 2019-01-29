<?php
echo view('header');
?>

<div>
    <h2>Mon compte</h2>
    <p>Prénom : <?= $getUser->firstname ?></p>
    <p>Nom : <?= $getUser->lastname ?></p>
    <p>Adresses email : <?= $getUser->email ?></p>
</div>


<?php
echo view('footer');
?>