<?php
class StaticContentController extends Zend_Controller_Action {
    public function init() {
        //here code...
    }
    //views static pages
    public function displayAction() {
        $page = $this->getRequest()->getParam('page');
        if (file_exists($this->view->getScriptPaths(null)[0] . "/" . $this->getRequest()->getControllerName() . "/$page." . $this->viewSuffix)) {
            $this->render($page);
        } else {
            throw new Zend_Controller_Action_Exception($this->view->getScriptPaths(null), 404);
        }
    }
}