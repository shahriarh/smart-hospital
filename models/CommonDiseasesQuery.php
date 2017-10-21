<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CommonDiseases]].
 *
 * @see CommonDiseases
 */
class CommonDiseasesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CommonDiseases[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CommonDiseases|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
