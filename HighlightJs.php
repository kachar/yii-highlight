<?php

class HighlightJs extends CApplicationComponent {

    private $_aUrl = '';

    public $theme = 'default';

    protected function registerScript() {
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $assets = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'highlight' . DIRECTORY_SEPARATOR;
        $this->_aUrl = Yii::app()->getAssetManager()->publish($assets);
        $cs->registerScriptFile($this->_aUrl . '/highlight.pack.js');
        $cs->registerCssFile($this->_aUrl . '/styles/' . $this->theme . '.css');
    }

    public function init() {
        $this->registerScript();
        parent::init();
    }

    public function addHighlighter() {

        Yii::app()->clientScript->registerScript(__CLASS__, '
            function enableHighlighting() {
            	var preElements = document.getElementsByTagName("pre");
	            for (var i = 0; i < preElements.length; i++) {
	                hljs.highlightBlock(preElements[i]);
	            }
            }
            enableHighlighting();
        ', CClientScript::POS_END);
    }

}
