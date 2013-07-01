<?php

/**
 * This is the model class for table "iptv_book".
 *
 * The followings are the available columns in table 'iptv_book':
 * @property integer $id_book
 * @property string $book_name
 * @property string $book_src
 * @property string $book_cover_src
 * @property string $book_desc
 * @property integer $pages
 */
class IptvBook extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IptvBook the static model class
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
		return 'iptv_book';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('book_name, book_src, book_cover_src, pages', 'required'),
			array('pages', 'numerical', 'integerOnly'=>true),
			array('book_name', 'length', 'max'=>100),
			array('book_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_book, book_name, book_src, book_cover_src, book_desc, pages', 'safe', 'on'=>'search'),
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
			'id_book' => 'Id Book',
			'book_name' => 'Book Name',
			'book_src' => 'Book Src',
			'book_cover_src' => 'Book Cover Src',
			'book_desc' => 'Book Desc',
			'pages' => 'Pages',
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

		$criteria->compare('id_book',$this->id_book);
		$criteria->compare('book_name',$this->book_name,true);
		$criteria->compare('book_src',$this->book_src,true);
		$criteria->compare('book_cover_src',$this->book_cover_src,true);
		$criteria->compare('book_desc',$this->book_desc,true);
		$criteria->compare('pages',$this->pages);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}