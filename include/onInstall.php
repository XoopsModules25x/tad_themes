<?php
use XoopsModules\Tadtools\Utility;

require dirname(__DIR__) . '/preloads/autoloader.php';

function xoops_module_install_tad_themes(&$module)
{
    Utility::mk_dir(XOOPS_ROOT_PATH . '/uploads/tad_themes');

    return true;
}
