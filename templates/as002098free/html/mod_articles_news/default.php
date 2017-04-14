<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="mod-newsflash mod-newsflash__<?php echo $moduleclass_sfx; ?>">
	<?php
	foreach ($list as $item) :
	require JModuleHelper::getLayoutPath('mod_articles_news', '_item');
	endforeach;
	?>
</div>