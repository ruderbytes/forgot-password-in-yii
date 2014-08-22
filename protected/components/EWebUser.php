<?php
class EWebUser extends CWebUser{
 
    protected $_model;
 
    protected function loadUser()
    {
        if ( $this->_model === null ) {
                $this->_model = Users::model()->findByPk($this->id);
        }
        return $this->_model;
    }
    
    function getLevel()
    {
        $user=$this->loadUser();
        if($user)
            return $user->level_id;
        return 100;
    }
}
?>