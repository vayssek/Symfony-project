<?php

/* blog/supprimer.html.twig */
class __TwigTemplate_69bb40053734fd0959b5d4d2645f0ec92f2fc0523d04d47982ff3147719b0134 extends Twig_Template
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
        $__internal_26f6ce2f63f1b86eff99abdec72d3dc3fb19d97ccf37a88dbd7b58acff88a60b = $this->env->getExtension("native_profiler");
        $__internal_26f6ce2f63f1b86eff99abdec72d3dc3fb19d97ccf37a88dbd7b58acff88a60b->enter($__internal_26f6ce2f63f1b86eff99abdec72d3dc3fb19d97ccf37a88dbd7b58acff88a60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/supprimer.html.twig"));

        // line 1
        echo "
<body>
<h1>
supp ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
</h1>

</body>

";
        
        $__internal_26f6ce2f63f1b86eff99abdec72d3dc3fb19d97ccf37a88dbd7b58acff88a60b->leave($__internal_26f6ce2f63f1b86eff99abdec72d3dc3fb19d97ccf37a88dbd7b58acff88a60b_prof);

    }

    public function getTemplateName()
    {
        return "blog/supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* */
/* <body>*/
/* <h1>*/
/* supp {{ id }}*/
/* </h1>*/
/* */
/* </body>*/
/* */
/* */
