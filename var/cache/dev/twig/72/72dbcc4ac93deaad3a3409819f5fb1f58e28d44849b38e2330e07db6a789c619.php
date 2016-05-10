<?php

/* blog/footer.html.twig */
class __TwigTemplate_674256df7d46aa70340c0e847f188cdf4e211aad75c233dd62f9cc4fc3d85465 extends Twig_Template
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
        $__internal_4f7d732603e04445ad4bd2b9f69a960e6ef5ec95a87a0b051972b0a27c22f25a = $this->env->getExtension("native_profiler");
        $__internal_4f7d732603e04445ad4bd2b9f69a960e6ef5ec95a87a0b051972b0a27c22f25a->enter($__internal_4f7d732603e04445ad4bd2b9f69a960e6ef5ec95a87a0b051972b0a27c22f25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/footer.html.twig"));

        // line 1
        echo "<h1>Derniers articles</h1>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</li> 
\t\t<a class=\"btn bnt-warning\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Voir &rarr;</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4f7d732603e04445ad4bd2b9f69a960e6ef5ec95a87a0b051972b0a27c22f25a->leave($__internal_4f7d732603e04445ad4bd2b9f69a960e6ef5ec95a87a0b051972b0a27c22f25a_prof);

    }

    public function getTemplateName()
    {
        return "blog/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <h1>Derniers articles</h1>*/
/* {% for article in articles %}*/
/* 	<li>{{article.titre}}</li> */
/* 		<a class="btn bnt-warning" href="{{ path('blog_detail',{id:article.id})}}">Voir &rarr;</a>*/
/* 	{% endfor %}*/
