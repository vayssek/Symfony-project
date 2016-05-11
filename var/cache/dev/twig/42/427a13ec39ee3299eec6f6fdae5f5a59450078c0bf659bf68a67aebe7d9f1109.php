<?php

/* blog/categorie.html.twig */
class __TwigTemplate_26e6d7b9cc3f56753f13c7c9a1a9c0fe29d5ee8a7f734c65f9f4ec0e1cf78e81 extends Twig_Template
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
        $__internal_c78a26cbf4e542da2410bd9985d96562835fe25259047e3cfb2f6ebc881d7e1d = $this->env->getExtension("native_profiler");
        $__internal_c78a26cbf4e542da2410bd9985d96562835fe25259047e3cfb2f6ebc881d7e1d->enter($__internal_c78a26cbf4e542da2410bd9985d96562835fe25259047e3cfb2f6ebc881d7e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        // line 1
        echo "<body>
<h1>Liste des articles</h1>
<ul>
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</li> 
\t<em>";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</em>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t
</body>
";
        
        $__internal_c78a26cbf4e542da2410bd9985d96562835fe25259047e3cfb2f6ebc881d7e1d->leave($__internal_c78a26cbf4e542da2410bd9985d96562835fe25259047e3cfb2f6ebc881d7e1d_prof);

    }

    public function getTemplateName()
    {
        return "blog/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  36 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <body>*/
/* <h1>Liste des articles</h1>*/
/* <ul>*/
/* 	{% for article in articles %}*/
/* 	<li>{{article.titre}}</li> */
/* 	<em>{{article.date|date('d-m-Y')}}</em>*/
/* 	{%endfor%}*/
/* 	*/
/* </body>*/
/* */
