<?php
/**
 * ddTypograph
 * @version 2.7.1 (2025-02-16)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/ddtypograph
 * 
 * @copyright 2010–2025 Ronef {@link https://Ronef.me }
 */

// Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	$modx->getConfig('base_path')
	. 'assets/libs/ddTools/modx.ddtools.class.php'
);

return \DDTools\Snippet::runSnippet([
	'name' => 'ddTypograph',
	'params' => $params,
]);
?>