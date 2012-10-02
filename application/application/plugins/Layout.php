<?php
class Application_Plugin_Layout extends Zend_Controller_Plugin_Abstract {

    public function preDispatch(Zend_Controller_Request_Abstract $request) {

        $module = $request->getModuleName();
        
        $front_controller = Zend_Controller_Front::getInstance();
	$bootstrap = $front_controller->getParam('bootstrap');
        $view = $bootstrap->getResource('view');
        
        $layout = Zend_Layout::getMvcInstance();

        switch ($module) {
            case 'website':
                $layout->setLayoutPath(APPLICATION_PATH . '/layouts/website');
                break;
            case 'admin':
                $layout->setLayoutPath(APPLICATION_PATH . '/layouts/admin');
                
                break;
            case 'error':
                $layout->setLayoutPath(APPLICATION_PATH . '/layouts/error');
        }

        $layout->setLayout('layout');
    }

}

?>
