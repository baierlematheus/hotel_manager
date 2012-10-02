<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initAutoLoader() {
        $appResourceLoader = new Zend_Loader_Autoloader_Resource(array(
                    'basePath' => APPLICATION_PATH,
                    'namespace' => 'Application'
                ));

        $appResourceLoader->addResourceTypes(array(
            'plugins' => array(
                'namespace' => 'Plugin',
                'path' => 'plugins'
            )
        ));
    }

    protected function _initDoctype() {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
    }

    protected function _initHeadTitle() {}

    protected function _initHeadMeta() {}

    protected function _initCss() {}
    
    protected function _initJs() {}

    protected function _initPlugins() {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Application_Plugin_Layout());
    }

    protected function _initErrorHandler() {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Zend_Controller_Plugin_ErrorHandler(array(
                    'module' => 'error',
                    'controller' => 'index',
                    'action' => 'index'
                )));
    }

}
