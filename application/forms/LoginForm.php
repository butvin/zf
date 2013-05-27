<?php
class Application_Form_LoginForm extends Zend_Form {
    //http://vredniy.ru/2010/04/zend-framework-auth-and-login/
    public function init() {
        $username = $this->createElement('text', 'username', array(
            'label' => 'User name: *',
            'required' => TRUE,
        ));
    }
}