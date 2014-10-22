<?php

/**
 * This is the model class for table "Unidad".
 *
 * The followings are the available columns in table 'Unidad':
 * @property string $codigo
 * @property string $descripcion
 * @property string $efemeride
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property Cronograma[] $cronogramas
 * @property DetalleContactoU[] $detalleContactoUs
 * @property MaterialEquipo[] $materialEquipos
 * @property ParteUnidad[] $parteUnidads
 */
class Unidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Unidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, descripcion, direccion', 'required'),
			array('codigo, descripcion', 'length', 'max'=>45),
			array('efemeride', 'length', 'max'=>10),
			array('direccion', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codigo, descripcion, efemeride, direccion', 'safe', 'on'=>'search'),
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
			'cronogramas' => array(self::HAS_MANY, 'Cronograma', 'Unidad_codigo'),
			'detalleContactoUs' => array(self::HAS_MANY, 'DetalleContactoU', 'Unidad_codigo'),
			'materialEquipos' => array(self::HAS_MANY, 'MaterialEquipo', 'Unidad_codigo'),
			'parteUnidads' => array(self::HAS_MANY, 'ParteUnidad', 'Unidad_codigo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Código',
			'descripcion' => 'Nombre de la Unidad',
			'efemeride' => 'Efemeride',
			'direccion' => 'Direccion',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('efemeride',$this->efemeride,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
