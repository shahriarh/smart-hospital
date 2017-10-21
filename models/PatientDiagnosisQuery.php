<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PatientDiagnosis]].
 *
 * @see PatientDiagnosis
 */
class PatientDiagnosisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PatientDiagnosis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PatientDiagnosis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
