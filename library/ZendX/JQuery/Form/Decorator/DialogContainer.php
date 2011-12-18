<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category    ZendX
 * @package     ZendX_JQuery
 * @subpackage  View
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license     http://framework.zend.com/license/new-bsd     New BSD License
 * @version     $Id: DialogContainer.php 20165 2010-01-09 18:57:56Z bkarwin $
 */

/**
 * @see ZendX_JQuery_Form_Decorator_UiWidgetContainer
 */
require_once "UiWidgetContainer.php";

/**
 * Form Decorator for jQuery Dialog View Helper
 *
 * @package    ZendX_JQuery
 * @subpackage Form
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class ZendX_JQuery_Form_Decorator_DialogContainer extends ZendX_JQuery_Form_Decorator_UiWidgetContainer
{
    protected $_helper = "dialogContainer";
}