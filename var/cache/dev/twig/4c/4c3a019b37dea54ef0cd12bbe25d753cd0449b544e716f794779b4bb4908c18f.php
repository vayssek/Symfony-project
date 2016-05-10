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
        $__internal_bdd338a3958cdce3ef3e32284a53708224d29354e7a61be3448bf4758d0098a6 = $this->env->getExtension("native_profiler");
        $__internal_bdd338a3958cdce3ef3e32284a53708224d29354e7a61be3448bf4758d0098a6->enter($__internal_bdd338a3958cdce3ef3e32284a53708224d29354e7a61be3448bf4758d0098a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd338a3958cdce3ef3e32284a53708224d29354e7a61be3448bf4758d0098a6->leave($__internal_bdd338a3958cdce3ef3e32284a53708224d29354e7a61be3448bf4758d0098a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_581ea96703cb2386bcbd13dc1f7f688cbee32d66137a4a1e4ee2bc6c688029c5 = $this->env->getExtension("native_profiler");
        $__internal_581ea96703cb2386bcbd13dc1f7f688cbee32d66137a4a1e4ee2bc6c688029c5->enter($__internal_581ea96703cb2386bcbd13dc1f7f688cbee32d66137a4a1e4ee2bc6c688029c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2>Modifier l'article ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h2>
\t";
        // line 5
        $this->loadTemplate("'blog/formulaire.html.twig", "blog/modification.html.twig", 5)->display($context);
        
        $__internal_581ea96703cb2386bcbd13dc1f7f688cbee32d66137a4a1e4ee2bc6c688029c5->leave($__internal_581ea96703cb2386bcbd13dc1f7f688cbee32d66137a4a1e4ee2bc6c688029c5_prof);

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
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* 	*/
/* {% block body %}*/
/* 	<h2>Modifier l'article {{ id }}</h2>*/
/* 	{% include "'blog/formulaire.html.twig" %}*/
/* {% endblock %}*/
/* */
