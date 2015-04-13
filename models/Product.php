<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $description
 * @property string $price
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 128],
            [['img'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'name' => 'Наименование продукта',
            'description' => 'Описание',
            'price' => 'Цена',
            'img' => 'Картинка',
        ];
    }

    public function getAttributes()
    {
        return ProductAttribute::find()
            ->where(['product_id' => $this->id])
            ->all();
    }

    public function getCategory()
    {
        return Category::find()
            ->where(['id' => $this->category_id])
            ->one();
    }
}
