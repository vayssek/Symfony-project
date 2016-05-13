<?php

/* blog/index.html.twig */
class __TwigTemplate_88e6440f13fd935eb87df2f5353600317c0bcb493ac016925303d20491acba3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/index.html.twig", 1);
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
        $__internal_2059e2774d01c700a1ca715f40e2213e2be088a4e48006373afe767e21f6b5f4 = $this->env->getExtension("native_profiler");
        $__internal_2059e2774d01c700a1ca715f40e2213e2be088a4e48006373afe767e21f6b5f4->enter($__internal_2059e2774d01c700a1ca715f40e2213e2be088a4e48006373afe767e21f6b5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2059e2774d01c700a1ca715f40e2213e2be088a4e48006373afe767e21f6b5f4->leave($__internal_2059e2774d01c700a1ca715f40e2213e2be088a4e48006373afe767e21f6b5f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe940950b3ea742608d073a55ad3a594e09d64414ee303fb0050df9e78f0249d = $this->env->getExtension("native_profiler");
        $__internal_fe940950b3ea742608d073a55ad3a594e09d64414ee303fb0050df9e78f0249d->enter($__internal_fe940950b3ea742608d073a55ad3a594e09d64414ee303fb0050df9e78f0249d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_fe940950b3ea742608d073a55ad3a594e09d64414ee303fb0050df9e78f0249d->leave($__internal_fe940950b3ea742608d073a55ad3a594e09d64414ee303fb0050df9e78f0249d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6031e7999e92797d1f83cd218a251c01baa109a12eb3092180982c42f9d7e8a = $this->env->getExtension("native_profiler");
        $__internal_b6031e7999e92797d1f83cd218a251c01baa109a12eb3092180982c42f9d7e8a->enter($__internal_b6031e7999e92797d1f83cd218a251c01baa109a12eb3092180982c42f9d7e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h1>Liste des articles</h1>
<ul>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</li> 
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 13
                echo "\t<p> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
                echo "</p>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t<a class=\"btn bnt-warning\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
\t";
            // line 16
            if ( !(null === $this->getAttribute($context["article"], "image", array()))) {
                // line 17
                echo "\t<img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "url", array()), "html", null, true);
                echo " alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"300\"></img> 
\t";
            }
            // line 19
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<";
        
        $__internal_b6031e7999e92797d1f83cd218a251c01baa109a12eb3092180982c42f9d7e8a->leave($__internal_b6031e7999e92797d1f83cd218a251c01baa109a12eb3092180982c42f9d7e8a_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  101 => 19,  92 => 17,  90 => 16,  85 => 15,  76 => 13,  72 => 12,  67 => 11,  63 => 10,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block title %} */
/* {{ parent() }} -*/
/* Index {% endblock %} */
/* {%block body%}*/
/* */
/* <h1>Liste des articles</h1>*/
/* <ul>*/
/* 	{% for article in articles %}*/
/* 	<li>{{article.titre}}</li> */
/* 		{% for categorie in article.categories %}*/
/* 	<p> {{ categorie.titre }}</p>*/
/* 	{%endfor%}*/
/* 	<a class="btn bnt-warning" href="{{ path('blog_detail',{id:article.id})}}">Voir &rarr;</a>*/
/* 	{%if article.image is not null%}*/
/* 	<img src={{ asset('images/')}}{{ article.image.url }} alt="{{ article.image.alt }}" width="300"></img> */
/* 	{%endif%}*/
/* 	{%endfor%}*/
/* </ul>*/
/* <{%endblock%}*/
/* */
