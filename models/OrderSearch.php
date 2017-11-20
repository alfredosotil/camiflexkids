<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * OrderSearch represents the model behind the search form about `app\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at', 'shipped', 'active'], 'integer'],
            [['amount', 'ship_name', 'ship_address', 'city', 'state', 'zip', 'country', 'phone', 'fax', 'email', 'shipping', 'tax', 'tracking_number'], 'safe'],
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
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'shipped' => $this->shipped,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'ship_name', $this->ship_name])
            ->andFilterWhere(['like', 'ship_address', $this->ship_address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'shipping', $this->shipping])
            ->andFilterWhere(['like', 'tax', $this->tax])
            ->andFilterWhere(['like', 'tracking_number', $this->tracking_number]);

        return $dataProvider;
    }
}