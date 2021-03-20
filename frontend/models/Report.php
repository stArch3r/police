<?php

namespace frontend\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "report".
 *
 * @property int $reportId
 * @property int $userId
 * @property string $title
 * @property string $description
 * @property string $createdAt
 * @property int $county
 * @property int $country
 * @property string $tags
 *
 * @property Photos[] $photos
 * @property Countries $country0
 * @property County $county0
 * @property User $user
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

    public static function find()
    {
        return new \common\models\query\ReportQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'title', 'description', 'county', 'country', 'tags'], 'required'],
            [['userId', 'county', 'country'], 'integer'],
            [['description'], 'string'],
            [['createdAt'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['tags'], 'string', 'max' => 255],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country' => 'countryId']],
            [['county'], 'exist', 'skipOnError' => true, 'targetClass' => County::className(), 'targetAttribute' => ['county' => 'countyId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reportId' => 'Report ID',
            'userId' => 'User ID',
            'title' => 'Title',
            'description' => 'Description',
            'createdAt' => 'Created At',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
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
