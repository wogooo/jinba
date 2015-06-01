<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%company}}".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $company
 * @property string $industry
 * @property string $business
 * @property string $product
 * @property string $address
 * @property integer $number
 * @property integer $create_time
 * @property integer $update_time
 */
class Company extends ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%company}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			//[['uid', 'number', 'create_time', 'update_time'], 'required'],
			[['uid', 'number', 'create_time', 'update_time'], 'integer'],
			[['company', 'industry', 'business', 'product'], 'string', 'max' => 100],
			[['address'], 'string', 'max' => 255],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'uid' => 'Uid',
			'company' => 'Company',
			'industry' => 'Industry',
			'business' => 'Business',
			'product' => 'Product',
			'address' => 'Address',
			'number' => 'Number',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		];
	}
}
