<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductAttribute */

$this->title = 'Обновить атрибут продуктов: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Attributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="product-attribute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
