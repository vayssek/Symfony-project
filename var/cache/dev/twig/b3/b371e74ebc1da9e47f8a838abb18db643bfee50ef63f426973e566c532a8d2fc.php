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
        $__internal_34fb37d18989556ba908a9d15dd19052592e910b1399b2088a5cc2101ac74cc5 = $this->env->getExtension("native_profiler");
        $__internal_34fb37d18989556ba908a9d15dd19052592e910b1399b2088a5cc2101ac74cc5->enter($__internal_34fb37d18989556ba908a9d15dd19052592e910b1399b2088a5cc2101ac74cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        // line 1
        echo "<article>
<h1>
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "
\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</h1>
<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "<br>
<em>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</em>
\t<a class=\"btn bnt-warning\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer article &rarr;</a>
\t<a class=\"btn bnt-success\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modif", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier article &rarr;</a>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 13
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenu", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "auteur", array()), "html", null, true);
            echo "</h3>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</p>
</article>";
        
        $__internal_34fb37d18989556ba908a9d15dd19052592e910b1399b2088a5cc2101ac74cc5->leave($__internal_34fb37d18989556ba908a9d15dd19052592e910b1399b2088a5cc2101ac74cc5_prof);

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
        return array (  79 => 15,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  43 => 7,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <article>*/
/* <h1>*/
/* {{article.titre}}*/
/* 	{% for categorie in article.categories %}*/
/* 	{{ categorie.titre }}*/
/* 	{%endfor%}*/
/* </h1>*/
/* <p>{{article.contenu}}<br>*/
/* <em>{{article.date|date('d-m-Y')}}</em>*/
/* 	<a class="btn bnt-warning" href="{{ path('blog_supprimer',{id:article.id})}}">Supprimer article &rarr;</a>*/
/* 	<a class="btn bnt-success" href="{{ path('blog_modif',{id:article.id})}}">Modifier article &rarr;</a>*/
/* {% for commentaire in commentaires %}*/
/* <h3>{{commentaire.contenu}} {{article.date|date('d-m-Y')}} {{ commentaire.auteur }}</h3>*/
/* {% endfor %}*/
/* </p>*/
/* </article>*/
