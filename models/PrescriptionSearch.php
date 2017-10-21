<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Prescription;

/**
 * PrescriptionSearch represents the model behind the search form about `app\models\Prescription`.
 */
class PrescriptionSearch extends Prescription
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['appointment_id', 'patient_id'], 'integer'],
            [['diseases', 'Rx', 'indication', 'advices', 'first_visit_date', 'revisit_date'], 'safe'],
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
        $query = Prescription::find();

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
            'appointment_id' => $this->appointment_id,
            'patient_id' => $this->patient_id,
            'first_visit_date' => $this->first_visit_date,
            'revisit_date' => $this->revisit_date,
        ]);

        $query->andFilterWhere(['like', 'diseases', $this->diseases])
            ->andFilterWhere(['like', 'Rx', $this->Rx])
            ->andFilterWhere(['like', 'indication', $this->indication])
            ->andFilterWhere(['like', 'advices', $this->advices]);

        return $dataProvider;
    }
}
