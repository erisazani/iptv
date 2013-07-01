<?php

/**
 * This is the model class for table "iptv_order".
 *
 * The followings are the available columns in table 'iptv_order':
 * @property integer $id_order
 * @property integer $id_acc
 * @property string $order_time
 * @property string $order_date
 * @property string $user_phone
 * @property string $room_no
 */
class IptvOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IptvOrder the static model class
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
		return 'iptv_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_acc, order_time, order_date, user_phone', 'required'),
			array('id_acc', 'numerical', 'integerOnly'=>true),
			array('user_phone', 'length', 'max'=>20),
			array('room_no', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_order, id_acc, order_time, order_date, user_phone, room_no', 'safe', 'on'=>'search'),
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
			'id_order' => 'Id Order',
			'id_acc' => 'Id Acc',
			'order_time' => 'Order Time',
			'order_date' => 'Order Date',
			'user_phone' => 'User Phone',
			'room_no' => 'Room No',
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

		$criteria->compare('id_order',$this->id_order);
		$criteria->compare('id_acc',$this->id_acc);
		$criteria->compare('order_time',$this->order_time,true);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('user_phone',$this->user_phone,true);
		$criteria->compare('room_no',$this->room_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}