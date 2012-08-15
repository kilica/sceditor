<?php
/**
 * @file
 * @brief The page controller in the directory
 * @package sceditor
 * @version $Id$
**/
require_once '../../../mainfile.php';
$root = XCube_Root::getSingleton();
$root->mController->executeForward($root->mContext->mModule->getAdminIndex());

?>
