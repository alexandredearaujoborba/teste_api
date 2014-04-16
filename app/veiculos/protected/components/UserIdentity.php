<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_uId;
    private $_uNm;
    private $_uEmail;
    private $_uTipo;
    
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            /*
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
             
             */

            $user=User::model()->findByAttributes(array('userNm'=>  $this->username));

            if($user===null)
                    $this->errorCode=self::ERROR_USERNAME_INVALID;

            else if ($user->userPass !== $this->password)

                    $this->errorCode=self::ERROR_PASSWORD_INVALID;

            else
            {
                    $this->_uId     = $user->userId;
                    $this->_uNm     = $user->userNm;
                    $this->_uEmail  = $user->userEmail;
                    $this->_uTipo   = $user->userTipo;
                    //$this->username=$user->username;
                    $this->errorCode=self::ERROR_NONE;
                    
                    // registrar no LOG
                    $oLog = new Log();
                        $aLog['userIdCad'] = $this->_uId;
                        $aLog['userTipo'] = $this->_uTipo;
                        $aLog['logDtHr'] = date('Y-m-d H:i:s');
                    $oLog->setAttributes( $aLog );
                    $oLog->save();
            }
            return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_uId;
	}
        public function getTipo()
	{
		return $this->_uTipo;
	}
        public function getName()
	{
		return $this->_uNm;
	}
        public function getEmail()
	{
		return $this->_uEmail;
	}
	
}