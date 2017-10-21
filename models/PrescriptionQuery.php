<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Prescription]].
 *
 * @see Prescription
 */
class PrescriptionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Prescription[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Prescription|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
