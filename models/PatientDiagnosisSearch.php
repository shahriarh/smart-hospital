<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PatientDiagnosis;

/**
 * PatientDiagnosisSearch represents the model behind the search form about `app\models\PatientDiagnosis`.
 */
class PatientDiagnosisSearch extends PatientDiagnosis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'diagnosis_id', 'prescription_id', 'patient_id'], 'integer'],
            [['created_at', 'status', 'report'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PatientDiagnosis::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'diagnosis_id' => $this->diagnosis_id,
            'prescription_id' => $this->prescription_id,
            'created_at' => $this->created_at,
            'patient_id' => $this->patient_id,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'report', $this->report]);

        return $dataProvider;
    }
}
