<?php
/* @var $this yii\web\View */
$this->title = 'Ekv-shop';
?>
<div class="site-index">

    <div class="row">
        <div class="col-md-4">
            <?php foreach($categories as $category): ?>
                <?php if($category->parent_id == null): ?>
                    <div class="row rowcategory" >
                        <div class="col-md-12">
                            <a onClick="subcategory(<?php echo $category->id; ?>)"><h4><?php echo $category->name; ?></h4></a>

                            <div style='display: none;' id="subcategory-<?php echo $category->id; ?>">
                                <?php foreach($category->subcategories as $subcategory): ?>
                                    <div class="">
                                        <a href="<?php echo Yii::$app->urlManager->createUrl(['category', 'id' => $subcategory->id]); ?>"><?php echo $subcategory->name; ?></a>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach; ?>
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <div style="height: 200px;">
                    <h1>Строй-долгострой</h1>
                </div>

                <p class="lead"> У нас вы найдете материалы для любой стройки </p>
            </div>
        </div>
    </div>




</div>
