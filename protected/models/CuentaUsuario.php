<?php

/**
 * This is the model class for table "CuentaUsuario".
 *
 * The followings are the available columns in table 'CuentaUsuario':
 * @property integer $id
 * @property string $nombreUsuario
 * @property string $contrasena
 * @property string $preguntaSeg
 * @property string $respuestaSeg
 * @property string $session
 * @property string $Persona_codigo
 *
 * The followings are the available model relations:
 * @property Persona $personaCodigo
 */
class CuentaUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'CuentaUsuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreUsuario, contrasena, session, Persona_codigo', 'required'),
			array('nombreUsuario, contrasena, respuestaSeg, Persona_codigo', 'length', 'max'=>45),
			array('preguntaSeg', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombreUsuario, contrasena, preguntaSeg, respuestaSeg, session, Persona_codigo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombreUsuario' => 'Nombre Usuario',
			'contrasena' => 'Contrasena',
			'preguntaSeg' => 'Pregunta Seg',
			'respuestaSeg' => 'Respuesta Seg',
			'session' => 'Session',
			'Persona_codigo' => 'Persona Codigo',
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
		$criteria->compare('nombreUsuario',$this->nombreUsuario,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('preguntaSeg',$this->preguntaSeg,true);
		$criteria->compare('respuestaSeg',$this->respuestaSeg,true);
		$criteria->compare('session',$this->session,true);
		$criteria->compare('Persona_codigo',$this->Persona_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CuentaUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        ////////////////////////////
        public function validatePassword($password)
        {
            return $this->hashPassword($password,$this->session)===$this->contrasena;
        }
        
        public function hashPassword($password,$salt)
        {
            return md5($salt.$password);
        }
        
        public function generateSalt()
        {
            return uniqid('',true);
        }
}
