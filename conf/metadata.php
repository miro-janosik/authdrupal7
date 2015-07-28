<?php
/**
 * Options for the authdrupal7 plugin
 *
 * @author Matthias Jung <matzekuh@web.de>
 */


$meta['server']           = array('string','_caution' => 'danger');
$meta['user']             = array('string','_caution' => 'danger');
$meta['password']         = array('password','_caution' => 'danger');
$meta['database']         = array('string','_caution' => 'danger');
$meta['charset']          = array('string','_caution' => 'danger');
$meta['debug']            = array('multichoice','_choices' => array(0,1,2),'_caution' => 'security');

$meta['TablesToLock']     = array('array','_caution' => 'danger');

$meta['checkPass']        = array('','_caution' => 'danger');
$meta['getUserInfo']      = array('','_caution' => 'danger');
$meta['getGroups']        = array('','_caution' => 'danger');

$meta['FilterLogin']      = array('string','_caution' => 'danger');
$meta['FilterName']       = array('string','_caution' => 'danger');
$meta['FilterEmail']      = array('string','_caution' => 'danger');
$meta['FilterGroup']      = array('string','_caution' => 'danger');
