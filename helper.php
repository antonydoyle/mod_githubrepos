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
$txtAbove = $params->get('textabove');

$reponame1 = $params->get('reponame1');
$repopath1 = $params->get('repopath1');
$txtAbove1 = $params->get('textabove1');

$reponame2 = $params->get('reponame2');
$repopath2 = $params->get('repopath2');
$txtAbove2 = $params->get('textabove2');

$reponame3 = $params->get('reponame3');
$repopath3 = $params->get('repopath3');
$txtAbove3 = $params->get('textabove3');

$reponame4 = $params->get('reponame4');
$repopath4 = $params->get('repopath4');
$txtAbove4 = $params->get('textabove4');

$reponame5 = $params->get('reponame5');
$repopath5 = $params->get('repopath5');
$txtAbove5 = $params->get('textabove5');

$jQuery = $params->get('jQuery'); 
$gitCss = $params->get('gitcss'); 
 // Returns a reference to the global document object
$doc 					= JFactory::getDocument();
 
if ($jQuery) {
  $doc->addCustomTag('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>');
}
$doc->addCustomTag('<script src="modules/mod_githubrepo/js/github.js"></script>');

if ($gitCss) {
  $doc->addCustomTag('<link href="modules/mod_githubrepo/tmpl/css/github.css" media="screen" rel="stylesheet" type="text/css" />');
}