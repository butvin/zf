<?php
class ItemController extends Zend_Controller_Action {
    public function init(){

    }
    public function indexAction() {
        $items = new Application_Model_DbTable_Items();
        $this->view->items = $items->fetchAll();
    }
    public function addAction() {
        $form = new Application_Form_Item;
//        $form->submit->setLabel('Add Item');
        $this->view->form = $form;

        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
//            var_dump($data);die();
            if ($form->isValid($data)) {
                $name = $form->getValue('name');
                $email = $form->getValue('email');
                $tel = $form->getValue('tel');
                $title =$form->getValue('title');
                $year = $form->getValue('year');
                $denomination = $form->getValue('denomination');
                $priceMin = $form->getValue('priceMin');
                $priceMax = $form->getValue('priceMax');
                $notes = $form->getValue('notes');
                $items = new Application_Model_DbTable_Items;
                $items->addItem($name, $email, $tel, $title, $year, $denomination, $priceMin, $priceMax, $notes);
                $this->_helper->redirector('index');
            } else {
                $form->populate($data);
            }
        }
    }
    public function editAction() {
        $form = new Application_Form_Item();
//--------------------------------------------------------


//--------------------------------------------------------
        $form->submit->setLabel('Edit');
        $this->view->form = $form;

        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();

            if ($form->isValid($data)) {
                $id = (int)$form->getValue('id');
                $name = $form->getValue('name');
                $email = $form->getValue('email');
                $tel = $form->getValue('tel');
                $title =$form->getValue('title');
                $year = $form->getValue('year');
                $denomination = $form->getValue('denomination');
                $priceMin = $form->getValue('priceMin');
                $priceMax = $form->getValue('priceMax');
                $notes = $form->getValue('notes');
                $items = new Application_Model_DbTable_Items;
                $items->updateItem($id, $name, $email, $tel, $title, $year, $denomination, $priceMin, $priceMax, $notes);
                $this->_helper->redirector('index');
            } else {
                $form->populate($data);
            }
        } else {
            $id = $this->_getParam('id', 0);
            if ($id > 0) {
                $items = new Application_Model_DbTable_Items;
                $this->view->item = $items->getItem($id);
                $form->populate($items->getItem($id));
            }
        }
    }
    public function destroyAction() {
        if ($this->getRequest()->isPost()) {
            $destroy = $this->getRequest()->getPost('destroy');
            if ($destroy == 'Yes') {
                $id = $this->getRequest()->getPost('id');
//                var_dump($id); die();
                $items = new Application_Model_DbTable_Items();
                $items->deleteItem($id);
            }
            $this->_helper->redirector('index');
        } else {
            $id = $this->_getParam('id', 0);
            $items = new Application_Model_DbTable_Items();
            $this->view->item = $items->getItem($id);
        }
    }
}
