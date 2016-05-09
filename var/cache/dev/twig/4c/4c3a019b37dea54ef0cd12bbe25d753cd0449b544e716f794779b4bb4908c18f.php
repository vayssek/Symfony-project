<?php

/* blog/modification.html.twig */
class __TwigTemplate_12774fc4c91c80b56b8dfbb270aada620c3d24754c2b550cd0fb1df5f6d5ae8e extends Twig_Template
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
        $__internal_f827a9b3672a7782aebc35730b9dfb3f7f7273b1db560984da6107a59982fbe3 = $this->env->getExtension("native_profiler");
        $__internal_f827a9b3672a7782aebc35730b9dfb3f7f7273b1db560984da6107a59982fbe3->enter($__internal_f827a9b3672a7782aebc35730b9dfb3f7f7273b1db560984da6107a59982fbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modification.html.twig"));

        // line 1
        echo "<body>
<h1>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["modif"]) ? $context["modif"] : $this->getContext($context, "modif")), "html", null, true);
        echo "
</h1>
</body>";
        
        $__internal_f827a9b3672a7782aebc35730b9dfb3f7f7273b1db560984da6107a59982fbe3->leave($__internal_f827a9b3672a7782aebc35730b9dfb3f7f7273b1db560984da6107a59982fbe3_prof);

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
        return array (  26 => 3,  22 => 1,);
    }
}
/* <body>*/
/* <h1>*/
/* {{modif}}*/
/* </h1>*/
/* </body>*/
