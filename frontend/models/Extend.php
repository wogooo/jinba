<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%extend}}".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $background_objectives
 * @property string $try_result
 * @property string $difficult
 * @property string $need_help
 * @property integer $information
 * @property integer $create_time
 * @property integer $update_time
 */
class Extend extends ActiveRecord {
	/**
	 * @inheritdoc
	 */
	public static function tableName() {
		return '{{%extend}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			//[['uid', 'background_objectives', 'try_result', 'difficult', 'need_help', 'information', 'create_time', 'update_time'], 'required'],
			[['uid', 'create_time', 'update_time'], 'integer'],
			[['background_objectives', 'try_result', 'difficult', 'need_help'], 'string'],
			[['information'], 'match', 'pattern' => '/(\d(,\d)*)?/is'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'uid' => 'Uid',
			'background_objectives' => '创新背景及期望目标',
			'try_result' => '创新尝试及结果',
			'difficult' => '过程中遇到的困难',
			'need_help' => '你需要的帮助',
			'information' => '相关资料提供1.照片 2.视频 3.媒体报到 4.其他',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		];
	}
}
