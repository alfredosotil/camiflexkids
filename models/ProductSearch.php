<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'category_id', 'created_at', 'updated_at', 'active'], 'integer'],
            [['name', 'sku', 'price', 'weight', 'color', 'cart_desc', 'short_desc', 'long_desc', 'thumb', 'image'], 'safe'],
            [['stock'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     * @return ActiveDataProvider
     */
    public function search($params) {
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'stock' => $this->stock,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'sku', $this->sku])
                ->andFilterWhere(['like', 'price', $this->price])
                ->andFilterWhere(['like', 'weight', $this->weight])
                ->andFilterWhere(['like', 'color', $this->color])
                ->andFilterWhere(['like', 'cart_desc', $this->cart_desc])
                ->andFilterWhere(['like', 'short_desc', $this->short_desc])
                ->andFilterWhere(['like', 'long_desc', $this->long_desc])
                ->andFilterWhere(['like', 'thumb', $this->thumb])
                ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }

}
