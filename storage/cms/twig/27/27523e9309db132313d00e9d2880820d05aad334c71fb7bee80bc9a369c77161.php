<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/commentsSlider.htm */
class __TwigTemplate_06fde602e5328e07ff672aa9614a42e4a0205f87152e776737839d7f47d146b0 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "    <div class=\"slide-part\">
        <div class=\"portrait-block\">
            <div class=\"portrait\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "image", array(), "array"), "html", null, true);
            echo "\">
            </div>
            <p class=\"name\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array(), "array"), "html", null, true);
            echo "</p>
            <p class=\"description\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "description", array(), "array"), "html", null, true);
            echo "
            </p>
            <div class=\"description-underscore\"></div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div style=\"clear: both;\"></div>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/commentsSlider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  38 => 9,  33 => 7,  28 => 5,  23 => 2,  19 => 1,);
    }
}
/* {% for comment in comments %}*/
/*     <div class="slide-part">*/
/*         <div class="portrait-block">*/
/*             <div class="portrait">*/
/*                 <img src="{{ comment['image'] }}">*/
/*             </div>*/
/*             <p class="name">{{ comment['name'] }}</p>*/
/*             <p class="description">*/
/*                 {{ comment['description'] }}*/
/*             </p>*/
/*             <div class="description-underscore"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endfor %}*/
/* <div style="clear: both;"></div>*/
