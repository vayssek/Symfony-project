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
        $__internal_e97fc53531a7e4abe6c3b290d64623e2ee18fc56257d55fcace48f66b543b6b8 = $this->env->getExtension("native_profiler");
        $__internal_e97fc53531a7e4abe6c3b290d64623e2ee18fc56257d55fcace48f66b543b6b8->enter($__internal_e97fc53531a7e4abe6c3b290d64623e2ee18fc56257d55fcace48f66b543b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e97fc53531a7e4abe6c3b290d64623e2ee18fc56257d55fcace48f66b543b6b8->leave($__internal_e97fc53531a7e4abe6c3b290d64623e2ee18fc56257d55fcace48f66b543b6b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec0712dff99dc06a86b922d9500f1ffeaa568fbdb6a31000a38ac0389e54fe58 = $this->env->getExtension("native_profiler");
        $__internal_ec0712dff99dc06a86b922d9500f1ffeaa568fbdb6a31000a38ac0389e54fe58->enter($__internal_ec0712dff99dc06a86b922d9500f1ffeaa568fbdb6a31000a38ac0389e54fe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_ec0712dff99dc06a86b922d9500f1ffeaa568fbdb6a31000a38ac0389e54fe58->leave($__internal_ec0712dff99dc06a86b922d9500f1ffeaa568fbdb6a31000a38ac0389e54fe58_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_03c196ca23615247575683a36cb944587f399315dc4ac4a520a3df9b2a988581 = $this->env->getExtension("native_profiler");
        $__internal_03c196ca23615247575683a36cb944587f399315dc4ac4a520a3df9b2a988581->enter($__internal_03c196ca23615247575683a36cb944587f399315dc4ac4a520a3df9b2a988581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<a class=\"btn bnt-warning\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
\t";
            // line 13
            if ( !(null === $this->getAttribute($context["article"], "image", array()))) {
                // line 14
                echo "\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "Url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"200\"></img> 
\t";
            }
            // line 16
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 17
                echo "\t<p> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
                echo "</p>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<";
        
        $__internal_03c196ca23615247575683a36cb944587f399315dc4ac4a520a3df9b2a988581->leave($__internal_03c196ca23615247575683a36cb944587f399315dc4ac4a520a3df9b2a988581_prof);

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
        return array (  106 => 20,  100 => 19,  91 => 17,  86 => 16,  78 => 14,  76 => 13,  72 => 12,  67 => 11,  63 => 10,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
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
/* 	<a class="btn bnt-warning" href="{{ path('blog_detail',{id:article.id})}}">Voir &rarr;</a>*/
/* 	{%if article.image is not null%}*/
/* 	<img src="{{article.image.Url}}" alt="{{ article.image.alt }}" width="200"></img> */
/* 	{%endif%}*/
/* 	{% for categorie in article.categories %}*/
/* 	<p> {{ categorie.titre }}</p>*/
/* 	{%endfor%}*/
/* 	{%endfor%}*/
/* </ul>*/
/* <{%endblock%}*/
/* */
