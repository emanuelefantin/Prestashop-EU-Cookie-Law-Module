<?php

if (!defined('_PS_VERSION_'))
	exit;

/*
 * /views/css for the css files 
 * /views/js for the javascript files
  /views/templates/front for the files used by the controller module.
 * /views/templates/hooks for the files used by the module’s hooks.
 * The configuration cache file (config.xml)
 * The module’s 16x16 logo (module_name.jpg)
 * 
 */

class Eucookielaw extends Module
{

	public function __construct()
	{
		$this->name = 'eucookielaw';
		$this->tab = 'administration';
		$this->version = 1.0;
		$this->author = 'Emanuele Fantin - www.emanuelefantin.it';
		$this->need_instance = 0;
		/*
		 * need_instance allows you to specify whether an instance of the 
		 * module must be created when displaying the list of modules 
		 * (e.g. if the module checks the PrestaShop configuration and 
		 * displays warning messages).
		 * 
		 */

		parent::__construct();

		$this->displayName = $this->l('Eu Cookie Law');
		$this->description = $this->l('Plugin per barra cookie');

		/*
		  if (_PS_VERSION_ < '1.5') {
		  global $currentIndex;
		  $this->current_index = $currentIndex;
		  require(_PS_MODULE_DIR_ . $this->name . '/backward_compatibility/backward.php');

		  // Backward compatibility
		  $this->backwardCompatibilityChecks();
		  } */
	}

	public function install()
	{
		if (!parent::install() ||
				!$this->registerHook('footer'))
			return false;
		return true;
	}

	public function uninstall()
	{
		if (!parent::uninstall())
			return false;
		return true;
	}
	
	
	public function hookFooter($params)
	{
		// for retrocompatibility
		if (!$this->isRegisteredInHook('footer')){
			$this->registerHook('footer');
		}
		
		$this->context->controller->addJs(($this->_path).'js/cookiechoices.js', 'all');
		return $this->display(__FILE__, 'views/templates/hook/footer.tpl');
	}

	/* Check status of backward compatibility module */

	/*
	  protected function backwardCompatibilityChecks() {

	  if (Module::isInstalled('backwardcompatibility')) {
	  $backward_module = Module::getInstanceByName('backwardcompatibility');
	  if (!$backward_module->active)
	  $this->warning .= $this->l('To work properly the module requires the backward compatibility module enabled') . '<br />';
	  }
	  else
	  $this->warning .= $this->l('In order to use the module you need to install the backward compatibility.') . '<br />';
	  } */

//    public function hookLeftColumn($params) {
//
//        $this->smarty->assign(array(
//            'sentence' => $this->l('Hello World')
//        ));
//        
//        return $this->display(__FILE__, 'eucookielaw.tpl');
//    }
}
