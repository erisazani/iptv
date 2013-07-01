<?php

/**
 * This is the model class for table "iptv_acc".
 *
 * The followings are the available columns in table 'iptv_acc':
 * @property integer $id_acc
 * @property string $username
 * @property string $password
 * @property integer $is_cont_admin
 * @property integer $is_order_admin
 * @property string $room_no
 */
class IptvAcc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IptvAcc the static model class
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
		return 'iptv_acc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
			array('is_cont_admin, is_order_admin', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('room_no', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_acc, username, password, is_cont_admin, is_order_admin, room_no', 'safe', 'on'=>'search'),
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
			'id_acc' => 'Id Acc',
			'username' => 'Username',
			'password' => 'Password',
			'is_cont_admin' => 'Is Cont Admin',
			'is_order_admin' => 'Is Order Admin',
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

		$criteria->compare('id_acc',$this->id_acc);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('is_cont_admin',$this->is_cont_admin);
		$criteria->compare('is_order_admin',$this->is_order_admin);
		$criteria->compare('room_no',$this->room_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}