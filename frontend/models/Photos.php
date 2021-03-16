<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "photos".
 *
 * @property int $photoId
 * @property string $imagePath
 * @property int $reportId
 *
 * @property File[] $files
 * @property Report $report
 */
class Photos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagePath', 'reportId'], 'required'],
            [['reportId'], 'integer'],
            [['imagePath'], 'file', 'extensions'=>'jpg,png,jpeg','skipOnEmpty'=>false],
            [['reportId'], 'exist', 'skipOnError' => true, 'targetClass' => Report::className(), 'targetAttribute' => ['reportId' => 'reportId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'photoId' => 'Photo ID',
            'imagePath' => 'Image Path',
            'reportId' => 'Report ID',
        ];
    }

    /**
     * Gets query for [[Files]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['photoId' => 'photoId']);
    }

    /**
     * Gets query for [[Report]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReport()
    {
        return $this->hasOne(Report::className(), ['reportId' => 'reportId']);
    }
}
