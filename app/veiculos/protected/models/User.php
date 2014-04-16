<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userId
 * @property string $userNm
 * @property string $userPass
 * @property string $userEmail
 * @property string $userTipo
 * @property string $userDtHr
 * @property integer $userIdCad
 */
class User extends CActiveRecord
{
        public $aUserTps = array('F'=>'Funcionário','A'=>'Admin');
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userNm, userPass, userEmail, userTipo, userDtHr, userIdCad', 'required'),
			array('userIdCad', 'numerical', 'integerOnly'=>true),
			array('userNm', 'length', 'max'=>100),
			array('userPass', 'length', 'max'=>500),
			array('userEmail', 'length', 'max'=>150),
			array('userTipo', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userId, userNm, userPass, userEmail, userTipo, userDtHr, userIdCad', 'safe', 'on'=>'search'),
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
			'userId' => 'User',
			'userNm' => 'User Nm',
			'userPass' => 'User Pass',
			'userEmail' => 'User Email',
			'userTipo' => 'User Tipo',
			'userDtHr' => 'User Dt Hr',
			'userIdCad' => 'User Id Cad',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userId',$this->userId);
		$criteria->compare('userNm',$this->userNm,true);
		$criteria->compare('userPass',$this->userPass,true);
		$criteria->compare('userEmail',$this->userEmail,true);
		$criteria->compare('userTipo',$this->userTipo,true);
		$criteria->compare('userDtHr',$this->userDtHr,true);
		$criteria->compare('userIdCad',$this->userIdCad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
