<?php
/**
 * FWURG Icons Plugin: Adds FWURG Icons to the wiki
 *
 * Syntax:     :icon-name:
 *   icon-name the name of the icon to place, or an alias of that icon
 *
 * @author     Brend Wanders <b.wanders@xs4all.nl>
 */

if(!defined('DOKU_INC')) die('meh.');
if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'syntax.php');

/**
 * All DokuWiki plugins to extend the parser/rendering mechanism
 * need to inherit from this class
 */
class syntax_plugin_fwurgicons extends DokuWiki_Syntax_Plugin {

		var $helper = null;

		function syntax_plugin_fwurgicons() {
			$this->helper =& plugin_load('helper','fwurgicons');
		}

    function getType(){ return 'substition';}

    // we don't want to screw up normal smiley handling
    function getSort(){ return 232; }

    /**
     * Connect pattern to lexer
     */
    function connectTo($mode) {       
      $this->Lexer->addSpecialPattern('\(:(?:[-a-z+]+)\)',$mode,'plugin_fwurgicons');
    }

    /**
     * Handle the match
     */
    function handle($match, $state, $pos, &$handler){
			if(preg_match('/\(:(.+)\)/',$match,$m)) {
				$icon = $this->helper->getIcon($m[1]);

				if(!$icon) msg($this->getLang('unknown_icon').' '.$match,-1);
				return $icon;
			}

			return false;
    }

    /**
     * Create output
     */
    function render($mode, &$R, $data) {
			if($mode != 'xhtml') return false;
			if(!$data) return false;

			$R->doc .= '<a href="'.wl($data['page']).'" title="'.$data['title'].'">';

			$class = 'middle fwurgicon';
			for($i=0;$i<count($data['overlay']);$i++) {
				$image = 'lib/plugins/fwurgicons/images/'.$data['overlay'][$i];

				if($i < count($data['overlay'])-1) {
					// somewhere in the list
					$R->doc .= "<span style='background:url($image) no-repeat' class='$class'>";
				} else {
					// last one in the list
					$R->doc .= "<img class='$class' src='$image'/>";
				}

				// no class for non-first items
				$class = '';
			}

			$R->doc .= str_repeat('</span>',count($data['overlay'])-1);

			$R->doc .= '</a>';
    }
}
