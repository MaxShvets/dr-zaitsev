<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/formElementAttributes.htm */
class __TwigTemplate_53c64d9e8bf5d0740607a3b63c2a9d21b100f9f86c6623fe8715818400c5c05c extends Twig_Template
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
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "\" class=\"round-edged\"";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/formElementAttributes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* id="{{ name }}" name="{{ name }}" placeholder="{{ label }}" class="round-edged"*/
