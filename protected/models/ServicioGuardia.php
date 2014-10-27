<?php

/**
 * This is the model class for table "ServicioGuardia".
 *
 * The followings are the available columns in table 'ServicioGuardia':
 * @property integer $id
 * @property string $dia
 * @property string $fecha
 * @property integer $GrupoGuardia_id
 *
 * The followings are the available model relations:
 * @property HorarioGuardia[] $horarioGuardias
 * @property Novedad[] $novedads
 * @property RolGuardia[] $rolGuardias
 * @property GrupoGuardia $grupoGuardia
 */
class ServicioGuardia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ServicioGuardia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dia, fecha, GrupoGuardia_id', 'required'),
			array('GrupoGuardia_id', 'numerical', 'integerOnly'=>true),
			array('dia, fecha', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dia, fecha, GrupoGuardia_id', 'safe', 'on'=>'search'),
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
			'horarioGuardias' => array(self::HAS_MANY, 'HorarioGuardia', 'ServicioGuardia_id'),
			'novedads' => array(self::HAS_MANY, 'Novedad', 'ServicioGuardia_id'),
			'rolGuardias' => array(self::HAS_MANY, 'RolGuardia', 'ServicioGuardia_id'),
			'grupoGuardia' => array(self::BELONGS_TO, 'GrupoGuardia', 'GrupoGuardia_id'),
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
			'GrupoGuardia_id' => 'Grupo de Guardia',
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
		$criteria->compare('GrupoGuardia_id',$this->GrupoGuardia_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ServicioGuardia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
