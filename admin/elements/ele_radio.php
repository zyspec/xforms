<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * xForms module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         xforms
 * @since           1.30
 * @author          Xoops Development Team
 */
defined('XFORMS_ROOT_PATH') || exit('Restricted access');

$options  = array();
$optCount = 0;
if (empty($addOpt) && !empty($eleId)) {
    $keys     = array_keys($value);
    $keyCount = count($keys);
    for ($i = 0; $i < $keyCount; ++$i) {
        $r         = $value[$keys[$i]] ? $optCount : null;
        $v         = $myts->htmlSpecialChars($keys[$i]);
        $options[] = addOption('ele_value[' . $optCount . ']', $optCount, $v, 'radio', $r);
        ++$optCount;
    }
} else {
    if (isset($eleValue) && count($eleValue) > 0) {
        while ($v = each($eleValue)) {
            $v['value'] = $myts->htmlSpecialChars($v['value']);
            if (!empty($v['value'])) {
                $r         = ($checked == $optCount) ? $optCount : null;
                $options[] = addOption('ele_value[' . $optCount . ']', $optCount, $v['value'], 'radio', $r);
                ++$optCount;
            }
        }
    }
    $addOpt = empty($addOpt) ? 2 : $addOpt;
    for ($i = 0; $i < $addOpt; ++$i) {
        $options[] = addOption('ele_value[' . $optCount . ']', $optCount, '', 'radio');
        ++$optCount;
    }
}
$options[] = addOptionsTray();
$opt_tray  = new XoopsFormElementTray(_AM_XFORMS_ELE_OPT, '<br />');
$opt_tray->setDescription(_AM_XFORMS_ELE_OPT_DESC2 . '<br /><br />' . _AM_XFORMS_ELE_OTHER);
for ($i = 0; $i < count($options); ++$i) {
    $opt_tray->addElement($options[$i]);
}
$output->addElement($opt_tray);