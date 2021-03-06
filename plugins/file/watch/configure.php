<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Configuration file, allows to generate dinamically the web form for the plugin
 *
 * PHP version 5
 *
 * LICENSE: This file is part of Ortro.
 * Ortro is published under the terms of the GNU GPL License v2 
 * Please see LICENSE and COPYRIGHT files for details.
 *
 * @category Plugins
 * @package  Ortro
 * @author   Luca Corbo <lucor@ortro.net>
 * @license  GNU/GPL v2
 * @link     http://www.ortro.net
 */

$_plugin_name = 'watch';
$plugin_field['watch'][0]['version']           = '1.0.1';
$plugin_field['watch'][0]['min_ortro_version'] = '1.2.0';
$plugin_field['watch'][0]['authors'][0]        = 'Luca Corbo <lucor@ortro.net>';
$plugin_field['watch'][0]['description']       = PLUGIN_FILE_WATCH_DESCRIPTION;
$plugin_field['watch'][0]['title']             = PLUGIN_FILE_WATCH_TITLE;

$plugin_field['watch'][1]['type']              = 'text';
$plugin_field['watch'][1]['name']              = 'file_watch_user';
$plugin_field['watch'][1]['value']             = '';
$plugin_field['watch'][1]['attributes']        = 'disabled';
$plugin_field['watch'][1]['description']       = PLUGIN_USER;
$plugin_field['watch'][1]['num_rules']         = '1';
$plugin_field['watch'][1]['rule_msg'][0]       = PLUGIN_USER_RULE;
$plugin_field['watch'][1]['rule_type'][0]      = 'required';
$plugin_field['watch'][1]['rule_attribute'][0] = '';

$plugin_field['watch'][2]['type']        = 'text';
$plugin_field['watch'][2]['name']        = 'file_watch_port';
$plugin_field['watch'][2]['value']       = '';
$plugin_field['watch'][2]['attributes']  = 'disabled';
$plugin_field['watch'][2]['description'] = PLUGIN_PORT;

$plugin_field['watch'][3]['type']              = 'text';
$plugin_field['watch'][3]['name']              = 'file_watch_path';
$plugin_field['watch'][3]['value']             = '';
$plugin_field['watch'][3]['attributes']        = 'disabled size=70';
$plugin_field['watch'][3]['description']       = PLUGIN_FILE_WATCH_PATH_DESCRIPTION;
$plugin_field['watch'][3]['num_rules']         = '1';
$plugin_field['watch'][3]['rule_msg'][0]       = PLUGIN_FILE_WATCH_RULE_3_0;
$plugin_field['watch'][3]['rule_type'][0]      = 'required';
$plugin_field['watch'][3]['rule_attribute'][0] = '';

$plugin_field['watch'][4]['type']              = 'text';
$plugin_field['watch'][4]['name']              = 'file_watch_pattern';
$plugin_field['watch'][4]['value']             = '';
$plugin_field['watch'][4]['attributes']        = 'disabled size=70';
$plugin_field['watch'][4]['description']       = PLUGIN_FILE_WATCH_PATTERN_DESCRIPTION;
$plugin_field['watch'][4]['num_rules']         = '1';
$plugin_field['watch'][4]['rule_msg'][0]       = PLUGIN_FILE_WATCH_RULE_4_0;
$plugin_field['watch'][4]['rule_type'][0]      = 'required';
$plugin_field['watch'][4]['rule_attribute'][0] = '';

$plugin_field['watch'][5]['type']        = 'select';
$plugin_field['watch'][5]['name']        = 'file_watch_is_error';
$plugin_field['watch'][5]['value']       = array('0' => PLUGIN_FILE_WATCH_SUCCESS, 
                                                 '1' => PLUGIN_FILE_WATCH_ERROR);
$plugin_field['watch'][5]['attributes']  = '';
$plugin_field['watch'][5]['description'] = PLUGIN_FILE_WATCH_ERROR_DESCRIPTION ;
$plugin_field['watch'][5]['num_rules']   = '0';
?>