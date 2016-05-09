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
        $__internal_49b75bc93c8cc98f0afabd66a336546a683a31dd219ad6c04c5d9b8df7276f62 = $this->env->getExtension("native_profiler");
        $__internal_49b75bc93c8cc98f0afabd66a336546a683a31dd219ad6c04c5d9b8df7276f62->enter($__internal_49b75bc93c8cc98f0afabd66a336546a683a31dd219ad6c04c5d9b8df7276f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/footer.html.twig"));

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
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_49b75bc93c8cc98f0afabd66a336546a683a31dd219ad6c04c5d9b8df7276f62->leave($__internal_49b75bc93c8cc98f0afabd66a336546a683a31dd219ad6c04c5d9b8df7276f62_prof);

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
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <h1>Derniers articles</h1>*/
/* {% for article in articles %}*/
/* 	<li>{{article.titre}}</li> */
/* 	{% endfor %}*/
