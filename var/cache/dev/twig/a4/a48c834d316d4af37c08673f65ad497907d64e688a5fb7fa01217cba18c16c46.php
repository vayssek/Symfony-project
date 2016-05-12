<?php

/* blog/layout.html.twig */
class __TwigTemplate_3984340e9ab2c9bc73c827934d135cd209adea324444e188e8be98584a88cf61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'layout' => array($this, 'block_layout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9729eeeb92eef7462c84310973026725c68311693248cb5dfb0a4565fe9b0bd1 = $this->env->getExtension("native_profiler");
        $__internal_9729eeeb92eef7462c84310973026725c68311693248cb5dfb0a4565fe9b0bd1->enter($__internal_9729eeeb92eef7462c84310973026725c68311693248cb5dfb0a4565fe9b0bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9729eeeb92eef7462c84310973026725c68311693248cb5dfb0a4565fe9b0bd1->leave($__internal_9729eeeb92eef7462c84310973026725c68311693248cb5dfb0a4565fe9b0bd1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_47fea3fa197d92a8506815f43802a0692ecd9677dcf40879139a6c7011e84b40 = $this->env->getExtension("native_profiler");
        $__internal_47fea3fa197d92a8506815f43802a0692ecd9677dcf40879139a6c7011e84b40->enter($__internal_47fea3fa197d92a8506815f43802a0692ecd9677dcf40879139a6c7011e84b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 3
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Blog 
";
        
        $__internal_47fea3fa197d92a8506815f43802a0692ecd9677dcf40879139a6c7011e84b40->leave($__internal_47fea3fa197d92a8506815f43802a0692ecd9677dcf40879139a6c7011e84b40_prof);

    }

    // line 6
    public function block_layout($context, array $blocks = array())
    {
        $__internal_fa575df5d7f8e17043f8abb11af273651c40b5d3cee1c809c61a6ef07490a18f = $this->env->getExtension("native_profiler");
        $__internal_fa575df5d7f8e17043f8abb11af273651c40b5d3cee1c809c61a6ef07490a18f->enter($__internal_fa575df5d7f8e17043f8abb11af273651c40b5d3cee1c809c61a6ef07490a18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 7
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        
        $__internal_fa575df5d7f8e17043f8abb11af273651c40b5d3cee1c809c61a6ef07490a18f->leave($__internal_fa575df5d7f8e17043f8abb11af273651c40b5d3cee1c809c61a6ef07490a18f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_af506a743ce9bdada36cabab7b10f6a79f3adb7f6455c11350a0f0fb87dd1599 = $this->env->getExtension("native_profiler");
        $__internal_af506a743ce9bdada36cabab7b10f6a79f3adb7f6455c11350a0f0fb87dd1599->enter($__internal_af506a743ce9bdada36cabab7b10f6a79f3adb7f6455c11350a0f0fb87dd1599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_af506a743ce9bdada36cabab7b10f6a79f3adb7f6455c11350a0f0fb87dd1599->leave($__internal_af506a743ce9bdada36cabab7b10f6a79f3adb7f6455c11350a0f0fb87dd1599_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  53 => 6,  44 => 3,  36 => 2,  11 => 1,);
    }
}
/* {%extends "base.html.twig"%} */
/* {% block title %} */
/* {{ parent() }} - Blog */
/* {% endblock %}*/
/* */
/* {%block layout%}*/
/* {%block body%} {%endblock%} {%endblock%}*/
/* */
