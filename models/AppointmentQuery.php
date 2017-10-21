<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Appointment]].
 *
 * @see Appointment
 */
class AppointmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Appointment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Appointment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
