<?php
class Zend_View_Helper_Footer extends Zend_View_Helper_Abstract {

    public function footer() {
        $html = new Zend_View();
        $html->setScriptPath(APPLICATION_PATH . '/modules/website/views/scripts/');        
        return $html->render('partial/footer.phtml');
    }

}

?>
