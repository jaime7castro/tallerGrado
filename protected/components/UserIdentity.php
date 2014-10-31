<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
    
        /*
        private $_id;
	public function authenticate()
	{
		$user=  CuentaUsuario::model()->find('LOWER(nombreUsuario)=?',array(strtolower($this->username)));
                if($user===null)
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                else if($user->validatePassword($this->password))
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
                else
                {
                    $this->_id=$user->id;
                    ////
                    ///echo Yii::app()->user->id; //id del usuario logueado
                    ///
                    $this->setState('nombreUsu',$user->nombreUsuario);
                    $this->setState('idUsu',$user->id);
                    ////
                    //echo Yii::app()->user->getState('nombreUsu'); //nombre del usuario logueado
                    //echo Yii::app()->user->getState('idUsu');
                    ///
                    $this->username=$user->nombreUsuario;               
                    $this->errorCode=self::ERROR_NONE;
                }			
		return $this->errorCode=self::ERROR_NONE;
        }
        public function getId()
        {
            return $this->_id;
        }
        */
        private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user=  CuentaUsuario::model()->find('LOWER(nombreUsuario)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id;
                        ///almacenando los datos en memoria
                            $this->setState('nombreUsu',$user->nombreUsuario);
                            $this->setState('codigoUsu',$user->Persona_codigo);
                        ////
			$this->username=$user->nombreUsuario;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
    
    
        /*
        public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
         * 
         */
}
