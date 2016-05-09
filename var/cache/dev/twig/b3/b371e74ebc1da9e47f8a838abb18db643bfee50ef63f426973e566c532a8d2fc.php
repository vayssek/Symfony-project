<?php

/* blog/detail.html.twig */
class __TwigTemplate_ba72202ffeab661641339807ee1e24377e1707a3562b7e6545c9b74a37392c54 extends Twig_Template
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
        $__internal_9651cffd699a302b75b289e84b329c277f2479c55864c70b7aa4f2c90d518f4c = $this->env->getExtension("native_profiler");
        $__internal_9651cffd699a302b75b289e84b329c277f2479c55864c70b7aa4f2c90d518f4c->enter($__internal_9651cffd699a302b75b289e84b329c277f2479c55864c70b7aa4f2c90d518f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        // line 1
        echo "<article>
<h1>
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "
</h1>
<p>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "<br>
<em>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</em>
</p>
</article>";
        
        $__internal_9651cffd699a302b75b289e84b329c277f2479c55864c70b7aa4f2c90d518f4c->leave($__internal_9651cffd699a302b75b289e84b329c277f2479c55864c70b7aa4f2c90d518f4c_prof);

    }

    public function getTemplateName()
    {
        return "blog/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <article>*/
/* <h1>*/
/* {{article.titre}}*/
/* </h1>*/
/* <p>{{article.contenu}}<br>*/
/* <em>{{article.date|date('d-m-Y')}}</em>*/
/* </p>*/
/* </article>*/
