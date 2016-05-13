<?php

/* blog/formulaire.html.twig */
class __TwigTemplate_2c1e0120b7cd64b1fe8f4e89697eceefd9c959d67a13ce175310f7b2e16a375f extends Twig_Template
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
        $__internal_c64a110de94f55f78da4a8909995f41d4d1178cc19ee82ec7b7f82c9379617f1 = $this->env->getExtension("native_profiler");
        $__internal_c64a110de94f55f78da4a8909995f41d4d1178cc19ee82ec7b7f82c9379617f1->enter($__internal_c64a110de94f55f78da4a8909995f41d4d1178cc19ee82ec7b7f82c9379617f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formulaire.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig", 1 => "blog/textarea_ckeditor.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'label');
        echo "<br>
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'widget');
        echo "<br>
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'errors');
        echo "<br>
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'row');
        echo "<hr>
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "maclasse", "title" => "Le titre"), "label" => "Entrez le titre de l'article"));
        // line 11
        echo "<br>
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre")));
        // line 13
        echo "<br>
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "<br>

";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label" => "Contenu"));
        echo "<br>
";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget');
        echo "
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "<br>

";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_c64a110de94f55f78da4a8909995f41d4d1178cc19ee82ec7b7f82c9379617f1->leave($__internal_c64a110de94f55f78da4a8909995f41d4d1178cc19ee82ec7b7f82c9379617f1_prof);

    }

    public function getTemplateName()
    {
        return "blog/formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  71 => 18,  67 => 17,  63 => 16,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% form_theme form 'bootstrap_3_layout.html.twig' 'blog/textarea_ckeditor.html.twig'%}*/
/* */
/* {{ form_start(form) }}*/
/* */
/* {{ form_label(form.auteur) }}<br>*/
/* {{ form_widget(form.auteur) }}<br>*/
/* {{ form_errors(form.auteur) }}<br>*/
/* {{ form_row(form.auteur) }}<hr>*/
/* {{ form_label(form.titre,*/
/* 	"Entrez le titre de l'article",*/
/* 	{'label_attr':{'class':'maclasse','title':'Le titre'}})}}<br>*/
/* {{ form_widget(form.titre,*/
/* {'attr':{'placeholder':'Titre'}})}}<br>*/
/* {{ form_errors(form.titre) }}<br>*/
/* */
/* {{ form_label(form.contenu,"Contenu") }}<br>*/
/* {{ form_widget(form.contenu)}}*/
/* {{ form_errors(form.contenu) }}<br>*/
/* */
/* {#{ form_widget(form) }} Affichage du formulaire sans modification de la mise en page de base#}*/
/* {{ form_end(form) }}*/
/* */
/* */
/* */
