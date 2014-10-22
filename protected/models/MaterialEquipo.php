<?php

/**
 * This is the model class for table "Material_Equipo".
 *
 * The followings are the available columns in table 'Material_Equipo':
 * @property integer $id
 * @property string $detalle
 * @property string $observaciones
 * @property string $codigo
 * @property integer $cantidad
 * @property string $tipo
 * @property string $Unidad_codigo
 *
 * The followings are the available model relations:
 * @property Unidad $unidadCodigo
 */
class MaterialEquipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Material_Equipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('detalle, tipo, Unidad_codigo', 'required'),
			array('cantidad', 'numerical', 'integerOnly'=>true),
			array('detalle, observaciones', 'length', 'max'=>300),
			array('codigo, tipo, Unidad_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, detalle, observaciones, codigo, cantidad, tipo, Unidad_codigo', 'safe', 'on'=>'search'),
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
			'detalle' => 'Detalle',
			'observaciones' => 'Observaciones',
			'codigo' => 'Código',
			'cantidad' => 'Cantidad',
			'tipo' => 'Tipo',
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
		$criteria->compare('detalle',$this->detalle,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('Unidad_codigo',$this->Unidad_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MaterialEquipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
