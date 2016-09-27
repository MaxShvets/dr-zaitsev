<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/contactForm.htm */
class __TwigTemplate_992d950bc60bd127fc0b5d6e291e828e6d439e928d76f0ebfcfd6818913ba4a6 extends Twig_Template
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
        echo "<div class=\"consultation-form-container round-edged\">
    <img src=\"";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pencil.png");
        echo "\" class=\"pencil\">
    ";
        // line 3
        if ((isset($context["can_hide"]) ? $context["can_hide"] : null)) {
            // line 4
            echo "        <img src=\"";
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/blue-cross.png");
            echo "\" class=\"hide-consult-form-button clickable\">
    ";
        }
        // line 6
        echo "    <h3>Пожалуйста, заполните форму</h3>
    <form class=\"consultation-form\">
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['name'] = "consultName"        ;
        $context['__cms_partial_params']['label'] = "Имя"        ;
        echo $this->env->getExtension('CMS')->partialFunction("formTextElement"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['name'] = "consultMail"        ;
        $context['__cms_partial_params']['label'] = "Почта"        ;
        echo $this->env->getExtension('CMS')->partialFunction("formTextElement"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['elementType'] = "textarea"        ;
        $context['__cms_partial_params']['name'] = "consultMessage"        ;
        $context['__cms_partial_params']['label'] = "Сообщение"        ;
        echo $this->env->getExtension('CMS')->partialFunction("formElement"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        <button type=\"submit\" class=\"consult-form-button round-edged clickable\">
            Получить констультацию
        </button>
    </form>
    <div class=\"message-sent\">
        <h3>Ваше сообщение было отправлено</h3>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/partials/contactForm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  51 => 10,  44 => 9,  38 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="consultation-form-container round-edged">*/
/*     <img src="{{ 'assets/images/pencil.png'|theme }}" class="pencil">*/
/*     {% if can_hide %}*/
/*         <img src="{{ 'assets/images/blue-cross.png'|theme }}" class="hide-consult-form-button clickable">*/
/*     {% endif %}*/
/*     <h3>Пожалуйста, заполните форму</h3>*/
/*     <form class="consultation-form">*/
/*         {% partial "formTextElement" name="consultName" label="Имя" %}*/
/*         {% partial "formTextElement" name="consultMail" label="Почта" %}*/
/*         {% partial "formElement" elementType="textarea" name="consultMessage" label="Сообщение" %}*/
/*         <button type="submit" class="consult-form-button round-edged clickable">*/
/*             Получить констультацию*/
/*         </button>*/
/*     </form>*/
/*     <div class="message-sent">*/
/*         <h3>Ваше сообщение было отправлено</h3>*/
/*     </div>*/
/* </div>*/
