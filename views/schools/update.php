<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Schools */

$this->title = Yii::t('app', 'Update_Schools: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Schools'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>
        <p><?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-info']) ?></p>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
