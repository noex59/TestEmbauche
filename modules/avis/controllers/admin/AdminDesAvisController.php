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

            /*$status = false;
            if (Tools::getValue('titre') && Tools::getValue('contenu')){
                //$this->insertAvis();
                $status = true;
            }
            $this->context->smarty->assign(array(
                'status' => $status,
                'contenuAvis' => $this->getAvis()
                //'test' => $query
            ));*/
        
            return $this->context->smarty->template('avis.tpl');
        }

        public function getAvis()
        {
            $query = "SELECT titre, contenu, dateAjout, dateUpdate FROM ps_avis";
            $res = Db::getInstance()->ExecuteS($query);
            return $res;
        }
    }
?>