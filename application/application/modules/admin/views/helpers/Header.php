<?php
class Zend_View_Helper_Header extends Zend_View_Helper_Abstract {

    public function header() {
        $html = new Zend_View();
        $html->setScriptPath(APPLICATION_PATH . '/modules/admin/views/scripts/');        
        return $html->render('partial/header.phtml');
    }

}

?>
