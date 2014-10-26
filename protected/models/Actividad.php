<?php

/**
 * This is the model class for table "Actividad".
 *
 * The followings are the available columns in table 'Actividad':
 * @property integer $Cronograma_id
 * @property integer $id
 * @property string $horaInicio
 * @property string $horaFin
 * @property string $detalle
 * @property integer $TipoActividad_id
 *
 * The followings are the available model relations:
 * @property TipoActividad $tipoActividad
 * @property Cronograma $cronograma
 */
class Actividad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Actividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cronograma_id, horaInicio, horaFin, TipoActividad_id', 'required'),
			array('Cronograma_id, TipoActividad_id', 'numerical', 'integerOnly'=>true),
			array('horaInicio, horaFin', 'length', 'max'=>10),
			array('detalle', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cronograma_id, id, horaInicio, horaFin, detalle, TipoActividad_id', 'safe', 'on'=>'search'),
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
			'tipoActividad' => array(self::BELONGS_TO, 'TipoActividad', 'TipoActividad_id'),
			'cronograma' => array(self::BELONGS_TO, 'Cronograma', 'Cronograma_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cronograma_id' => 'Cronograma',
			'id' => 'ID',
			'horaInicio' => 'Hora de Inicio',
			'horaFin' => 'Hora Fin',
			'detalle' => 'Detalle',
			'TipoActividad_id' => 'Tipo de Actividad',
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

		$criteria->compare('Cronograma_id',$this->Cronograma_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('horaInicio',$this->horaInicio,true);
		$criteria->compare('horaFin',$this->horaFin,true);
		$criteria->compare('detalle',$this->detalle,true);
		$criteria->compare('TipoActividad_id',$this->TipoActividad_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Actividad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
