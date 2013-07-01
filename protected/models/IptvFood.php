<?php

/**
 * This is the model class for table "iptv_food".
 *
 * The followings are the available columns in table 'iptv_food':
 * @property integer $id_food
 * @property string $food_name
 * @property string $food_pic_src
 * @property string $food_desc
 * @property integer $food_price
 */
class IptvFood extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IptvFood the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'iptv_food';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('food_name, food_pic_src', 'required'),
			array('food_price', 'numerical', 'integerOnly'=>true),
			array('food_name', 'length', 'max'=>50),
			array('food_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_food, food_name, food_pic_src, food_desc, food_price', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_food' => 'Id Food',
			'food_name' => 'Food Name',
			'food_pic_src' => 'Food Pic Src',
			'food_desc' => 'Food Desc',
			'food_price' => 'Food Price',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_food',$this->id_food);
		$criteria->compare('food_name',$this->food_name,true);
		$criteria->compare('food_pic_src',$this->food_pic_src,true);
		$criteria->compare('food_desc',$this->food_desc,true);
		$criteria->compare('food_price',$this->food_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}