<?php

/**
 * This is the model class for table "iptv_vid".
 *
 * The followings are the available columns in table 'iptv_vid':
 * @property integer $id_vid
 * @property string $vid_name
 * @property string $vid_src
 * @property string $vid_cover_src
 * @property string $duration
 * @property string $vid_desc
 */
class IptvVid extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IptvVid the static model class
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
		return 'iptv_vid';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vid_name, vid_src, vid_cover_src', 'required'),
			array('vid_name', 'length', 'max'=>100),
			array('duration, vid_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vid, vid_name, vid_src, vid_cover_src, duration, vid_desc', 'safe', 'on'=>'search'),
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
			'id_vid' => 'Id Vid',
			'vid_name' => 'Vid Name',
			'vid_src' => 'Vid Src',
			'vid_cover_src' => 'Vid Cover Src',
			'duration' => 'Duration',
			'vid_desc' => 'Vid Desc',
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

		$criteria->compare('id_vid',$this->id_vid);
		$criteria->compare('vid_name',$this->vid_name,true);
		$criteria->compare('vid_src',$this->vid_src,true);
		$criteria->compare('vid_cover_src',$this->vid_cover_src,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('vid_desc',$this->vid_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getAllVideos() {
		return $this->findAll();
	}
}