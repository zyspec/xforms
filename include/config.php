<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Module: xForms
 *
 * @package   \XoopsModules\Xforms\include
 * @copyright Copyright (c) 2001-2020 {@link https://xoops.org XOOPS Project}
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @author    XOOPS Development Team
 * @link      https://github.com/XoopsModules25x/xforms
 */
function getConfig()
{
    $moduleDirName      = basename(dirname(__DIR__));
    $moduleDirNameUpper = mb_strtoupper($moduleDirName);
    return (object)[
        'name'           => mb_strtoupper($moduleDirName) . ' Module Configurator',
        'paths'          => [
            'dirname'    => $moduleDirName,
            'admin'      => XOOPS_ROOT_PATH . '/modules/' . $moduleDirName . '/admin',
            'modPath'    => XOOPS_ROOT_PATH . '/modules/' . $moduleDirName,
            'modUrl'     => XOOPS_URL . '/modules/' . $moduleDirName,
            'uploadPath' => XOOPS_UPLOAD_PATH . '/' . $moduleDirName,
            'uploadUrl'  => XOOPS_UPLOAD_URL . '/' . $moduleDirName,
        ],
        'uploadFolders'  => [
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH'),
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH') . '/category',
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH') . '/screenshots',
            //XOOPS_UPLOAD_PATH . '/flags'
        ],
        'copyBlankFiles' => [
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH'),
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH') . '/category',
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH') . '/screenshots',
            //XOOPS_UPLOAD_PATH . '/flags'
        ],
        'copyTestFolders' => [
            //        constant($moduleDirNameUpper . '_UPLOAD_PATH'),
            //        [
            //            constant($moduleDirNameUpper . '_PATH') . '/testdata/images',
            //            constant($moduleDirNameUpper . '_UPLOAD_PATH') . '/images',
            //        ]
        ],
        'templateFolders' => [
            '/templates/',
            '/templates/admin/',
            '/templates/blocks/',
        ],
        'oldFiles'        => [
            '/admin/ele_check.php',
            '/admin/ele_date.php',
            '/admin/ele_html.php',
            '/admin/ele_radio.php',
            '/admin/ele_select_ctry.php',
            '/admin/ele_select.php',
            '/admin/ele_tarea.php',
            '/admin/ele_text.php',
            '/admin/ele_upload.php',
            '/admin/ele_uploadimg.php',
            '/admin/ele_yn.php',
            '/admin/upgrade.php',
            '/class/constants.php',
            '/class/dbupdater.php',
            '/class/elementrenderer.php',
            '/class/elements.php',
            '/class/forms.php',
            '/class/helper.php',
            '/class/session.php',
            '/class/uploader.php',
            '/class/userdata.php',
            '/class/xforms.php',
            '/include/directorychecker.php',
            '/include/filechecker.php',
            '/include/form_execute.php',
            '/include/functions.php',
            '/include/module.php',
            '/ajaxrating.txt',
        ],
        'oldFolders'      => [
            '/images',
            '/css',
            '/js',
            '/tcpdf',
            '/images',
            '/xforms'
        ],
        'renameTables'    => [//         'XX_archive'     => 'ZZZZ_archive',
        ],
        'modCopyright' => "<a href='https://xoops.org' target='_blank'>"
        . "<img src='" . \Xmf\Module\Admin::iconUrl('xoopsmicrobutton.gif') . "' alt='XOOPS Project' title='XOOPS Project'></a>",
];
}
