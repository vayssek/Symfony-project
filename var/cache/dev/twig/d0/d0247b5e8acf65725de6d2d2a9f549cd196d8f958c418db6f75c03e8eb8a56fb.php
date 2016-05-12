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
        $__internal_590ce1f0a50714fc42e93319067e82b384c2ca8029cfee4226a44f86815a5a7b = $this->env->getExtension("native_profiler");
        $__internal_590ce1f0a50714fc42e93319067e82b384c2ca8029cfee4226a44f86815a5a7b->enter($__internal_590ce1f0a50714fc42e93319067e82b384c2ca8029cfee4226a44f86815a5a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formulaire.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'label');
        echo "<br>
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'widget');
        echo "<br>
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "auteur", array()), 'errors');
        echo "<br>
";
        // line 7
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("placeholder" => "Ecrivez votre contenu !")));
        // line 18
        echo "<br>
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "<br>

";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_590ce1f0a50714fc42e93319067e82b384c2ca8029cfee4226a44f86815a5a7b->leave($__internal_590ce1f0a50714fc42e93319067e82b384c2ca8029cfee4226a44f86815a5a7b_prof);

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
        return array (  76 => 22,  71 => 19,  68 => 18,  66 => 17,  62 => 16,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  47 => 9,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* */
/* {{ form_start(form) }}*/
/* */
/* {{ form_label(form.auteur) }}<br>*/
/* {{ form_widget(form.auteur) }}<br>*/
/* {{ form_errors(form.auteur) }}<br>*/
/* {{ form_row(form.auteur) }}<hr>*/
/* */
/* {{ form_label(form.titre,*/
/* 	"Entrez le titre de l'article",*/
/* 	{'label_attr':{'class':'maclasse','title':'Le titre'}})}}<br>*/
/* {{ form_widget(form.titre,*/
/* {'attr':{'placeholder':'Titre'}})}}<br>*/
/* {{ form_errors(form.titre) }}<br>*/
/* */
/* {{ form_label(form.contenu,"Contenu") }}<br>*/
/* {{ form_widget(form.contenu,*/
/* {'attr':{'placeholder':'Ecrivez votre contenu !'}}) }}<br>*/
/* {{ form_errors(form.contenu) }}<br>*/
/* */
/* {#{ form_widget(form) }} Affichage du formulaire sans modification de la mise en page de base#}*/
/* {{ form_end(form) }}*/
/* */
/* */
