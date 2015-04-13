<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body background="/images/46.png">



<div id="header">
    <img src="/images/header.png" alt="Шапка" />
    <div>
        <p class="blue"><br/><br/><br/> <br/> Время работы:  <br/> с 08:00 до 20:00</p>
        <p style="text-align: center; position: relative; top: -10px;" id="time"></p>
    </div>

</div>



<?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([

            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'myimage',
            ],
        ]);

	        $items = [
		        ['label' => 'Главная', 'url' => ['/site/index']],
		        ['label' => 'Контакты', 'url' => ['/site/about']],
		        ['label' => 'Обратная связь', 'url' => ['/site/contact']],
		        Yii::$app->user->isGuest ?
			        ['label' => 'Войти', 'url' => ['/site/login']] :
			        ['label' => 'Выход (' . Yii::$app->user->identity->username . ')',
				        'url' => ['/site/logout'],
				        'linkOptions' => ['data-method' => 'post']],
	        ];

            if(!Yii::$app->user->isGuest && Yii::$app->user->identity->is_admin)
            {
                $items[] = ['label' => 'Заказы', 'url' => ['/orders']];
                $items[] = ['label' => 'Пользователи', 'url' => ['/admin-user']];
                $items[] = ['label' => 'Корзина', 'url' => ['/admin-basket-product']];
                $items[] = ['label' => 'Категории', 'url' => ['/admin-category']];
                $items[] = ['label' => 'Товары', 'url' => ['/admin-product']];
                $items[] = ['label' => 'Данные о товарах', 'url' => ['/admin-product-attribute']];
                $items[] = ['label' => 'Типы данных', 'url' => ['/admin-product-attribute-type']];
            }

            if(!Yii::$app->user->isGuest)
            {
                $items[] = ['label' => 'Моя Корзина', 'url' => ['/basket']];
            }
        else
        {
            $items[] = ['label' => 'Регистрация', 'url' => ['/site/register']];
        }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $items,
            ]);
            NavBar::end();
        ?>

        <div class="container">

            <?= Breadcrumbs::widget([
                'homeLink' => [
                    'url' => '/',
                    'label' => 'Главная страница',
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; Строй-долгострой <?= date('Y') ?></p>
            <p class="pull-right"><?= 'by Ekvilib' ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
