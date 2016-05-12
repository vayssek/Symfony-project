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
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_639705c2d9d78420ed05a2c679440acaecfbf3374d436efd281e25eb3b6ac28c = $this->env->getExtension("native_profiler");
        $__internal_639705c2d9d78420ed05a2c679440acaecfbf3374d436efd281e25eb3b6ac28c->enter($__internal_639705c2d9d78420ed05a2c679440acaecfbf3374d436efd281e25eb3b6ac28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639705c2d9d78420ed05a2c679440acaecfbf3374d436efd281e25eb3b6ac28c->leave($__internal_639705c2d9d78420ed05a2c679440acaecfbf3374d436efd281e25eb3b6ac28c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_597db0add4a74fa3217e6f16fc0897949e048978d0fd8c9f4268cf1f4e455b65 = $this->env->getExtension("native_profiler");
        $__internal_597db0add4a74fa3217e6f16fc0897949e048978d0fd8c9f4268cf1f4e455b65->enter($__internal_597db0add4a74fa3217e6f16fc0897949e048978d0fd8c9f4268cf1f4e455b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Ajouter un article :</h2>
";
        // line 5
        $this->loadTemplate("blog/formulaire.html.twig", "blog/ajout.html.twig", 5)->display($context);
        
        $__internal_597db0add4a74fa3217e6f16fc0897949e048978d0fd8c9f4268cf1f4e455b65->leave($__internal_597db0add4a74fa3217e6f16fc0897949e048978d0fd8c9f4268cf1f4e455b65_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block body %}*/
/* <h2>Ajouter un article :</h2>*/
/* {% include 'blog/formulaire.html.twig' %}*/
/* {% endblock %}*/
/* */
