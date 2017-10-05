<?php
    if (!defined('_PS_VERSION_'))
        exit;
    
    class Avis extends Module
    {
        public function __construct()
        {
            $this->name = 'avis';
            $this->tab = 'front_office_features';
            $this->version = '1.0.0';
            $this->author = 'François';
            $this->need_instance = 0;
            $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
            $this->bootstrap = true;

            parent::__construct();

            $this->displayName = $this->l('affiche un avis aléatoire');
            $this->description = $this->l('Avec ce module réalisé par un potentiel futur dev prestashop, vous allez
                                            voir dans la page avis un avis affiché aléatoirement.');

            $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        }

        public function install(){
            /*if(!parent::install())
                return false;

            return true;*/
              if (Shop::isFeatureActive())
                Shop::setContext(Shop::CONTEXT_ALL);

              return parent::install() &&
                $this->registerHook('leftColumn') &&
                $this->registerHook('header') &&
                Configuration::updateValue('MYMODULE_NAME', 'my friend');
        }

        public function hookDisplayLeftColumn($params)
        {
          $this->context->smarty->assign(
              array(
                  'my_module_name' => Configuration::get('MYMODULE_NAME'),
                  'my_module_link' => $this->context->link->getModuleLink('avis', 'display')
              )
          );
          return $this->display(__FILE__, 'views/templates/admin/avis.tpl');
        }
/*
        public function install()
        {
            if (Shop::isFeatureActive())
                Shop::setContext(Shop::CONTEXT_ALL);

            if (!parent::install() ||
                !$this->registerHook('leftColumn') ||
                !$this->registerHook('header') ||
                !Configuration::updateValue('Avis', 'my friend')
            )
            return false;

            return true;
        }*/

        public function uninstall(){
            return /*$this->uninstallModuleTab() &&*/ parent::uninstall();
        }

        /*public function uninstall()
        {
              if (!parent::uninstall() ||
                !Configuration::deleteByName('Avis')
              )
                return false;

              return true;
        }*/

        /*public function installModuleTab(){
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
        }*/

        /*public function getContent(){
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
        }*/

        public function getContent()
        {
            $output = null;

            if (Tools::isSubmit('submit'.$this->name))
            {
                $my_module_name = strval(Tools::getValue('MYMODULE_NAME'));
                if (!$my_module_name
                  || empty($my_module_name)
                  || !Validate::isGenericName($my_module_name))
                    $output .= $this->displayError($this->l('Invalid Configuration value'));
                else
                {
                    Configuration::updateValue('MYMODULE_NAME', $my_module_name);
                    $output .= $this->displayConfirmation($this->l('Settings updated'));
                }
            }
            return $output.$this->displayForm();
        }

        public function displayForm()
        {
            // Get default language
            $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

            // Init Fields form array
            $fields_form[0]['form'] = array(
                'legend' => array(
                    'title' => $this->l('Ajouter un avis'),
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => 'titre',
                        'name' => 'MYMODULE_NAME',
                        'size' => 20,
                        'required' => true
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => 'contenu',
                        'name' => 'MYMODULE_NAME',
                        'required' => true
                    )
                ),
                'submit' => array(
                    'title' => 'Enregistrer',
                    'class' => 'btn btn-default pull-right'
                )
            );

            $helper = new HelperForm();

            // Module, token and currentIndex
            $helper->module = $this;
            $helper->name_controller = $this->name;
            $helper->token = Tools::getAdminTokenLite('AdminModules');
            $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

            // Language
            $helper->default_form_language = $default_lang;
            $helper->allow_employee_form_lang = $default_lang;

            // Title and toolbar
            $helper->title = $this->displayName;
            $helper->show_toolbar = true;        // false -> remove toolbar
            $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
            $helper->submit_action = 'submit'.$this->name;
            $helper->toolbar_btn = array(
                'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                    '&token='.Tools::getAdminTokenLite('AdminModules'),
                ),
                'back' => array(
                    'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                    'desc' => $this->l('Back to list')
                )
            );

            // Load current value
            $helper->fields_value['MYMODULE_NAME'] = Configuration::get('MYMODULE_NAME');

            return $helper->generateForm($fields_form);
        }
    }
?>