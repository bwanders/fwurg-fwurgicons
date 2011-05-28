<?php
/**
 * FWURG Icons Plugin: Toolbar adder
 *
 * @author Brend Wanders <b.wanders@xs4all.nl>
 */

if(!defined('DOKU_INC')) die('meh.');
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once DOKU_PLUGIN.'action.php';

class action_plugin_fwurgicons extends DokuWiki_Action_Plugin {
		var $helper = null;

		function action_plugin_fwurgicons() {
			$this->helper =& plugin_load('helper','fwurgicons');
		}

    /**
     * Register its handlers with the DokuWiki's event controller
     */
    function register(&$controller) {
      $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'add_button');
    }
 
    /**
     * Add button to toolbar.
     */
    function add_button(&$event, $param) {
			$icons = $this->helper->getBaseIcons();
			
			$picker = array();
			foreach($icons as $key=>$icon){
				if($icon['page']) {
					$picker['(:'.$key.')'] = $icon['image'];
				}
			}

			$event->data[] = array (
		    'type'  => 'picker',
				'title' => $this->getLang('qb_fwurgicons'),
				'icon'  => '../../plugins/fwurgicons/images/button-toolbar.png',
				'list'  => $picker,
				'icobase' => '../plugins/fwurgicons/images/'
			);
		}
}
