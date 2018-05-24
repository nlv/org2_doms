<?php
$README = <<<RDME
Общие списки значений для ОРГ2
RDME;


$manifest = array (
    'acceptable_sugar_versions' => 	array ( ),
    'acceptable_sugar_flavors' => array (
	0 => 'CE',
	1 => 'PRO',
	2 => 'ENT',
    ),
    'readme' => $README,
	'key' => '',
	'author' => 'nlv',
	'description' => 'General doms for ORG2 orgs',
	'icon' => '',
	'is_uninstallable' => true,
	'name' => 'org2_doms',
	'published_date' => '2018-05-23',
	'type' => 'module',
	'version' => '1.4.0',
  'dependencies' => array(
  ),
	'remove_tables' => 'prompt',
);

$installdefs = array (
	'id' => 'org2_doms',
	'relationships' =>  array (  ),

	'copy' => array (
	),
  'language' => 
  array (
    array (
      'from' => '<basepath>/SugarModules/application/language/ru_RU.org2_doms.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),  
),
);
