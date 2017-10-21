<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "common_diseases".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property integer $assigned_department
 *
 * @property Appointment[] $appointments
 * @property Department $assignedDepartment
 */
class CommonDiseases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'common_diseases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'assigned_department'], 'required'],
            [['assigned_department'], 'integer'],
            [['name', 'type'], 'string', 'max' => 100],
            [['assigned_department'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['assigned_department' => 'id']],
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
            'type' => 'Type',
            'assigned_department' => 'Assigned Department',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::className(), ['disease_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignedDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'assigned_department']);
    }

    /**
     * @inheritdoc
     * @return CommonDiseasesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommonDiseasesQuery(get_called_class());
    }
}
