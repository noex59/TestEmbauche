<?php
    class AvisClass extends ObjectModel
    {
        public static function getProductName()
        {
            $res = Db::getInstance()->getRow("SELECT titre FROM ps_avis");
            return $res['titre'];
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