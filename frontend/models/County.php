<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "county".
 *
 * @property int $countyId
 * @property string $countyName
 *
 * @property Report[] $reports
 */
class County extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'county';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countyName'], 'required'],
            [['countyName'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'countyId' => 'County ID',
            'countyName' => 'County Name',
        ];
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['county' => 'countyId']);
    }
}
