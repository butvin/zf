<?php
class Application_Form_Contact extends Zend_Form {
    public function init(){
        $this->setAction('/contact/index')
            ->setMethod('post');

        $name = new Zend_Form_Element_Text('name');
        $name->setLabel('Name:')
            ->setOptions(array('size' => '35'))
            ->setRequired(true)
            ->addValidator('NotEmpty', true)
            ->addValidator('Alpha', true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Email address:')
            ->setOptions(array('size' => '50'))
            ->setRequired(true)
            ->addValidator('NotEmpty', true)
            ->addValidator('EmailAddress', true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringToLower')
            ->addFilter('StringTrim');

        $message = new Zend_Form_Element_Textarea('message');
        $message->setLabel('Message:')
            ->setOptions(array('rows'=>'8', 'cols'=>'40'))
            ->setRequired(true)
            ->addValidator('NotEmpty', true)
            ->addFilter('HtmlEntities')
            ->addFilter('StringTrim');

//        $captcha = new Zend_Form_Element_Captcha('captcha', array(
//            'captcha' => array(
//                'captcha' => 'Image',
//                'wordLen' => 6,
//                'timeout' => 300,
//                'width' => 300,
//                'height' => 100,
//                'imgUrl' => '/captcha',
//                'imgDir' => APPLICATION_PATH . '/../public/captcha',
//                'imgDir' => APPLICATION_PATH . '/../public/font/lusida.ttf',
//            )
//        ));
//        $captcha->setLabel('Verification code:');

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Send Message')
            ->setOptions(array('class' => 'submit'));

        $this->addElement($name)
            ->addElement($email)
            ->addElement($message)
//            ->addElement($captcha)
            ->addElement($submit);
    }

}