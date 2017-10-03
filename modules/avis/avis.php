<?php
    if (!defined('_PS_VERSION_'))
        exit;
    
    class Avis extends Module
    {
        public function __construct()
        {
            $this->name = 'Gestion des avis';
            $this->version = '1.0.0';
            $this->author = 'François';
            $this->tab = 'administration';
            //$this->secure_key = Tools::encrypt($this->name);
            $this->need_instance = 0;
            //$this->controllers = array('avis');
            $this->bootstrap = true;
            parent::__construct();
            $this->displayName = $this->l('Gestion des avis');
            $this->description = $this->l('blabla2');
            //$this->confirmUninstall = $this->l('Sur ?');
            $this->ps_version_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
        }

        public function install(){
            if(!parent::install() || !$this->registerHook('displayHeader') || !$this->registerHook('displayFooter'))
                return false;

            return true;
        }

        public function uninstall(){
            return $this->uninstallModuleTab() && parent::uninstall();
        }

        public function installModuleTab(){
            $tab = new Tab();
            $langs = language::getLanguages();
            foreach ($langs as $lang) 
               $tab->name[$lang['id_lang']] = 'Avis';
            $tab->module = $this->name;
            $tab->id_parent = 0;
            $tab->class_name = 'AdminDesAvis';
            return $tab->save();
        }

        public function uninstallModuleTab(){
            $id_tab = Tab::getIdFromClassName('AdminDesAvis');
            if($id_tab){
                $tab = new Tab($id_tab);
                return $tab->delete();
            }
            return true;
        }

        public function getContent(){
            $status = false;
            $titre = Tools::getValue(key:'title');
            $contenu = Tools::getValue(key:'contenu');

            if(ConfigurationCore::updateValue(key:'', $title))
                $status = true;

            $this->context->smarty->assign(array(
                'submit_form' => true,
                'status' => $status 
            ));

            return $this->display(__FILE__, 'views/templates/admin/avis.tpl');
        }
    }
?>