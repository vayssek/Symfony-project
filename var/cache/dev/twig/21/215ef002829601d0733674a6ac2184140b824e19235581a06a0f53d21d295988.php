<?php

/* blog/ajout.html.twig */
class __TwigTemplate_e6a934afc384c439277e1f6d17fb6e5638e9178dab24608107583b4e3e0f7076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/ajout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e230cc527c99b13b2df2bb673cc34c65227b1af19606878b90bf11c026e0ccc = $this->env->getExtension("native_profiler");
        $__internal_3e230cc527c99b13b2df2bb673cc34c65227b1af19606878b90bf11c026e0ccc->enter($__internal_3e230cc527c99b13b2df2bb673cc34c65227b1af19606878b90bf11c026e0ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e230cc527c99b13b2df2bb673cc34c65227b1af19606878b90bf11c026e0ccc->leave($__internal_3e230cc527c99b13b2df2bb673cc34c65227b1af19606878b90bf11c026e0ccc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ceae1d1553b0b314d0ea14a3793b240bfe6860bffbc5b71e480bd5a4b3b24fa = $this->env->getExtension("native_profiler");
        $__internal_9ceae1d1553b0b314d0ea14a3793b240bfe6860bffbc5b71e480bd5a4b3b24fa->enter($__internal_9ceae1d1553b0b314d0ea14a3793b240bfe6860bffbc5b71e480bd5a4b3b24fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "<p class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
<h2>Ajouter un article :</h2>
\t";
        // line 9
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajout.html.twig", 9)->display($context);
        
        $__internal_9ceae1d1553b0b314d0ea14a3793b240bfe6860bffbc5b71e480bd5a4b3b24fa->leave($__internal_9ceae1d1553b0b314d0ea14a3793b240bfe6860bffbc5b71e480bd5a4b3b24fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e9adfb48be0c37f78d0faa459834fed18a417c31019a9c8d7621874e0195df9 = $this->env->getExtension("native_profiler");
        $__internal_8e9adfb48be0c37f78d0faa459834fed18a417c31019a9c8d7621874e0195df9->enter($__internal_8e9adfb48be0c37f78d0faa459834fed18a417c31019a9c8d7621874e0195df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/basic/ckeditor.js\"></script>
";
        
        $__internal_8e9adfb48be0c37f78d0faa459834fed18a417c31019a9c8d7621874e0195df9->leave($__internal_8e9adfb48be0c37f78d0faa459834fed18a417c31019a9c8d7621874e0195df9_prof);

    }

    public function getTemplateName()
    {
        return "blog/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 11,  58 => 9,  54 => 7,  45 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block body %}*/
/* {% for message in app.session.flashbag.get('info') %}*/
/* <p class="alert alert-danger">{{ message }}</p>*/
/* {% endfor %}*/
/* */
/* <h2>Ajouter un article :</h2>*/
/* 	{% include 'blog/formulaire.html.twig' %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script src="//cdn.ckeditor.com/4.5.9/basic/ckeditor.js"></script>*/
/* {% endblock %}*/
