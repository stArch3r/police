<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "unisc_postal_codes".
 *
 * @property int $pcd_id
 * @property int $cou_id
 * @property string $postal_code
 * @property string $post_office
 */
class UniscPostalCodes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unisc_postal_codes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cou_id', 'postal_code', 'post_office'], 'required'],
            [['cou_id'], 'integer'],
            [['postal_code', 'post_office'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pcd_id' => 'Pcd ID',
            'cou_id' => 'Cou ID',
            'postal_code' => 'Postal Code',
            'post_office' => 'Post Office',
        ];
    }
}
