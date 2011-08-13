<?php
/**
 * FWURG Icons Plugin: Helper component
 *
 * @author     Brend Wanders <b.wanders@xs4all.nl>
 */
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');

class helper_plugin_fwurgicons extends DokuWiki_Plugin {
	var $icons = null;
	var $aliases = array();

	function helper_plugin_fwurgicons() {
		$this->icons = include('icons.php');

		// build alias list
		foreach($this->icons as $name=>$icon) {
			$this->aliases[$name] = $name;
			foreach($icon['aliases'] as $a) {
				$this->aliases[$a] = $name;
			}
		}
	}

	/**
	 * Mandatory method descriptions.
	 */
	function getMethods() {
		$result = array();

		$result[] = array(
			'name'=>'getIcon',
			'desc'=>'returns an icon description array',
			'params'=>array('iconstring'=>'string'),
			'return'=>array('icon'=>'array')
		);

		$result[] = array(
			'name'=>'getBaseIcons',
			'desc'=>'returns an array of all base icon descriptions',
			'params'=>array(),
			'return'=>array('icons'=>'array')
		);

		return $result;
	}

  /**
	 * Returns an icon description array.
	 */
	function getIcon($iconstring) {
		$overlays = split('\+',$iconstring);
		$base = trim(array_shift($overlays));

		$base = $this->_lookup($base);
		if(!$base) return false;

		$result = array(
			'title'=>$base['title'],
			'page'=>$base['page'],
			'overlay'=>array($base['image'])
		);

		for($i=0;$i<count($overlays);$i++) {
			$overlay = $overlays[$i];
			$overlayIcon = $this->_lookup(trim($overlay));
			if(!$overlayIcon) return false;
			$result['overlay'][] = $overlayIcon['image'];
			$result['title'] .= ', '.$overlayIcon['title'];
		}

		return $result;
	}

  /**
	 * Returns all base icons. Useful for listing options.
	 */
	function getBaseIcons() {
		return $this->icons;
	}

  /**
	 * Performs the actual icon lookup.
	 */
	function _lookup($name) {
		$real = $this->aliases[$name];
		return $this->icons[$real];
	}
}
