<?php
    class avisAvisfrontModuleFrontController extends ModuleFrontController
    {
        /*public function IdAleat()
        {
            $query = "SELECT id FROM ps_avis";
            $res = Db::getInstance()->ExecuteS($query);
            $allId = array_rand($res, 1);
            return $allId;
        }*/

        public function test()
        {
            $query = "SELECT id FROM ps_avis ORDER BY RAND() LIMIT 1";
            $res = Db::getInstance()->ExecuteS($query);
            var_dump($res[0]['id']);
            return $res[0]['id'];
        }


        public function getAvisAleat()
        {
            $query = "SELECT titre, contenu, dateAjout, dateUpdate FROM ps_avis WHERE id = ".$this->test();
            $res = Db::getInstance()->ExecuteS($query);
            return $res;
        }

        public function initContent()
        {
            parent::initContent();
            $this->context->smarty->assign(array(
                'contenuAvis' => $this->getAvisAleat()
            ));
            $this->setTemplate('module:avis/views/templates/front/avis.tpl');
        }


    }
?>