<?php
    if (!defined('_PS_VERSION_'))
        exit;

    class AdminDesAvisController extends ModuleAdminController
    {
        public function init()
        {
            parent::init();
        }
        
        public function initContent()
        {
            parent::initContent();
            $this->setTemplate('avis.tpl');
        }
    }
?>