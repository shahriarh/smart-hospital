<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prescription".
 *
 * @property integer $appointment_id
 * @property integer $patient_id
 * @property string $diseases
 * @property string $Rx
 * @property string $indication
 * @property string $advices
 * @property string $first_visit_date
 * @property string $revisit_date
 *
 * @property PatientDiagnosis[] $patientDiagnoses
 * @property Appointment $appointment
 * @property Patient $patient
 */
class Prescription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prescription';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['appointment_id', 'patient_id', 'diseases'], 'required'],
            [['appointment_id', 'patient_id'], 'integer'],
            [['diseases', 'Rx', 'indication', 'advices'], 'string'],
            [['first_visit_date', 'revisit_date'], 'safe'],
            [['appointment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Appointment::className(), 'targetAttribute' => ['appointment_id' => 'id']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appointment_id' => 'Appointment ID',
            'patient_id' => 'Patient ID',
            'diseases' => 'Diseases',
            'Rx' => 'Rx',
            'indication' => 'Indication',
            'advices' => 'Advices',
            'first_visit_date' => 'First Visit Date',
            'revisit_date' => 'Revisit Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatientDiagnoses()
    {
        return $this->hasMany(PatientDiagnosis::className(), ['prescription_id' => 'appointment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointment()
    {
        return $this->hasOne(Appointment::className(), ['id' => 'appointment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient_id']);
    }

    /**
     * @inheritdoc
     * @return PrescriptionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PrescriptionQuery(get_called_class());
    }
}
