<?php

/**
 * This is the model class for table "Persona".
 *
 * The followings are the available columns in table 'Persona':
 * @property string $codigo
 * @property string $nroCi
 * @property string $nombres
 * @property string $apPat
 * @property string $apMat
 * @property string $sexo
 * @property string $fechaNac
 * @property integer $edad
 * @property string $tipoSangre
 * @property string $direccion
 * @property string $grado
 * @property string $especialidad
 * @property string $cargoUnidad
 * @property integer $Clase_id
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, nroCi, nombres, apPat', 'required'),
			array('edad, Clase_id', 'numerical', 'integerOnly'=>true),
			array('codigo, nroCi, nombres, apPat, apMat', 'length', 'max'=>45),
			array('sexo, fechaNac, tipoSangre, grado, especialidad', 'length', 'max'=>10),
			array('direccion', 'length', 'max'=>300),
			array('cargoUnidad', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, nroCi, nombres, apPat, apMat, sexo, fechaNac, edad, tipoSangre, direccion, grado, especialidad, cargoUnidad, Clase_id', 'safe', 'on'=>'search'),
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
			'codigo' => 'Codigo',
			'nroCi' => 'Nro Ci',
			'nombres' => 'Nombres',
			'apPat' => 'Ap Pat',
			'apMat' => 'Ap Mat',
			'sexo' => 'Sexo',
			'fechaNac' => 'Fecha Nac',
			'edad' => 'Edad',
			'tipoSangre' => 'Tipo Sangre',
			'direccion' => 'Direccion',
			'grado' => 'Grado',
			'especialidad' => 'Especialidad',
			'cargoUnidad' => 'Cargo Unidad',
			'Clase_id' => 'Clase',
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

		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('nroCi',$this->nroCi,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apPat',$this->apPat,true);
		$criteria->compare('apMat',$this->apMat,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fechaNac',$this->fechaNac,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('tipoSangre',$this->tipoSangre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('grado',$this->grado,true);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('cargoUnidad',$this->cargoUnidad,true);
		$criteria->compare('Clase_id',$this->Clase_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
