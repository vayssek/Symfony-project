<?php

/* blog/detail.html.twig */
class __TwigTemplate_ba72202ffeab661641339807ee1e24377e1707a3562b7e6545c9b74a37392c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/detail.html.twig", 1);
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
        $__internal_bcb64d373db25c82241074155413be719b5eea24c1cbcde5534e23383d57b06d = $this->env->getExtension("native_profiler");
        $__internal_bcb64d373db25c82241074155413be719b5eea24c1cbcde5534e23383d57b06d->enter($__internal_bcb64d373db25c82241074155413be719b5eea24c1cbcde5534e23383d57b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb64d373db25c82241074155413be719b5eea24c1cbcde5534e23383d57b06d->leave($__internal_bcb64d373db25c82241074155413be719b5eea24c1cbcde5534e23383d57b06d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c50b07b7be6ba008f57350d7f15970cc233194330da6928cbd3f93a6e19db8d0 = $this->env->getExtension("native_profiler");
        $__internal_c50b07b7be6ba008f57350d7f15970cc233194330da6928cbd3f93a6e19db8d0->enter($__internal_c50b07b7be6ba008f57350d7f15970cc233194330da6928cbd3f93a6e19db8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_c50b07b7be6ba008f57350d7f15970cc233194330da6928cbd3f93a6e19db8d0->leave($__internal_c50b07b7be6ba008f57350d7f15970cc233194330da6928cbd3f93a6e19db8d0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f4929bd23037bea9525addd3d7a9267485a6db4d45b6b1eb45bd96591e28d9 = $this->env->getExtension("native_profiler");
        $__internal_e2f4929bd23037bea9525addd3d7a9267485a6db4d45b6b1eb45bd96591e28d9->enter($__internal_e2f4929bd23037bea9525addd3d7a9267485a6db4d45b6b1eb45bd96591e28d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<article>
<h1>
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 12
            echo "\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</h1>
<p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "<br>
<em>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</em>
\t<a class=\"btn bnt-warning\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer article &rarr;</a>
\t<a class=\"btn bnt-warning\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modif", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier article &rarr;</a>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 20
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
        // line 22
        echo "</p>
</article>
</ul>
";
        
        $__internal_e2f4929bd23037bea9525addd3d7a9267485a6db4d45b6b1eb45bd96591e28d9->leave($__internal_e2f4929bd23037bea9525addd3d7a9267485a6db4d45b6b1eb45bd96591e28d9_prof);

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
        return array (  116 => 22,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  80 => 14,  71 => 12,  67 => 11,  63 => 10,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block title %} */
/* {{ parent() }} -*/
/* Index {% endblock %} */
/* {%block body%}*/
/* */
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
/* 	<a class="btn bnt-warning" href="{{ path('blog_modif',{id:article.id})}}">Modifier article &rarr;</a>*/
/* {% for commentaire in commentaires %}*/
/* <h3>{{commentaire.contenu}} {{article.date|date('d-m-Y')}} {{ commentaire.auteur }}</h3>*/
/* {% endfor %}*/
/* </p>*/
/* </article>*/
/* </ul>*/
/* {%endblock%}*/
