<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "doctors".
 *
 * @property integer $id
 * @property string $name
 * @property integer $department_id
 * @property string $designation
 * @property string $qualification
 *
 * @property Appointment[] $appointments
 * @property Department $department
 */
class Doctors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'department_id', 'designation', 'qualification'], 'required'],
            [['department_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['designation'], 'string', 'max' => 45],
            [['qualification'], 'string', 'max' => 100],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
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
            'department_id' => 'Department ID',
            'designation' => 'Designation',
            'qualification' => 'Qualification',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::className(), ['doctor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @inheritdoc
     * @return DoctorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DoctorsQuery(get_called_class());
    }
}
