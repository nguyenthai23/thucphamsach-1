<?php

namespace frontend\modules\content\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "contents".
 *
 * @property integer $id
 * @property string $title
 * @property string $code
 * @property string $url
 * @property string $description
 * @property string $authors
 * @property integer $type
 * @property integer $create_time
 * @property integer $create_by
 * @property integer $update_time
 * @property integer $update_by
 * @property integer $cate_id
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'create_time', 'create_by', 'update_time', 'update_by', 'cate_id'], 'integer'],
            [['title', 'code', 'url', 'authors'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'code' => 'Code',
            'url' => 'Url',
            'description' => 'Description',
            'authors' => 'Authors',
            'type' => 'Type',
            'create_time' => 'Create Time',
            'create_by' => 'Create By',
            'update_time' => 'Update Time',
            'update_by' => 'Update By',
            'cate_id' => 'Cate ID',
        ];
    }
    public function getImages($cate_id)
    {
        $query = "SELECT *
                  FROM contents
                  where cate_id =".$cate_id."
                  and type = 4";
        $images = Yii::$app->db->createCommand($query)->queryAll();
        return $images;
    }
    public function getCate($cate_id)
    {
        $query = "SELECT *
                  FROM categories
                  where id =".$cate_id;
        $cate = Yii::$app->db->createCommand($query)->queryAll();
        return $cate;
    }
}
