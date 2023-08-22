<?php
/**
 * ddTypograph
 * @version 2.6.1 (2023-08-23)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/ddtypograph
 * 
 * @copyright 2010–2023 Ronef {@link https://Ronef.ru }
 */

//Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	$modx->getConfig('base_path') .
	'assets/libs/ddTools/modx.ddtools.class.php'
	);

return \DDTools\Snippet::runSnippet([
	'name' => 'ddTypograph',
	'params' => $params
]);
?>