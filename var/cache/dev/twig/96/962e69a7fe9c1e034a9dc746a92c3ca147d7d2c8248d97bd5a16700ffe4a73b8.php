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
        $__internal_226828b5368ba73fdc159193c2a06b20a85ac8357a09c69613894cef11077812 = $this->env->getExtension("native_profiler");
        $__internal_226828b5368ba73fdc159193c2a06b20a85ac8357a09c69613894cef11077812->enter($__internal_226828b5368ba73fdc159193c2a06b20a85ac8357a09c69613894cef11077812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_226828b5368ba73fdc159193c2a06b20a85ac8357a09c69613894cef11077812->leave($__internal_226828b5368ba73fdc159193c2a06b20a85ac8357a09c69613894cef11077812_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4f3e86b147ed79c399289f3832aab1cad809e6be7d6ee77951d4def45c8bc5f = $this->env->getExtension("native_profiler");
        $__internal_c4f3e86b147ed79c399289f3832aab1cad809e6be7d6ee77951d4def45c8bc5f->enter($__internal_c4f3e86b147ed79c399289f3832aab1cad809e6be7d6ee77951d4def45c8bc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_c4f3e86b147ed79c399289f3832aab1cad809e6be7d6ee77951d4def45c8bc5f->leave($__internal_c4f3e86b147ed79c399289f3832aab1cad809e6be7d6ee77951d4def45c8bc5f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7f26ef3eec632df7796c7e7e6f486ea8378e08f2070f5ff45ac9102b98a49cc = $this->env->getExtension("native_profiler");
        $__internal_f7f26ef3eec632df7796c7e7e6f486ea8378e08f2070f5ff45ac9102b98a49cc->enter($__internal_f7f26ef3eec632df7796c7e7e6f486ea8378e08f2070f5ff45ac9102b98a49cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t";
            // line 12
            if ($this->getAttribute($context["article"], "image", array(), "any", true, true)) {
                // line 13
                echo "\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
                echo "\"></img> 
\t";
            }
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
<";
        
        $__internal_f7f26ef3eec632df7796c7e7e6f486ea8378e08f2070f5ff45ac9102b98a49cc->leave($__internal_f7f26ef3eec632df7796c7e7e6f486ea8378e08f2070f5ff45ac9102b98a49cc_prof);

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
        return array (  86 => 16,  80 => 15,  74 => 13,  72 => 12,  67 => 11,  63 => 10,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
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
/* 	{%if article.image is defined%}*/
/* 	<img src="{{article.image}}"></img> */
/* 	{%endif%}*/
/* 	{%endfor%}*/
/* </ul>*/
/* <{%endblock%}*/
/* */
