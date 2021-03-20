<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\frontend\models\Report]].
 *
 * @see \frontend\models\Report
 */
class ReportQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \frontend\models\Report[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }
    public function latest()
    {
        return $this->orderBy(['createdAt' => SORT_DESC]);
    }
    
    public function byKeyword($keyword)
    {
        return $this->andWhere("MATCH(title, tags)
        AGAINST (:keyword)", ['keyword' => $keyword]);
    }
//  public function findOne($reportId)
//  {
     
//      $report = Report::findOne($reportId);
//         return $this->render('report', ['reports'=>$report]);
//  }
    /**
     * {@inheritdoc}
     * @return \frontend\models\Report|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
