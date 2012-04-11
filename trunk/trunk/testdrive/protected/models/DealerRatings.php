<?php

/**
 * This is the model class for table "{{dealer_ratings}}".
 *
 * The followings are the available columns in table '{{dealer_ratings}}':
 * @property integer $User_ID
 * @property string $DealerNumber
 * @property integer $Star_Rating
 * @property string $Title
 * @property string $Comment
 */
class DealerRatings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DealerRatings the static model class
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
		return '{{dealer_ratings}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('User_ID, DealerNumber, Star_Rating, Title, Comment', 'required'),
			array('User_ID, Star_Rating', 'numerical', 'integerOnly'=>true),
			array('DealerNumber', 'length', 'max'=>15),
			array('Title', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('User_ID, DealerNumber, Star_Rating, Title, Comment', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'User_ID' => 'User',
			'DealerNumber' => 'Dealer Number',
			'Star_Rating' => 'Star Rating',
			'Title' => 'Title',
			'Comment' => 'Comment',
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

		$criteria->compare('User_ID',$this->User_ID);
		$criteria->compare('DealerNumber',$this->DealerNumber,true);
		$criteria->compare('Star_Rating',$this->Star_Rating);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Comment',$this->Comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}