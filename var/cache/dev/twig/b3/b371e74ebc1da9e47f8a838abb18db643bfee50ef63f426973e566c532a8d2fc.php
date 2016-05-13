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
        $__internal_16d32e4f31e775cd1e8db0acb1bfa0b296e937857c134c3e544e356b458718c8 = $this->env->getExtension("native_profiler");
        $__internal_16d32e4f31e775cd1e8db0acb1bfa0b296e937857c134c3e544e356b458718c8->enter($__internal_16d32e4f31e775cd1e8db0acb1bfa0b296e937857c134c3e544e356b458718c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16d32e4f31e775cd1e8db0acb1bfa0b296e937857c134c3e544e356b458718c8->leave($__internal_16d32e4f31e775cd1e8db0acb1bfa0b296e937857c134c3e544e356b458718c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_158b03e3aadb78ae0edd8ea2b2b5defc74e9d5a88053bf6f3242915dfe9bb46b = $this->env->getExtension("native_profiler");
        $__internal_158b03e3aadb78ae0edd8ea2b2b5defc74e9d5a88053bf6f3242915dfe9bb46b->enter($__internal_158b03e3aadb78ae0edd8ea2b2b5defc74e9d5a88053bf6f3242915dfe9bb46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " -
Index ";
        
        $__internal_158b03e3aadb78ae0edd8ea2b2b5defc74e9d5a88053bf6f3242915dfe9bb46b->leave($__internal_158b03e3aadb78ae0edd8ea2b2b5defc74e9d5a88053bf6f3242915dfe9bb46b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e315d7cd8d64b2b3ed951c37c25f67954c33d9e000edcc177db5de84e1fdaba = $this->env->getExtension("native_profiler");
        $__internal_4e315d7cd8d64b2b3ed951c37c25f67954c33d9e000edcc177db5de84e1fdaba->enter($__internal_4e315d7cd8d64b2b3ed951c37c25f67954c33d9e000edcc177db5de84e1fdaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "<p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<article>
<h1>
";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "
\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 15
            echo "\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</h1>
<p>";
        // line 18
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array());
        echo "<br>
<em>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</em>
\t<a class=\"btn bnt-warning\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Supprimer article &rarr;</a>
\t<a class=\"btn bnt-warning\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_modif", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Modifier article &rarr;</a>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 23
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
        // line 25
        echo "</p>
</article>
</ul>
";
        
        $__internal_4e315d7cd8d64b2b3ed951c37c25f67954c33d9e000edcc177db5de84e1fdaba->leave($__internal_4e315d7cd8d64b2b3ed951c37c25f67954c33d9e000edcc177db5de84e1fdaba_prof);

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
        return array (  131 => 25,  118 => 23,  114 => 22,  110 => 21,  106 => 20,  102 => 19,  98 => 18,  95 => 17,  86 => 15,  82 => 14,  78 => 13,  74 => 11,  65 => 9,  61 => 8,  58 => 7,  52 => 6,  43 => 4,  35 => 3,  11 => 1,);
    }
}
/* {%extends 'blog/layout.html.twig'%}*/
/* */
/* {% block title %} */
/* {{ parent() }} -*/
/* Index {% endblock %} */
/* {%block body%}*/
/* */
/* {% for message in app.session.flashbag.get('info') %}*/
/* <p class="alert alert-success">{{ message }}</p>*/
/* {% endfor %}*/
/* <article>*/
/* <h1>*/
/* {{article.titre}}*/
/* 	{% for categorie in article.categories %}*/
/* 	{{ categorie.titre }}*/
/* 	{%endfor%}*/
/* </h1>*/
/* <p>{{article.contenu|raw}}<br>*/
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
