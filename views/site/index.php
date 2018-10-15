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
</main>
