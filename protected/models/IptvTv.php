<?php

/**
 * This is the model class for table "iptv_tv".
 *
 * The followings are the available columns in table 'iptv_tv':
 * @property integer $id_tv
 * @property string $tv_name
 * @property string $tv_src
 * @property string $tv_logo_src
 * @property string $tv_desc
 */
class IptvTv extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IptvTv the static model class
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
		return 'iptv_tv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tv_name, tv_src, tv_logo_src', 'required'),
			array('tv_name', 'length', 'max'=>100),
			array('tv_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tv, tv_name, tv_src, tv_logo_src, tv_desc', 'safe', 'on'=>'search'),
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
			'id_tv' => 'Id Tv',
			'tv_name' => 'Tv Name',
			'tv_src' => 'Tv Src',
			'tv_logo_src' => 'Tv Logo Src',
			'tv_desc' => 'Tv Desc',
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

		$criteria->compare('id_tv',$this->id_tv);
		$criteria->compare('tv_name',$this->tv_name,true);
		$criteria->compare('tv_src',$this->tv_src,true);
		$criteria->compare('tv_logo_src',$this->tv_logo_src,true);
		$criteria->compare('tv_desc',$this->tv_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getAllTvs() {
		return $this->findAll();
	}
}