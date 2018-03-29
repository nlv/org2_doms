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
	'published_date' => '2018-03-28',
	'type' => 'module',
	'version' => '1.1.4',
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
      'from' => '<basepath>/SugarModules/application/language/ru_RU.lang.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),  
),
);
