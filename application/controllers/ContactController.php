<?php
class ContactController extends Zend_Controller_Action {
    public function init() {

    }
    public function indexAction() {
        $form = new Application_Form_Contact();
//        $form = new ContactForm();
        $this->view->form = $form;

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($this->getRequest()->isPost())) {
                $values = $form->getValues();
                $mail = new Zend_Mail();
                $mail->setBodyText($values['message']);
                $mail->setFrom($values['email'], $values['name']);
                $mail->addTo('bytvin@gmail.com');
                $mail->setSubject('Contact form');
                $mail->send();
                $this->_helper->getHelper('FlashMessenger')->addMessage('THX and Fack you');
                $this->_redirect('/contact/success');
            }

        }
    }
    public function successAction() {
        if ($this->_helper->getHelper('FlashMessenger')->getMessages()) {
            $this->_helper->getHelper('FlashMessenger')->getMessages();
        } else {
            $this->_redirect('/');
        }
    }
}