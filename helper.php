<?php
/**
 *
 *
 * @package   mod_githubrepo
 * copyright Siege21.com/Antony Doyle
 * @license GPL3
 */
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
$reponame = $params->get('reponame');
$repopath = $params->get('repopath');
$jQuery = $params->get('jQuery'); 
$gitCss = $params->get('gitcss'); 
$txtAbove = $params->get('textabove');
 // Returns a reference to the global document object
$doc 					= JFactory::getDocument();
 
if ($jQuery) {
  $doc->addCustomTag('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>');
}
$doc->addCustomTag('<script src="modules/mod_githubrepo/js/github.js"></script>');

if ($gitCss) {
  $doc->addCustomTag('<link href="modules/mod_githubrepo/tmpl/css/github.css" media="screen" rel="stylesheet" type="text/css" />');
}