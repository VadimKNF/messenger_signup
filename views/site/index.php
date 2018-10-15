<?php
use yii\helpers\Html;

echo Html::beginForm(['/site/logout'], 'post')
    . Html::submitButton(
        'Logout (' . Yii::$app->user->identity->username . ')',
        ['class' => 'btn btn-warning logout']
    )
    . Html::endForm();
?>
<main>
<?= "Эта страница должна быть видна только зарегистрированным пользователям"?>
<ul class="list-group">
    <?php
    foreach ($users as $user) {
        ?>
        <li class="list-group-item"><?= $user["name"] ?></li>
        <?php
    }
    ?>
</ul>
</main>
