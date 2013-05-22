<?php
class ItemController extends Zend_Controller_Action {
    public function init(){

    }
    public function indexAction() {
        $items = new Application_Model_DbTable_Items();
        $this->view->items = $items->fetchAll();
    }
}