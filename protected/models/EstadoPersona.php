<?php

/**
 * This is the model class for table "Estado_Persona".
 *
 * The followings are the available columns in table 'Estado_Persona':
 * @property integer $id
 * @property string $Persona_codigo
 * @property integer $Estado_id
 *
 * The followings are the available model relations:
 * @property DetalleParteUnidad[] $detalleParteUnidads
 * @property Estado $estado
 * @property Persona $personaCodigo
 */
class EstadoPersona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    
        public $Nombre;
        public $Apellido_Paterno;
        public $Apellido_Materno;
    
	public function tableName()
	{
		return 'Estado_Persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_codigo, Estado_id', 'required'),
			array('Estado_id', 'numerical', 'integerOnly'=>true),
			array('Persona_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Persona_codigo, Estado_id', 'safe', 'on'=>'search'),
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
			'detalleParteUnidads' => array(self::HAS_MANY, 'DetalleParteUnidad', 'Estado_Persona_id'),
			'estado' => array(self::BELONGS_TO, 'Estado', 'Estado_id'),
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
			'Persona_codigo' => 'Código Persona',
			'Estado_id' => 'Estado',
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
		$criteria->compare('Persona_codigo',$this->Persona_codigo,true);
		$criteria->compare('Estado_id',$this->Estado_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EstadoPersona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getListEstado()
        {
            return CHtml::listData(Estado::model()->findAll(),'id','descripcion');
        }
}
