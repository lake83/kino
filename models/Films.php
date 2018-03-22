<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property string $year
 * @property string $country
 * @property string $genre
 * @property string $director
 * @property string $seo_key
 * @property string $seo_description
 * @property int $is_active
 * @property int $created_at
 * @property int $updated_at
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'films';
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description', 'seo_description'], 'string'],
            [['is_active', 'created_at', 'updated_at'], 'integer'],
            [['title', 'slug', 'seo_key'], 'string', 'max' => 255],
            [['genre', 'image', 'country', 'director'], 'string', 'max' => 100],
            [['year'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'slug' => 'Алиас',
            'description' => 'Описание',
            'image' => 'Изображение',
            'year' => 'Год',
            'country' => 'Страна',
            'genre' => 'Жанр',
            'director' => 'Режисер',
            'seo_key' => 'Ключевые слова (SEO)',
            'seo_description' => 'Описание (SEO)',
            'is_active' => 'Активно',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен'
        ];
    }
}
