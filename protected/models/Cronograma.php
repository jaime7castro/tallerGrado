<?php

/**
 * This is the model class for table "Cronograma".
 *
 * The followings are the available columns in table 'Cronograma':
 * @property integer $id
 * @property string $dia
 * @property string $fecha
 * @property string $Unidad_codigo
 *
 * The followings are the available model relations:
 * @property Actividad[] $actividads
 * @property Unidad $unidadCodigo
 */
class Cronograma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Cronograma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dia, fecha, Unidad_codigo', 'required'),
			array('dia, fecha', 'length', 'max'=>10),
			array('Unidad_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dia, fecha, Unidad_codigo', 'safe', 'on'=>'search'),
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
			'actividads' => array(self::HAS_MANY, 'Actividad', 'Cronograma_id'),
			'unidadCodigo' => array(self::BELONGS_TO, 'Unidad', 'Unidad_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dia' => 'Día',
			'fecha' => 'Fecha',
			'Unidad_codigo' => 'Código de la Unidad',
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
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('Unidad_codigo',$this->Unidad_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cronograma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
