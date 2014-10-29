<?php

/**
 * This is the model class for table "Aviso".
 *
 * The followings are the available columns in table 'Aviso':
 * @property integer $id
 * @property string $fechaInicio
 * @property string $fechaFin
 * @property string $descripcion
 * @property string $observaciones
 * @property string $tipoAviso
 * @property string $Persona_codigo
 *
 * The followings are the available model relations:
 * @property AlcanceAviso[] $alcanceAvisos
 * @property Persona $personaCodigo
 */
class Aviso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         
        public $Nombres;
        public $ApellidoPaterno;
        public $ApellidoMaterno;
        
        public function tableName()
	{
		return 'Aviso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaInicio, descripcion, tipoAviso, Persona_codigo', 'required'),
			array('fechaInicio, fechaFin', 'length', 'max'=>10),
			array('observaciones', 'length', 'max'=>300),
			array('tipoAviso, Persona_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fechaInicio, fechaFin, descripcion, observaciones, tipoAviso, Persona_codigo,Nombres,ApellidoPaterno,ApellidoMaterno', 'safe', 'on'=>'search'),
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
			'alcanceAvisos' => array(self::HAS_MANY, 'AlcanceAviso', 'Aviso_id'),
			'personaCodigo' => array(self::BELONGS_TO, 'Persona', 'Persona_codigo'),                 
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',                   
			'fechaInicio' => 'Fecha de Inicio',
			'fechaFin' => 'Fecha  Fin',
			'descripcion' => 'Aviso',
			'observaciones' => 'Observaciones',
			'tipoAviso' => 'Tipo de Aviso',
			'Persona_codigo' => 'Persona que Emite',
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
                

		$criteria->compare('id',$this->id);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaFin',$this->fechaFin,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('tipoAviso',$this->tipoAviso,true);
		$criteria->compare('Persona_codigo',$this->Persona_codigo,true);
                
                $criteria->with='personaCodigo';
                $criteria->compare ('personaCodigo.nombres',$this->Nombres,true);
                $criteria->compare ('personaCodigo.apPat',$this->ApellidoPaterno,true);
                $criteria->compare ('personaCodigo.apMat',$this->ApellidoMaterno,true);               

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aviso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
