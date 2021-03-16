<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $reportId
 * @property string $firstName
 * @property string $title
 * @property string $secondName
 * @property string $description
 * @property string $createdAt
 * @property string $file
 * @property int $county
 * @property int $country
 * @property string $tags
 *
 * @property Photos[] $photos
 * @property Countries $country0
 * @property County $county0
 * @property Video[] $videos
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'title', 'secondName', 'description', 'file', 'county', 'country', 'tags'], 'required'],
            [['createdAt'], 'safe'],
            [['county', 'country'], 'integer'],
            [['firstName', 'secondName'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 400],
            [['file', 'tags'], 'string', 'max' => 255],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country' => 'countryId']],
            [['county'], 'exist', 'skipOnError' => true, 'targetClass' => County::className(), 'targetAttribute' => ['county' => 'countyId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reportId' => 'Report ID',
            'title' => 'Title',
            'firstName' => 'First Name',
            'secondName' => 'Second Name',
            'description' => 'Description',
            'createdAt' => 'Created At',
            'file' => 'File',
            'county' => 'County',
            'country' => 'Country',
            'tags' => 'Tags',
        ];
    }

    /**
     * Gets query for [[Photos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photos::className(), ['reportId' => 'reportId']);
    }

    /**
     * Gets query for [[Country0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(Countries::className(), ['countryId' => 'country']);
    }

    /**
     * Gets query for [[County0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCounty0()
    {
        return $this->hasOne(County::className(), ['countyId' => 'county']);
    }

    /**
     * Gets query for [[Videos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['reportId' => 'reportId']);
    }
}
