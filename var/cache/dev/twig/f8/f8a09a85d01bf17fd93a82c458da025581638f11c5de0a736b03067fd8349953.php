<?php

/* categorie/edit.html.twig */
class __TwigTemplate_8fbf1fcd972a1ba17d987129793fbd2d4b690831441e92ab82f9618e29526cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "categorie/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_109ce73506b833f05ec38f2d76efb645216493d323e59ee7afb946def81a16d1 = $this->env->getExtension("native_profiler");
        $__internal_109ce73506b833f05ec38f2d76efb645216493d323e59ee7afb946def81a16d1->enter($__internal_109ce73506b833f05ec38f2d76efb645216493d323e59ee7afb946def81a16d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_109ce73506b833f05ec38f2d76efb645216493d323e59ee7afb946def81a16d1->leave($__internal_109ce73506b833f05ec38f2d76efb645216493d323e59ee7afb946def81a16d1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c7606b332b71427981c9ba37fda4f1d3a0424f818e982a2faad1029235bfe2c = $this->env->getExtension("native_profiler");
        $__internal_4c7606b332b71427981c9ba37fda4f1d3a0424f818e982a2faad1029235bfe2c->enter($__internal_4c7606b332b71427981c9ba37fda4f1d3a0424f818e982a2faad1029235bfe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    <h1>Categorie edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4c7606b332b71427981c9ba37fda4f1d3a0424f818e982a2faad1029235bfe2c->leave($__internal_4c7606b332b71427981c9ba37fda4f1d3a0424f818e982a2faad1029235bfe2c_prof);

    }

    public function getTemplateName()
    {
        return "categorie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  62 => 15,  55 => 11,  50 => 9,  46 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* {% form_theme edit_form 'bootstrap_3_layout.html.twig'%}*/
/*     <h1>Categorie edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_categorie_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
