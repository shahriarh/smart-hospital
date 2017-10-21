<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Doctors]].
 *
 * @see Doctors
 */
class DoctorsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Doctors[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Doctors|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
