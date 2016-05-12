<?php

/* blog/categorie.html.twig */
class __TwigTemplate_26e6d7b9cc3f56753f13c7c9a1a9c0fe29d5ee8a7f734c65f9f4ec0e1cf78e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/categorie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad5442a0992a2c5fa3eabd669aa67f0bd42d5e0387c5f44af4baa0817c4b690c = $this->env->getExtension("native_profiler");
        $__internal_ad5442a0992a2c5fa3eabd669aa67f0bd42d5e0387c5f44af4baa0817c4b690c->enter($__internal_ad5442a0992a2c5fa3eabd669aa67f0bd42d5e0387c5f44af4baa0817c4b690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5442a0992a2c5fa3eabd669aa67f0bd42d5e0387c5f44af4baa0817c4b690c->leave($__internal_ad5442a0992a2c5fa3eabd669aa67f0bd42d5e0387c5f44af4baa0817c4b690c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_408645b25d96368dc1ea15fc5d1f4a2043149772c18af546610223781f8e4440 = $this->env->getExtension("native_profiler");
        $__internal_408645b25d96368dc1ea15fc5d1f4a2043149772c18af546610223781f8e4440->enter($__internal_408645b25d96368dc1ea15fc5d1f4a2043149772c18af546610223781f8e4440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_408645b25d96368dc1ea15fc5d1f4a2043149772c18af546610223781f8e4440->leave($__internal_408645b25d96368dc1ea15fc5d1f4a2043149772c18af546610223781f8e4440_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a8f126c7f168efd2d2c497566416bf18b5ec37631db79ecf8cd3e3e5ee44340 = $this->env->getExtension("native_profiler");
        $__internal_7a8f126c7f168efd2d2c497566416bf18b5ec37631db79ecf8cd3e3e5ee44340->enter($__internal_7a8f126c7f168efd2d2c497566416bf18b5ec37631db79ecf8cd3e3e5ee44340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Liste des articles de la catégorie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "titre", array()), "html", null, true);
        echo "</h1>
<em>(Nombre d'article(s) dans la catégorie : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nbarticlebycat"]) ? $context["nbarticlebycat"] : $this->getContext($context, "nbarticlebycat")), "html", null, true);
        echo ")</em>
<ul>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "
\t<li>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</li> 
\t<em>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</em>
\t<a class=\"btn bnt-warning\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t
";
        
        $__internal_7a8f126c7f168efd2d2c497566416bf18b5ec37631db79ecf8cd3e3e5ee44340->leave($__internal_7a8f126c7f168efd2d2c497566416bf18b5ec37631db79ecf8cd3e3e5ee44340_prof);

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
        return array (  93 => 16,  85 => 14,  81 => 13,  75 => 12,  72 => 11,  68 => 10,  63 => 8,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block title %} */
/* {{ parent() }} -*/
/* Index {% endblock %} */
/* {%block body%}*/
/* <h1>Liste des articles de la catégorie {{categorie.titre }}</h1>*/
/* <em>(Nombre d'article(s) dans la catégorie : {{ nbarticlebycat }})</em>*/
/* <ul>*/
/* 	{% for article in articles %}*/
/* */
/* 	<li>{{article.titre}} de {{ article.auteur }}</li> */
/* 	<em>{{article.date|date('d-m-Y')}}</em>*/
/* 	<a class="btn bnt-warning" href="{{ path('blog_detail',{id:article.id})}}">Voir &rarr;</a>*/
/* 	{%endfor%}*/
/* 	*/
/* {% endblock %}*/
/* */
