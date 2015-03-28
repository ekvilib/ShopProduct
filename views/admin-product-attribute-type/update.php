<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductAttributeType */

$this->title = 'Редактирование типа атрибутов продуктов: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Типы атрибутов продуктов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="product-attribute-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
