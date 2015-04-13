<?php
/* @var $this yii\web\View */
$this->title = 'Категории';
?>
<div class="category-index">

	<h1>Продукты</h1>

	<?php foreach($products as $product): ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success">
					<h2><?php echo $product->name; ?></h2>
					<div class="badge badge-inverse">Стоимость: <?php echo $product->price; ?></div>
                    <?php echo $product->description; ?>
                    <img src="<?php echo $product->img; ?>" />

<<<<<<< HEAD
                    <img src="<?php echo $product->img; ?>" />

=======
>>>>>>> origin/master
                    <div class="lera_2">
                        <?php foreach($product->attributes as $attribute): ?>
                        <div class="">
                            <?php echo $attribute->name; ?>: <?php echo $attribute->value; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>

					<a class='btn btn-success' href="<?php echo Yii::$app->urlManager->createUrl(['basket/put', 'id' => $product->id]) ; ?>">В корзину</a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div>
