<?php
/**
 * @file
 * @package sceditor
 * @version $Id$
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class Sceditor_TextAreaBBCode extends XCube_ActionFilter
{
    /**
     * @public
     */
    function preBlockFilter()
    {
        $this->mRoot->mDelegateManager->reset('Site.TextareaEditor.BBCode.Show');
        $this->mRoot->mDelegateManager->add('Site.TextareaEditor.BBCode.Show',array(&$this, 'render'));
    }

    /**
     *  @public
    */
    public function render(&$html, $params)
    {
        $root =& XCube_Root::getSingleton();
        $renderSystem =& $root->getRenderSystem(XOOPSFORM_DEPENDENCE_RENDER_SYSTEM);
        
        $renderTarget =& $renderSystem->createRenderTarget('main');
    
        $renderTarget->setAttribute('legacy_module', 'sceditor');
        $renderTarget->setTemplateName("sceditor_textarea.html");
        $renderTarget->setAttribute("element", $params);
    
        $renderSystem->render($renderTarget);
    
        $html = $renderTarget->getResult();
    
        $this->_addScript($params);
    }

    protected function _addScript(/*** string[] ***/ $params)
    {
        $chandler = xoops_gethandler('config');
        $conf = $chandler->getConfigsByDirname('sceditor');
        $script = $conf['bbcode_config'];
    
        $root = XCube_Root::getSingleton();
        $jQuery = $root->mContext->getAttribute('headerScript');
        $jQuery->addScript('$("#'.$params['id'].'").sceditorBBCodePlugin({'.$script.'});');
        $jQuery->addLibrary('/modules/sceditor/sceditor/minified/jquery.sceditor.min.js');
        $jQuery->addLibrary('/modules/sceditor/sceditor/languages/ja.js');
        $jQuery->addStylesheet('/modules/sceditor/sceditor/jquery.sceditor.css');

    }
}

?>
