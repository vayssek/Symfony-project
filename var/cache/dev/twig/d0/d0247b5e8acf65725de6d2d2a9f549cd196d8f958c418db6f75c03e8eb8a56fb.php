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
        $__internal_be21d68e29f3840b3e413b9af456f6932a5053ea5fbf966e98d0bd7b4e82ea4b = $this->env->getExtension("native_profiler");
        $__internal_be21d68e29f3840b3e413b9af456f6932a5053ea5fbf966e98d0bd7b4e82ea4b->enter($__internal_be21d68e29f3840b3e413b9af456f6932a5053ea5fbf966e98d0bd7b4e82ea4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/formulaire.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_be21d68e29f3840b3e413b9af456f6932a5053ea5fbf966e98d0bd7b4e82ea4b->leave($__internal_be21d68e29f3840b3e413b9af456f6932a5053ea5fbf966e98d0bd7b4e82ea4b_prof);

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
        return array (  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* */
