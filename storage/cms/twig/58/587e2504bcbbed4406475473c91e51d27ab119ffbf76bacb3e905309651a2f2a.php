<?php

/* /Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/pages/homepage.htm */
class __TwigTemplate_17e0038ad82a7b55e56ef2b52cc2b9b5a37a73785ac4d2fda9444ae86a20689e extends Twig_Template
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
        echo "<a id=\"top\" class=\"page-anchor\"></a>
<div class=\"top-section\">
    <div class=\"personal-page-container\">
        <div class=\"personal-page\">
            <h1>
                Персональная страница<br>
                доктора зайцева
            </h1>
            <div class=\"divider-line\"></div>
            <p>
                Для получения бесплатной консультации,<br>
                пожалуйста, заполните форму справа
            </p>
            <button class=\"consult-form-button display-consult-button orange-button round-edged clickable\">
                Получить консультацию
            </button>
        </div>
        <div class=\"vertical-blue-stripe\"></div>
    </div>
    <div class=\"shadow-container\">
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['can_hide'] = true        ;
        echo $this->env->getExtension('CMS')->partialFunction("contactForm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        <div class=\"bottom-shadow\"></div>
        <div class=\"right-shadow\"></div>
    </div>
    <img src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/doctors-coat.png");
        echo "\" class=\"consult-form-cover animated\">
    <div style=\"clear: both;\"></div>
</div>

<a id=\"about-doctor\" class=\"page-anchor\"></a>
<div class=\"about-doctor-section\">
    <div class=\"about-doctor-header\">
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = (isset($context["about_doctor_items"]) ? $context["about_doctor_items"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    </div>

    <div class=\"doctor-info-block\">
        <div class=\"portrait-container\">
            <div class=\"portrait-block has-shadow\">
                <div class=\"portrait\">
                    <img src=\"";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/zaytsev-photo.png");
        echo "\">
                </div>
                <p class=\"name\">Зайцев Сергей Владимирович</p>
                <p class=\"description\">
                    Хирург высшей категории, онколог, психолог, специалист в области народной и нетрадиционной медицины
                </p>
            </div>
        </div>

        <div class=\"info-text\">
            <h2>о докторе</h2>

            <div class=\"info-scroll\">
                <div class=\"scroll-moving-part\">
                    <div id=\"main-directions\" class=\"info-section\">
                        <p class=\"section-heading main-directions\">Основные направления</p>

                        <p class=\"subsection-heading\">Лечение ран различного происхождения</p>
                        <p class=\"text\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.
                            Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate
                            congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue
                            lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.
                        </p>

                        <p class=\"subsection-heading\">Кинезитерапия</p>
                        <p class=\"text\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.
                            Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate
                            congue. Sed volutpat sem non porttitor suscipit. Curabitur
                        </p>
                    </div>

                    <div id=\"medical-education\" class=\"info-section\">
                        <p class=\"section-heading medical-education\">Медицинское образование</p>

                        <p class=\"text\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.
                            Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate
                            congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue
                            lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.
                        </p>
                    </div>

                    <div id=\"conference-participation\" class=\"info-section\">
                        <p class=\"section-heading conference-participation\">Участие в конференциях</p>

                        <p class=\"text\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.
                            Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate
                            congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue
                            lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.
                        </p>
                    </div>

                    <div id=\"author-technique\" class=\"info-section\">
                        <p class=\"section-heading author-technique\">Авторская методика</p>

                        <p class=\"text\">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.
                            Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate
                            congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue
                            lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a id=\"comments\" class=\"page-anchor\"></a>
<div class=\"comments-section\">
    <h2>Отзывы</h2>

    <div class=\"comments-slider\">
        <div class=\"comments-moving-block\">
            ";
        // line 116
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['comments'] = (isset($context["comments"]) ? $context["comments"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction("commentsSlider"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 117
        echo "        </div>

        <div class=\"comments-slider-controls\"></div>
    </div>
</div>

<a id=\"articles\" class=\"page-anchor\"></a>
<div class=\"articles-section\">
    <div class=\"article-slider\">
        <div class=\"left-arrow clickable\">
            <img src=\"";
        // line 127
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/left-arrow.png");
        echo "\">
        </div>
        <div class=\"right-arrow clickable\">
            <img src=\"";
        // line 130
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/right-arrow.png");
        echo "\">
        </div>

        <div class='controls-block'>
            <img class=\"close\" src=\"";
        // line 134
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/white-cross.png");
        echo "\">
            <img class=\"full-screen\" src=\"";
        // line 135
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/full-screen-icon.png");
        echo "\">
            <img class=\"zoom\" src=\"";
        // line 136
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/zoom-icon.png");
        echo "\">
        </div>

        <div class=\"slider\"></div>
    </div>

    <h2>статьи</h2>

    <div class=\"first-warning\">

        <img class=\"warning-image\" src=\"";
        // line 146
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/content-warning.png");
        echo "\">
        <p class=\"warning\">Вы уверены, что готовы просмотру фото реальных глубоких повреждений кожи?</p>

        <button class=\"consult-form-button ready-button orange-button round-edged clickable\">Да</button>
        <button class=\"not-ready-button clickable\">Нет</button>
    </div>

    <div class=\"articles-catalogue\"></div>
</div>

<a id=\"contacts\" class=\"page-anchor\"></a>
<div class=\"contacts-section\">
    <h2>Контакты</h2>

    <div class=\"contacts-container\">
        <div class=\"contacts\">
            <div class=\"contacts-text-container\">
                <p class=\"contact-description\">
                    На указанный ниже адрес можете высылать снимки для получения консультации через интернет
                </p>
                <p class=\"contact\">
                    healingchance@mail.ru
                </p>

                <p class=\"contact-description\">
                    Запись на консультацию по телефонам:
                </p>
                <p class=\"contact\">
                    +38 050 273 66 82<br>
                    +38 067 700 23 34<br>
                    +38 063 840 39 83
                </p>
            </div>
        </div>

        <div class=\"form\">
            ";
        // line 182
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['can_hide'] = false        ;
        echo $this->env->getExtension('CMS')->partialFunction("contactForm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 183
        echo "        </div>
    </div>


    <div style=\"clear: both;\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/MaxShvets/Sites/dr-zaitsev/themes/dr-zaitsev/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 183,  244 => 182,  205 => 146,  192 => 136,  188 => 135,  184 => 134,  177 => 130,  171 => 127,  159 => 117,  154 => 116,  74 => 39,  66 => 33,  61 => 32,  51 => 25,  46 => 22,  41 => 21,  19 => 1,);
    }
}
/* <a id="top" class="page-anchor"></a>*/
/* <div class="top-section">*/
/*     <div class="personal-page-container">*/
/*         <div class="personal-page">*/
/*             <h1>*/
/*                 Персональная страница<br>*/
/*                 доктора зайцева*/
/*             </h1>*/
/*             <div class="divider-line"></div>*/
/*             <p>*/
/*                 Для получения бесплатной консультации,<br>*/
/*                 пожалуйста, заполните форму справа*/
/*             </p>*/
/*             <button class="consult-form-button display-consult-button orange-button round-edged clickable">*/
/*                 Получить консультацию*/
/*             </button>*/
/*         </div>*/
/*         <div class="vertical-blue-stripe"></div>*/
/*     </div>*/
/*     <div class="shadow-container">*/
/*         {% partial "contactForm" can_hide=true %}*/
/*         <div class="bottom-shadow"></div>*/
/*         <div class="right-shadow"></div>*/
/*     </div>*/
/*     <img src="{{ 'assets/images/doctors-coat.png'|theme }}" class="consult-form-cover animated">*/
/*     <div style="clear: both;"></div>*/
/* </div>*/
/* */
/* <a id="about-doctor" class="page-anchor"></a>*/
/* <div class="about-doctor-section">*/
/*     <div class="about-doctor-header">*/
/*         {% partial 'navigation' items=about_doctor_items %}*/
/*     </div>*/
/* */
/*     <div class="doctor-info-block">*/
/*         <div class="portrait-container">*/
/*             <div class="portrait-block has-shadow">*/
/*                 <div class="portrait">*/
/*                     <img src="{{ 'assets/images/zaytsev-photo.png'|theme }}">*/
/*                 </div>*/
/*                 <p class="name">Зайцев Сергей Владимирович</p>*/
/*                 <p class="description">*/
/*                     Хирург высшей категории, онколог, психолог, специалист в области народной и нетрадиционной медицины*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="info-text">*/
/*             <h2>о докторе</h2>*/
/* */
/*             <div class="info-scroll">*/
/*                 <div class="scroll-moving-part">*/
/*                     <div id="main-directions" class="info-section">*/
/*                         <p class="section-heading main-directions">Основные направления</p>*/
/* */
/*                         <p class="subsection-heading">Лечение ран различного происхождения</p>*/
/*                         <p class="text">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.*/
/*                             Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate*/
/*                             congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue*/
/*                             lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.*/
/*                         </p>*/
/* */
/*                         <p class="subsection-heading">Кинезитерапия</p>*/
/*                         <p class="text">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.*/
/*                             Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate*/
/*                             congue. Sed volutpat sem non porttitor suscipit. Curabitur*/
/*                         </p>*/
/*                     </div>*/
/* */
/*                     <div id="medical-education" class="info-section">*/
/*                         <p class="section-heading medical-education">Медицинское образование</p>*/
/* */
/*                         <p class="text">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.*/
/*                             Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate*/
/*                             congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue*/
/*                             lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.*/
/*                         </p>*/
/*                     </div>*/
/* */
/*                     <div id="conference-participation" class="info-section">*/
/*                         <p class="section-heading conference-participation">Участие в конференциях</p>*/
/* */
/*                         <p class="text">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.*/
/*                             Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate*/
/*                             congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue*/
/*                             lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.*/
/*                         </p>*/
/*                     </div>*/
/* */
/*                     <div id="author-technique" class="info-section">*/
/*                         <p class="section-heading author-technique">Авторская методика</p>*/
/* */
/*                         <p class="text">*/
/*                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.*/
/*                             Mauris ac est at neque placerat efficitur laoreet et nulla. Integer placerat sapien laoreet dolor vulputate*/
/*                             congue. Sed volutpat sem non porttitor suscipit. Curabitur viverra pellentesque nisi, in dapibus augue*/
/*                             lacinia ut. Curabitur convallis quis risus tempus ullamcorper. Aenean in sagittis enim.*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <a id="comments" class="page-anchor"></a>*/
/* <div class="comments-section">*/
/*     <h2>Отзывы</h2>*/
/* */
/*     <div class="comments-slider">*/
/*         <div class="comments-moving-block">*/
/*             {% partial 'commentsSlider' comments=comments %}*/
/*         </div>*/
/* */
/*         <div class="comments-slider-controls"></div>*/
/*     </div>*/
/* </div>*/
/* */
/* <a id="articles" class="page-anchor"></a>*/
/* <div class="articles-section">*/
/*     <div class="article-slider">*/
/*         <div class="left-arrow clickable">*/
/*             <img src="{{ 'assets/images/left-arrow.png'|theme }}">*/
/*         </div>*/
/*         <div class="right-arrow clickable">*/
/*             <img src="{{ 'assets/images/right-arrow.png'|theme }}">*/
/*         </div>*/
/* */
/*         <div class='controls-block'>*/
/*             <img class="close" src="{{ 'assets/images/white-cross.png'|theme }}">*/
/*             <img class="full-screen" src="{{ 'assets/images/full-screen-icon.png'|theme }}">*/
/*             <img class="zoom" src="{{ 'assets/images/zoom-icon.png'|theme }}">*/
/*         </div>*/
/* */
/*         <div class="slider"></div>*/
/*     </div>*/
/* */
/*     <h2>статьи</h2>*/
/* */
/*     <div class="first-warning">*/
/* */
/*         <img class="warning-image" src="{{ 'assets/images/content-warning.png'|theme }}">*/
/*         <p class="warning">Вы уверены, что готовы просмотру фото реальных глубоких повреждений кожи?</p>*/
/* */
/*         <button class="consult-form-button ready-button orange-button round-edged clickable">Да</button>*/
/*         <button class="not-ready-button clickable">Нет</button>*/
/*     </div>*/
/* */
/*     <div class="articles-catalogue"></div>*/
/* </div>*/
/* */
/* <a id="contacts" class="page-anchor"></a>*/
/* <div class="contacts-section">*/
/*     <h2>Контакты</h2>*/
/* */
/*     <div class="contacts-container">*/
/*         <div class="contacts">*/
/*             <div class="contacts-text-container">*/
/*                 <p class="contact-description">*/
/*                     На указанный ниже адрес можете высылать снимки для получения консультации через интернет*/
/*                 </p>*/
/*                 <p class="contact">*/
/*                     healingchance@mail.ru*/
/*                 </p>*/
/* */
/*                 <p class="contact-description">*/
/*                     Запись на консультацию по телефонам:*/
/*                 </p>*/
/*                 <p class="contact">*/
/*                     +38 050 273 66 82<br>*/
/*                     +38 067 700 23 34<br>*/
/*                     +38 063 840 39 83*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form">*/
/*             {% partial "contactForm" can_hide=false %}*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div style="clear: both;"></div>*/
/* </div>*/
