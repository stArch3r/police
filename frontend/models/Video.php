<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $videoId
 * @property string $video
 * @property int $reportId
 * @property string $createdAt
 *
 * @property File[] $files
 * @property Report $report
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['video', 'reportId'], 'required'],
            [['reportId'], 'integer'],
            [['createdAt'], 'safe'],
            [['video'], 'file', 'extensions'=>'gif,mkv,mp4','skipOnEmpty'=>false],
            [['reportId'], 'exist', 'skipOnError' => true, 'targetClass' => Report::className(), 'targetAttribute' => ['reportId' => 'reportId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'videoId' => 'Video ID',
            'video' => 'Video',
            'reportId' => 'Report ID',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Files]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['videoId' => 'videoId']);
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
