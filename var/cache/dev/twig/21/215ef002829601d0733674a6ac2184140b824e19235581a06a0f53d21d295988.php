<?php

/* blog/ajout.html.twig */
class __TwigTemplate_e6a934afc384c439277e1f6d17fb6e5638e9178dab24608107583b4e3e0f7076 extends Twig_Template
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
        $__internal_0f5ea8eb4fd0b3090b8ad285a15e928c8839d7b55cb14d40480755bb87989c9b = $this->env->getExtension("native_profiler");
        $__internal_0f5ea8eb4fd0b3090b8ad285a15e928c8839d7b55cb14d40480755bb87989c9b->enter($__internal_0f5ea8eb4fd0b3090b8ad285a15e928c8839d7b55cb14d40480755bb87989c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/ajout.html.twig"));

        // line 1
        echo "<body>
<h1>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")), "html", null, true);
        echo "
</h1>
</body>";
        
        $__internal_0f5ea8eb4fd0b3090b8ad285a15e928c8839d7b55cb14d40480755bb87989c9b->leave($__internal_0f5ea8eb4fd0b3090b8ad285a15e928c8839d7b55cb14d40480755bb87989c9b_prof);

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
        return array (  26 => 3,  22 => 1,);
    }
}
/* <body>*/
/* <h1>*/
/* {{ajout}}*/
/* </h1>*/
/* </body>*/
