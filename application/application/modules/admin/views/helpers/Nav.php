<?php
class Zend_View_Helper_Nav extends Zend_View_Helper_Abstract {

    public function nav() {
        $html = new Zend_View();
        $html->setScriptPath(APPLICATION_PATH . '/modules/admin/views/scripts/');        
        return $html->render('partial/nav.phtml');
    }

}

?>
