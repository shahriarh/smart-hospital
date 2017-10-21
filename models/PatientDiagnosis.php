<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient_diagnosis".
 *
 * @property integer $id
 * @property integer $diagnosis_id
 * @property integer $prescription_id
 * @property string $created_at
 * @property integer $patient_id
 * @property string $status
 * @property resource $report
 *
 * @property Diagnosis $diagnosis
 * @property Prescription $prescription
 * @property Patient $patient
 */
class PatientDiagnosis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient_diagnosis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diagnosis_id', 'prescription_id', 'patient_id'], 'required'],
            [['diagnosis_id', 'prescription_id', 'patient_id'], 'integer'],
            [['created_at'], 'safe'],
            [['status', 'report'], 'string'],
            [['diagnosis_id'], 'exist', 'skipOnError' => true, 'targetClass' => Diagnosis::className(), 'targetAttribute' => ['diagnosis_id' => 'id']],
            [['prescription_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prescription::className(), 'targetAttribute' => ['prescription_id' => 'appointment_id']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'diagnosis_id' => 'Diagnosis ID',
            'prescription_id' => 'Prescription ID',
            'created_at' => 'Created At',
            'patient_id' => 'Patient ID',
            'status' => 'Status',
            'report' => 'Report',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosis()
    {
        return $this->hasOne(Diagnosis::className(), ['id' => 'diagnosis_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescription()
    {
        return $this->hasOne(Prescription::className(), ['appointment_id' => 'prescription_id']);
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
     * @return PatientDiagnosisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PatientDiagnosisQuery(get_called_class());
    }
}
