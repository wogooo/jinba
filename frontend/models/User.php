<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $gender
 * @property string $birthday
 * @property string $mobile
 * @property string $email
 * @property string $social
 * @property integer $type
 * @property integer $create_time
 * @property integer $update_time
 */
class User extends ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%user}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['gender', 'birthday', 'mobile', 'type'], 'required'],
			[['gender', 'create_time', 'update_time'], 'integer'],
			[['birthday'], 'safe'],
			[['type'], 'match', 'pattern' => '/\d(,\d)*/is'],
			[['email'], 'email'],
			[['name', 'social'], 'string', 'max' => 100],
			[['mobile'], 'string', 'max' => 15],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => '姓名',
			'gender' => '性别 1.女 2.男',
			'birthday' => '出生日期',
			'mobile' => '手机',
			'email' => '邮箱',
			'social' => '微信微博',
			'type' => '类型 1.企业创始人 2.私营企业主 3.个体户 4.股东 5.外聘高管 6.其他',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		];
	}
}
