<?php

/* blog/modification.html.twig */
class __TwigTemplate_12774fc4c91c80b56b8dfbb270aada620c3d24754c2b550cd0fb1df5f6d5ae8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/modification.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c3c35188088dba08d97f2029a6ed10515c38b135545e56ad506d0a37097b846 = $this->env->getExtension("native_profiler");
        $__internal_4c3c35188088dba08d97f2029a6ed10515c38b135545e56ad506d0a37097b846->enter($__internal_4c3c35188088dba08d97f2029a6ed10515c38b135545e56ad506d0a37097b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3c35188088dba08d97f2029a6ed10515c38b135545e56ad506d0a37097b846->leave($__internal_4c3c35188088dba08d97f2029a6ed10515c38b135545e56ad506d0a37097b846_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef62367925f22012298e5fb53c114e4eff3fbf492c550d3548d159497003ff19 = $this->env->getExtension("native_profiler");
        $__internal_ef62367925f22012298e5fb53c114e4eff3fbf492c550d3548d159497003ff19->enter($__internal_ef62367925f22012298e5fb53c114e4eff3fbf492c550d3548d159497003ff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2>Modifier l'article ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h2>
";
        
        $__internal_ef62367925f22012298e5fb53c114e4eff3fbf492c550d3548d159497003ff19->leave($__internal_ef62367925f22012298e5fb53c114e4eff3fbf492c550d3548d159497003ff19_prof);

    }

    public function getTemplateName()
    {
        return "blog/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* 	*/
/* {% block body %}*/
/* 	<h2>Modifier l'article {{ id }}</h2>*/
/* {% endblock %}*/
/* */
