<?php

/* blog/modification.html.twig */
class __TwigTemplate_12774fc4c91c80b56b8dfbb270aada620c3d24754c2b550cd0fb1df5f6d5ae8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "blog/modification.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ac309e6d74d9d1fd23ab7e20c0ef678f2286df57a4a368c82d9d994fea84275 = $this->env->getExtension("native_profiler");
        $__internal_4ac309e6d74d9d1fd23ab7e20c0ef678f2286df57a4a368c82d9d994fea84275->enter($__internal_4ac309e6d74d9d1fd23ab7e20c0ef678f2286df57a4a368c82d9d994fea84275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ac309e6d74d9d1fd23ab7e20c0ef678f2286df57a4a368c82d9d994fea84275->leave($__internal_4ac309e6d74d9d1fd23ab7e20c0ef678f2286df57a4a368c82d9d994fea84275_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_88e6b53d151406558fee59a61819275ab658e0f838721551add8586773424449 = $this->env->getExtension("native_profiler");
        $__internal_88e6b53d151406558fee59a61819275ab658e0f838721551add8586773424449->enter($__internal_88e6b53d151406558fee59a61819275ab658e0f838721551add8586773424449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
\t
<h2>Modifier un article :</h2>
\t";
        // line 12
        $this->loadTemplate("blog/formulaire.html.twig", "blog/modification.html.twig", 12)->display($context);
        
        $__internal_88e6b53d151406558fee59a61819275ab658e0f838721551add8586773424449->leave($__internal_88e6b53d151406558fee59a61819275ab658e0f838721551add8586773424449_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_123d0eae09c970bfb0ed85411911ad36d93be7bbe5b2a9adbfcad2782a5a4720 = $this->env->getExtension("native_profiler");
        $__internal_123d0eae09c970bfb0ed85411911ad36d93be7bbe5b2a9adbfcad2782a5a4720->enter($__internal_123d0eae09c970bfb0ed85411911ad36d93be7bbe5b2a9adbfcad2782a5a4720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "<script src=\"//cdn.ckeditor.com/4.5.9/basic/ckeditor.js\"></script>
";
        
        $__internal_123d0eae09c970bfb0ed85411911ad36d93be7bbe5b2a9adbfcad2782a5a4720->leave($__internal_123d0eae09c970bfb0ed85411911ad36d93be7bbe5b2a9adbfcad2782a5a4720_prof);

    }

    public function getTemplateName()
    {
        return "blog/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 14,  62 => 12,  57 => 9,  48 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* {% for message in app.session.flashbag.get('info') %}*/
/* <p class="alert alert-success">{{ message }}</p>*/
/* {% endfor %}*/
/* */
/* 	*/
/* <h2>Modifier un article :</h2>*/
/* 	{% include 'blog/formulaire.html.twig' %}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script src="//cdn.ckeditor.com/4.5.9/basic/ckeditor.js"></script>*/
/* {% endblock %}*/
