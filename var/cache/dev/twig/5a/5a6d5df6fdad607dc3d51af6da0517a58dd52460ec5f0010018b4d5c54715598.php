<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_32d9d41d397587247ffc900f86f425f02ac6bcf71d7aa1f3b6aa95ba4efa5b5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c805adfecfe26141ed5419289669930bc3fea21c52498d9adb6136bfa7a2382f = $this->env->getExtension("native_profiler");
        $__internal_c805adfecfe26141ed5419289669930bc3fea21c52498d9adb6136bfa7a2382f->enter($__internal_c805adfecfe26141ed5419289669930bc3fea21c52498d9adb6136bfa7a2382f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c805adfecfe26141ed5419289669930bc3fea21c52498d9adb6136bfa7a2382f->leave($__internal_c805adfecfe26141ed5419289669930bc3fea21c52498d9adb6136bfa7a2382f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da9fe717adf333d434a37ab22b8186e72c0f6d1db8354291efdc0ebc5a298ad7 = $this->env->getExtension("native_profiler");
        $__internal_da9fe717adf333d434a37ab22b8186e72c0f6d1db8354291efdc0ebc5a298ad7->enter($__internal_da9fe717adf333d434a37ab22b8186e72c0f6d1db8354291efdc0ebc5a298ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da9fe717adf333d434a37ab22b8186e72c0f6d1db8354291efdc0ebc5a298ad7->leave($__internal_da9fe717adf333d434a37ab22b8186e72c0f6d1db8354291efdc0ebc5a298ad7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc1d43b26d2437eb1bd0f1cd9970ec894455aba4011c86b2dff8389dc79f407 = $this->env->getExtension("native_profiler");
        $__internal_ebc1d43b26d2437eb1bd0f1cd9970ec894455aba4011c86b2dff8389dc79f407->enter($__internal_ebc1d43b26d2437eb1bd0f1cd9970ec894455aba4011c86b2dff8389dc79f407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebc1d43b26d2437eb1bd0f1cd9970ec894455aba4011c86b2dff8389dc79f407->leave($__internal_ebc1d43b26d2437eb1bd0f1cd9970ec894455aba4011c86b2dff8389dc79f407_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4eb1d74d63073a9e062f11b0b86800ea48c340cde95da73c8f90a014ef0c81c3 = $this->env->getExtension("native_profiler");
        $__internal_4eb1d74d63073a9e062f11b0b86800ea48c340cde95da73c8f90a014ef0c81c3->enter($__internal_4eb1d74d63073a9e062f11b0b86800ea48c340cde95da73c8f90a014ef0c81c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4eb1d74d63073a9e062f11b0b86800ea48c340cde95da73c8f90a014ef0c81c3->leave($__internal_4eb1d74d63073a9e062f11b0b86800ea48c340cde95da73c8f90a014ef0c81c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
