<?php
/* Security measure */
if (!defined('IN_CMS')) {
    exit();
}

/**
 * Provides Code Mirror editor for backend
 *
 * @package Plugins
 * @subpackage codemirror
 *
 * @author Jasper Palfree <jasper@wellcaffeinated.net> http://wellcaffeinated.net
 * @copyright Jasper Palfree, 2012
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

Plugin::setInfos(array(
        'id'          => 'codemirror',
        'title'       => 'Code Mirror',
        'description' => 'Provides Code Mirror editor.',
        'version'     => '0.1b',
        'website'     => 'https://github.com/wellcaffeinated/Code-Mirror-for-Wolf-CMS',
        'update_url'  => 'https://raw.github.com/wellcaffeinated/Code-Mirror-for-Wolf-CMS/master/version.xml'
));

Filter::add('codemirror', 'codemirror/filter_codemirror.php');

Plugin::addJavascript('codemirror', 'CodeMirror/lib/codemirror.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/markdown/markdown.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/javascript/javascript.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/xml/xml.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/css/css.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/clike/clike.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/php/php.js');
Plugin::addJavascript('codemirror', 'CodeMirror/mode/gfm/gfm.js');

Plugin::addStylesheet('codemirror', 'CodeMirror/theme/ambiance.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/blackboard.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/cobalt.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/eclipse.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/elegant.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/erlang-dark.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/lesser-dark.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/monokai.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/neat.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/night.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/rubyblue.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/vibrant-ink.css');
Plugin::addStylesheet('codemirror', 'CodeMirror/theme/xq-dark.css');

