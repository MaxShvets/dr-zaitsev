<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/header.htm */
class __TwigTemplate_152fca4fcc459139d89e2b66fc4893721d02dda536d656d9c6148880acdc09f9 extends Twig_Template
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
        echo "<div class=\"header\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = (isset($context["navigation_items"]) ? $context["navigation_items"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="header">*/
/*     {% partial "navigation" items=navigation_items %}*/
/* </div>*/
