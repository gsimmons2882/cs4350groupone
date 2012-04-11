<?php

/**
 * This is the model class for table "{{dealers}}".
 *
 * The followings are the available columns in table '{{dealers}}':
 * @property string $License_Number
 * @property integer $Region
 * @property integer $District
 * @property integer $County
 * @property integer $Type
 * @property string $Expiration
 * @property integer $Sequence_Num
 * @property string $License_Name
 * @property string $Business_Name
 * @property string $Business_Bio
 * @property string $Premise_Address
 * @property string $Premise_City
 * @property string $Premise_State
 * @property integer $Premise_Zip
 * @property string $Mail_Street
 * @property string $Mail_City
 * @property string $Mail_State
 * @property integer $Mail_Zip
 * @property integer $Phone
 * @property string $Issue_Date
 * @property string $Expire_Date
 * @property integer $Accept_Transfers
 * @property double $Transfer_Fee
 */
class Dealer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dealer the static model class
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
		return '{{dealers}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('License_Number, Region, District, County, Type, Expiration, Sequence_Num, License_Name, Premise_Address, Premise_City, Premise_State, Premise_Zip, Mail_Street, Mail_City, Mail_State, Mail_Zip, Phone, Expire_Date', 'required'),
			array('Region, District, County, Type, Sequence_Num, Premise_Zip, Mail_Zip, Phone, Accept_Transfers', 'numerical', 'integerOnly'=>true),
			array('Transfer_Fee', 'numerical'),
			array('License_Number', 'length', 'max'=>15),
			array('Expiration, Premise_State, Mail_State', 'length', 'max'=>2),
			array('License_Name, Business_Name, Premise_Address, Mail_Street', 'length', 'max'=>50),
			array('Premise_City, Mail_City', 'length', 'max'=>30),
			array('Business_Bio, Issue_Date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('License_Number, Region, District, County, Type, Expiration, Sequence_Num, License_Name, Business_Name, Business_Bio, Premise_Address, Premise_City, Premise_State, Premise_Zip, Mail_Street, Mail_City, Mail_State, Mail_Zip, Phone, Issue_Date, Expire_Date, Accept_Transfers, Transfer_Fee', 'safe', 'on'=>'search'),
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
			'License_Number' => 'License Number',
			'Region' => 'Region',
			'District' => 'District',
			'County' => 'County',
			'Type' => 'Type',
			'Expiration' => 'Expiration',
			'Sequence_Num' => 'Sequence Num',
			'License_Name' => 'License Name',
			'Business_Name' => 'Business Name',
			'Business_Bio' => 'Business Bio',
			'Premise_Address' => 'Premise Address',
			'Premise_City' => 'Premise City',
			'Premise_State' => 'Premise State',
			'Premise_Zip' => 'Premise Zip',
			'Mail_Street' => 'Mail Street',
			'Mail_City' => 'Mail City',
			'Mail_State' => 'Mail State',
			'Mail_Zip' => 'Mail Zip',
			'Phone' => 'Phone',
			'Issue_Date' => 'Issue Date',
			'Expire_Date' => 'Expire Date',
			'Accept_Transfers' => 'Accept Transfers',
			'Transfer_Fee' => 'Transfer Fee',
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

		$criteria->compare('License_Number',$this->License_Number,true);
		$criteria->compare('Region',$this->Region);
		$criteria->compare('District',$this->District);
		$criteria->compare('County',$this->County);
		$criteria->compare('Type',$this->Type);
		$criteria->compare('Expiration',$this->Expiration,true);
		$criteria->compare('Sequence_Num',$this->Sequence_Num);
		$criteria->compare('License_Name',$this->License_Name,true);
		$criteria->compare('Business_Name',$this->Business_Name,true);
		$criteria->compare('Business_Bio',$this->Business_Bio,true);
		$criteria->compare('Premise_Address',$this->Premise_Address,true);
		$criteria->compare('Premise_City',$this->Premise_City,true);
		$criteria->compare('Premise_State',$this->Premise_State,true);
		$criteria->compare('Premise_Zip',$this->Premise_Zip);
		$criteria->compare('Mail_Street',$this->Mail_Street,true);
		$criteria->compare('Mail_City',$this->Mail_City,true);
		$criteria->compare('Mail_State',$this->Mail_State,true);
		$criteria->compare('Mail_Zip',$this->Mail_Zip);
		$criteria->compare('Phone',$this->Phone);
		$criteria->compare('Issue_Date',$this->Issue_Date,true);
		$criteria->compare('Expire_Date',$this->Expire_Date,true);
		$criteria->compare('Accept_Transfers',$this->Accept_Transfers);
		$criteria->compare('Transfer_Fee',$this->Transfer_Fee);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}