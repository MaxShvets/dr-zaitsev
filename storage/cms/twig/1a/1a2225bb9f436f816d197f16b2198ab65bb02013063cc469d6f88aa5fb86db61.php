<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/formTextElement.htm */
class __TwigTemplate_50c74ab2e99d602462e6442ddab5a19d705e7177f095d578eef82bb398ec0813 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['elementType'] = "input"        ;
        $context['__cms_partial_params']['type'] = "text"        ;
        $context['__cms_partial_params']['name'] = (isset($context["name"]) ? $context["name"] : null)        ;
        $context['__cms_partial_params']['label'] = (isset($context["label"]) ? $context["label"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("formElement"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/formTextElement.htm";
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
/* {% partial "formElement" elementType="input" type="text" name=name label=label %}*/
