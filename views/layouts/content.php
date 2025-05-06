<?php

use yii\bootstrap5\Alert;
?>

<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <?= Alert::widget(['body' => implode("\n", Yii::$app->session->getFlash('success')), 'options' => ['class' => 'alert-success']]) ?>
<?php endif; ?>
<?= $content ?>
