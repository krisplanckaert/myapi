<?php

class Api_PageController extends Zend_Controller_Action
{
    private $pageModel;
    
    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->pageModel = new Application_Model_Page();
    }

    public function indexAction()
    {
        $this->getResponse()
                ->appendBody('indexAction() return');
    }
    
    public function getAction()
    {
                
    }
    
    public function postAction()
    {
        $titel = $this->_getParam('titel');
        $omschrijving = $this->_getParam('omschrijving');
        //$this->getResponse()
        //        ->appendBody('postAction() return');
        
    }
    
    public function putAction()
    {
        $this->getResponse()
                ->appendBody('putAction() return');
        
    }
    
    public function deleteAction()
    {
        $this->getResponse()
                ->appendBody('deleteAction() return');
        
    }


}

