<?php

/**
 * This is the model class for table "carro".
 *
 * The followings are the available columns in table 'carro':
 * @property integer $carroId
 * @property integer $marcaId
 * @property string $carroModelo
 * @property string $carroAno
 * @property string $carroFoto
 * @property string $carroVlr
 * @property integer $carroParcelas
 * @property string $carroVlrTotal
 * @property string $carroDtHr
 * @property integer $userIdCad
 */
class Carro extends CActiveRecord
{
	
    
        public $aCarroParc = array('3'=>'3','6'=>'6','12'=>'12');
     
        
        
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carro';
	}
        

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marcaId, carroModelo, carroAno, carroVlr,carroParcelas, userIdCad', 'required'),
			array('marcaId, carroParcelas, userIdCad', 'numerical', 'integerOnly'=>true),
			array('carroModelo', 'length', 'max'=>300),
			array('carroAno', 'length', 'max'=>4),
                        array('carroFoto', 'file', 'types'=>'jpg,png', 'maxSize'=>1024 * 1024 * 50),
			//array('carroVlr, carroVlrTotal', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('carroId, marcaId, carroModelo, carroAno, carroFoto, carroVlr, carroParcelas, carroVlrTotal, carroDtHr, userIdCad', 'safe', 'on'=>'search'),
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
			'carroId' => 'Carro',
			'marcaId' => 'Marca',
			'carroModelo' => 'Carro Modelo',
			'carroAno' => 'Carro Ano',
			'carroFoto' => 'Carro Foto',
			'carroVlr' => 'Carro Vlr',
			'carroParcelas' => 'Carro Parcelas',
			'carroVlrTotal' => 'Carro Vlr Total',
			'carroDtHr' => 'Carro Dt Hr',
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

		$criteria->compare('carroId',$this->carroId);
		$criteria->compare('marcaId',$this->marcaId);
		$criteria->compare('carroModelo',$this->carroModelo,true);
		$criteria->compare('carroAno',$this->carroAno,true);
		$criteria->compare('carroFoto',$this->carroFoto,true);
		$criteria->compare('carroVlr',$this->carroVlr,true);
		$criteria->compare('carroParcelas',$this->carroParcelas);
		$criteria->compare('carroVlrTotal',$this->carroVlrTotal,true);
		$criteria->compare('carroDtHr',$this->carroDtHr,true);
		$criteria->compare('userIdCad',$this->userIdCad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
