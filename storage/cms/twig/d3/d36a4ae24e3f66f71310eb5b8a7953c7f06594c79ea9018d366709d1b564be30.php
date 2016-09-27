<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/formElement.htm */
class __TwigTemplate_68146b32270e868e3e8ff14ef9dae44000b69811af1c0868b37793f0753d040e extends Twig_Template
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
        echo "<div class=\"consultation-form-element\">
    <label for=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "</label>
    ";
        // line 3
        if (((isset($context["elementType"]) ? $context["elementType"] : null) == "input")) {
            // line 4
            echo "        <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['name'] = (isset($context["name"]) ? $context["name"] : null)            ;
            $context['__cms_partial_params']['label'] = (isset($context["label"]) ? $context["label"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("formElementAttributes"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            echo ">
    ";
        } else {
            // line 6
            echo "        <textarea ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['name'] = (isset($context["name"]) ? $context["name"] : null)            ;
            $context['__cms_partial_params']['label'] = (isset($context["label"]) ? $context["label"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction("formElementAttributes"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            echo "></textarea>
    ";
        }
        // line 8
        echo "    <div class=\"errors\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/formElement.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  42 => 6,  30 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="consultation-form-element">*/
/*     <label for="{{ name }}">{{ label }}</label>*/
/*     {% if elementType == "input"%}*/
/*         <input type="{{ type }}" {% partial "formElementAttributes" name=name label=label %}>*/
/*     {% else %}*/
/*         <textarea {% partial "formElementAttributes" name=name label=label %}></textarea>*/
/*     {% endif %}*/
/*     <div class="errors"></div>*/
/* </div>*/
