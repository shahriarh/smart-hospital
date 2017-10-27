<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property integer $id
 * @property integer $patient_id
 * @property integer $department_id
 * @property integer $disease_id
 * @property string $details
 * @property string $created_at
 * @property string $updated_at
 * @property integer $doctor_id
 *
 * @property Patient $patient
 * @property Department $department
 * @property CommonDiseases $disease
 * @property Doctors $doctor
 * @property Prescription $prescription
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'department_id', 'disease_id', 'details'], 'required'],
            [['patient_id', 'department_id', 'disease_id', 'doctor_id'], 'integer'],
            [['details'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['disease_id'], 'exist', 'skipOnError' => true, 'targetClass' => CommonDiseases::className(), 'targetAttribute' => ['disease_id' => 'id']],
            [['doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::className(), 'targetAttribute' => ['doctor_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'department_id' => 'Department ID',
            'disease_id' => 'Disease ID',
            'details' => 'Details',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'doctor_id' => 'Doctor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisease()
    {
        return $this->hasOne(CommonDiseases::className(), ['id' => 'disease_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctors::className(), ['id' => 'doctor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrescription()
    {
        return $this->hasOne(Prescription::className(), ['appointment_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return AppointmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AppointmentQuery(get_called_class());
    }
}
