<?php

/**
 * This is the model class for table "Detalle_GrupoGuardia".
 *
 * The followings are the available columns in table 'Detalle_GrupoGuardia':
 * @property integer $GrupoGuardia_id
 * @property integer $id
 * @property string $Persona_codigo
 *
 * The followings are the available model relations:
 * @property Persona $personaCodigo
 * @property GrupoGuardia $grupoGuardia
 */
class DetalleGrupoGuardia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    
        public $Nombre;
        public $Apellido_Paterno;
        public $Apellido_Materno;     
    
	public function tableName()
	{
		return 'Detalle_GrupoGuardia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GrupoGuardia_id, Persona_codigo', 'required'),
			array('GrupoGuardia_id', 'numerical', 'integerOnly'=>true),
			array('Persona_codigo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GrupoGuardia_id, id, Persona_codigo', 'safe', 'on'=>'search'),
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
			'personaCodigo' => array(self::BELONGS_TO, 'Persona', 'Persona_codigo'),
			'grupoGuardia' => array(self::BELONGS_TO, 'GrupoGuardia', 'GrupoGuardia_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GrupoGuardia_id' => 'Grupo de  Guardia',
			'id' => 'ID',
			'Persona_codigo' => 'Código de Persona',
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

		$criteria->compare('GrupoGuardia_id',$this->GrupoGuardia_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('Persona_codigo',$this->Persona_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleGrupoGuardia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public static function getListGrupoGuardia()
        {
            return CHtml::listData(GrupoGuardia::model()->findAll(),'id','descripcion');
        }
}
