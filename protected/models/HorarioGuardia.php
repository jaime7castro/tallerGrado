<?php

/**
 * This is the model class for table "HorarioGuardia".
 *
 * The followings are the available columns in table 'HorarioGuardia':
 * @property integer $ServicioGuardia_id
 * @property integer $id
 * @property string $horaInicio
 * @property string $horaFin
 * @property string $Persona_codigo
 * @property integer $PuestoGuardia_id
 *
 * The followings are the available model relations:
 * @property PuestoGuardia $puestoGuardia
 * @property Persona $personaCodigo
 * @property ServicioGuardia $servicioGuardia
 */
class HorarioGuardia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'HorarioGuardia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ServicioGuardia_id, horaInicio, horaFin, Persona_codigo, PuestoGuardia_id', 'required'),
			array('ServicioGuardia_id, PuestoGuardia_id', 'numerical', 'integerOnly'=>true),
			array('horaInicio, horaFin', 'length', 'max'=>10),
			array('Persona_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ServicioGuardia_id, id, horaInicio, horaFin, Persona_codigo, PuestoGuardia_id', 'safe', 'on'=>'search'),
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
			'puestoGuardia' => array(self::BELONGS_TO, 'PuestoGuardia', 'PuestoGuardia_id'),
			'personaCodigo' => array(self::BELONGS_TO, 'Persona', 'Persona_codigo'),
			'servicioGuardia' => array(self::BELONGS_TO, 'ServicioGuardia', 'ServicioGuardia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ServicioGuardia_id' => 'Servicio de Guardia',
			'id' => 'ID',
			'horaInicio' => 'Hora Inicio',
			'horaFin' => 'Hora Fin',
			'Persona_codigo' => 'Código de Persona',
			'PuestoGuardia_id' => 'Puesto de Guardia',
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

		$criteria->compare('ServicioGuardia_id',$this->ServicioGuardia_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('horaInicio',$this->horaInicio,true);
		$criteria->compare('horaFin',$this->horaFin,true);
		$criteria->compare('Persona_codigo',$this->Persona_codigo,true);
		$criteria->compare('PuestoGuardia_id',$this->PuestoGuardia_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HorarioGuardia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
