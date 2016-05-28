<?php
	
if (!($INIParseResult = parse_ini_file('configuration.ini')))
{
	header('Location: setup.php');
	return;
}

define('DB_ADDRESS', $INIParseResult['DatabaseAddress']);
define('DB_USERNAME', $INIParseResult['DatabaseUsername']);
define('DB_PASSWORD', $INIParseResult['DatabasePassword']);
define('DB_PLUGINSDATABASENAME', $INIParseResult['PluginDatabaseName']);
define('GH_OAUTH_CLIENT_ID', $INIParseResult['GitHubClientID']);
define('GH_OAUTH_CLIENT_SECRET', $INIParseResult['GitHubClientSecret']);

const IMMERSIVE_INFO = 0;
const IMMERSIVE_ERROR = 1;