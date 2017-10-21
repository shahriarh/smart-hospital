<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnosis".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 *
 * @property PatientDiagnosis[] $patientDiagnoses
 */
class Diagnosis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientDiagnoses()
    {
        return $this->hasMany(PatientDiagnosis::className(), ['diagnosis_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return DiagnosisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DiagnosisQuery(get_called_class());
    }
}
