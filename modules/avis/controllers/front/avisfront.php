<?php
    class avisAvisfrontModuleFrontController extends ModuleFrontController
    {
        public function getAvis()
        {
            $query = "SELECT titre, contenu, dateAjout, dateUpdate FROM ps_avis";
            $res = Db::getInstance()->ExecuteS($query);
            return $res;
        }

        public function initContent()
        {
            parent::initContent();        
            $this->context->smarty->assign(array(
                'hello' => 'Hello World'
            ));
            $this->setTemplate('module:avis/views/templates/front/avis.tpl');
        }


    }
?>