<?php
    class AvisClass extends ObjectModel
    {
        public function getAvis()
        {
            $query = "SELECT titre, contenu, dateAjout, dateUpdate FROM ps_avis";
            $res = Db::getInstance()->ExecuteS($query);
            return $res;
        }

        public function hookDisplayHome($params)//Fonction essentielle de hook
        {

             $this->context->smarty->assign(
                  array(
                      'titre' => 'allezzz'/*MonmoduleClass::getProductName()*/
                  )
              );
              return $this->display(__FILE__, 'views/templates/admin/avis.tpl');
        }

    }
?>