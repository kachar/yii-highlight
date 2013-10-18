#Highlighter component for Yii Framework using Highlight.Js

This application component wraps Highlight.js library by Ivan Sagalaev 

[Highlight.js Homepage](http://softwaremaniacs.org/soft/highlight/en/)
[Highlight.js API Reference](http://highlightjs.readthedocs.org/en/latest/api.html)


##Install
Unpack extension into a directory of your choice, the extensions directory would be a good choice.

Add to config/main.php:
~~~
[php]
    'components' => array(
            'highlightCode' => array(
                'class' => 'ext.HighlightJs.HighlightJs',
            ),
            ...
    ),
~~~

If you want a theme other than the default: 
~~~
[php]
    'components' => array(
            'highlightCode' => array(
                'class' => 'ext.HighlightJs.HighlightJs',
                'theme' => 'github',
            ),
            ...
    ),
~~~

You can choose from the following themes:
* default (the default if none provided)
* arta
* ascetic
* brown_paper
* dark
* far
* github
* googlecode
* idea
* ir_black
* magula
* monokai
* pojoaque
* rainbow
* school_book
* solarized_dark
* solarized_light
* sunburst
* tomorrow
* tomorrow-night-blue
* tomorrow-night-bright
* tomorrow-night
* tomorrow-night-eighties
* vs
* xcode
* zenburn

    
##Usage
This component does not require jQuery library to be loaded.

Insert this code where you want the highlightCode script to be (Controller or Layout):
~~~
[php]
<?php Yii::app()->highlightCode->addHighlighter(); ?>
~~~

The component includes this javascript function with general usage for all `pre` tags.
You can use the `enableHighlighting()` after the page has loaded
~~~
[js]
function enableHighlighting() {
    var preElements = document.getElementsByTagName("pre");
    for (var i = 0; i < preElements.length; i++) {
        hljs.highlightBlock(preElements[i]);
    }
}
enableHighlighting();
~~~

Please check [Highlight.js API Reference](http://highlightjs.readthedocs.org/en/latest/api.html) for detailed usage.



The script will highlight any pre tag:
~~~
[html]
<pre>
function Hello($world) {
    echo 'Hello ' . $world;
}
</pre>
~~~


~~~
[xml]
<pre>
<?xml version="1.0" encoding="utf-8"?>
<root>
<elements>
    <element attr="test">Value</element>
</elements>
</root>
</pre>
~~~

