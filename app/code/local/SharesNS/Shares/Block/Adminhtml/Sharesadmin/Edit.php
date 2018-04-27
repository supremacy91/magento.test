<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright  Copyright (c) 2006-2017 X.commerce, Inc. and affiliates (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * CMS block edit form container
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class SharesNS_Shares_Block_Adminhtml_Sharesadmin_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {

        $this->_blockGroup = 'shares';
        $this->_controller = 'adminhtml_sharesadmin';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Shares'));
        $this->_updateButton('delete', 'label', $this->__('Delete Shares'));

//        $this->_addButton('saveandcontinue', array(
//            'label' => $this->__('Save and Continue Edit'),
//            'onclick' => 'edit_form.action=\'' . $this->getUrl('*/*/saveAndContinueEdit') . '\';edit_form.submit();',
//            'class' => 'save',
//        ), -100);
    }
}