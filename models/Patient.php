<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $nid
 *
 * @property Appointment[] $appointments
 * @property PatientDiagnosis[] $patientDiagnoses
 * @property Prescription[] $prescriptions
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['nid'], 'string', 'max' => 200],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['id' => 'id']],
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
            'age' => 'Age',
            'nid' => 'Nid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::className(), ['patient_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientDiagnoses()
    {
        return $this->hasMany(PatientDiagnosis::className(), ['patient_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescriptions()
    {
        return $this->hasMany(Prescription::className(), ['patient_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PatientQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PatientQuery(get_called_class());
    }
}
