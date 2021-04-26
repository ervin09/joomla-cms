<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 *
 * @copyright   (C) 2021 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Layout\LayoutHelper;

$displayData = [
	'textPrefix' => 'COM_BANNERS',
	'formURL'    => 'index.php?option=com_banners&view=banners',
	'helpURL'    => 'https://docs.joomla.org/Special:MyLanguage/Help40:Banners',
];

if (count(Factory::getApplication()->getIdentity()->getAuthorisedCategories('com_banners', 'core.create')) > 0)
{
	$displayData['createURL'] = 'index.php?option=com_banners&task=banner.add';
}

echo LayoutHelper::render('joomla.content.blankstate', $displayData);
