<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/navigation.htm */
class __TwigTemplate_b856c31e744a9267a7115e90db8833863ad6cf1de819f054e96388c016843afa extends Twig_Template
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
        echo "<ul class=\"navigation clearfix\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li class=\"clickable\" data-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 1, array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], 0, array(), "array"), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="navigation clearfix">*/
/*     {% for item in items %}*/
/*         <li class="clickable" data-to="{{ item[1] }}">{{ item[0] }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
