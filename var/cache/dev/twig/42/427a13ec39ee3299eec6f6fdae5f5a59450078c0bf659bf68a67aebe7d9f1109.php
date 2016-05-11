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
        $__internal_7548d67c0f4dc8dc03bbba90d84df9baad6e0dace02967c3891460b00b7efedf = $this->env->getExtension("native_profiler");
        $__internal_7548d67c0f4dc8dc03bbba90d84df9baad6e0dace02967c3891460b00b7efedf->enter($__internal_7548d67c0f4dc8dc03bbba90d84df9baad6e0dace02967c3891460b00b7efedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7548d67c0f4dc8dc03bbba90d84df9baad6e0dace02967c3891460b00b7efedf->leave($__internal_7548d67c0f4dc8dc03bbba90d84df9baad6e0dace02967c3891460b00b7efedf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfc6e62117c626824b057c04bb487885dcac608710eecef3d0f83c8e20c2a873 = $this->env->getExtension("native_profiler");
        $__internal_cfc6e62117c626824b057c04bb487885dcac608710eecef3d0f83c8e20c2a873->enter($__internal_cfc6e62117c626824b057c04bb487885dcac608710eecef3d0f83c8e20c2a873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_cfc6e62117c626824b057c04bb487885dcac608710eecef3d0f83c8e20c2a873->leave($__internal_cfc6e62117c626824b057c04bb487885dcac608710eecef3d0f83c8e20c2a873_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4df0d231ef851cf48d11c98f943ec4898b472dd704b292652e44d37265060ef = $this->env->getExtension("native_profiler");
        $__internal_f4df0d231ef851cf48d11c98f943ec4898b472dd704b292652e44d37265060ef->enter($__internal_f4df0d231ef851cf48d11c98f943ec4898b472dd704b292652e44d37265060ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Liste des articles de la catégorie ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "titre", array()), "html", null, true);
        echo "</h1>
<ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "
\t<li>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</li> 
\t<em>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</em>
\t<a class=\"btn bnt-warning\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t
";
        
        $__internal_f4df0d231ef851cf48d11c98f943ec4898b472dd704b292652e44d37265060ef->leave($__internal_f4df0d231ef851cf48d11c98f943ec4898b472dd704b292652e44d37265060ef_prof);

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
        return array (  89 => 15,  81 => 13,  77 => 12,  71 => 11,  68 => 10,  64 => 9,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block title %} */
/* {{ parent() }} -*/
/* Index {% endblock %} */
/* {%block body%}*/
/* <h1>Liste des articles de la catégorie {{categorie.titre }}</h1>*/
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
