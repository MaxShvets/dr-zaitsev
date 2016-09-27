<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/layouts/default.htm */
class __TwigTemplate_77376dc5f900991f32754f3f15ffa8763d5864a519c14f3c428186adbd8947e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/style.css");
        echo "\">
        <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    </head>

    <body>
        ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        ";
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 14
        echo "        <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "@jquery"));
        echo "\"></script>
        ";
        // line 15
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 16
        echo "        <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
        <script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/articleViewer.js");
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  53 => 16,  50 => 15,  45 => 14,  42 => 13,  38 => 12,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <link rel="stylesheet" href="{{ 'assets/css/style.css'|theme }}">*/
/*         <title>{{ this.page.title }}</title>*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% partial "header" %}*/
/*         {% page %}*/
/*         <script src="{{ ['@jquery']|theme }}"></script>*/
/*         {% framework %}*/
/*         <script src="{{ 'assets/js/main.js'|theme }}"></script>*/
/*         <script src="{{ 'assets/js/articleViewer.js'|theme }}"></script>*/
/*     </body>*/
/* </html>*/
