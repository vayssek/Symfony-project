<?php

/* categorie/new.html.twig */
class __TwigTemplate_d7b8096b8ce5f54bd5be9ca22974c87dd5c2f25604a3e79a86dd6e6b8dd9892b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "categorie/new.html.twig", 1);
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
        $__internal_e823259a79d71a9b36fea0848e93870139ba4d21993edf905f385ed766f0322c = $this->env->getExtension("native_profiler");
        $__internal_e823259a79d71a9b36fea0848e93870139ba4d21993edf905f385ed766f0322c->enter($__internal_e823259a79d71a9b36fea0848e93870139ba4d21993edf905f385ed766f0322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e823259a79d71a9b36fea0848e93870139ba4d21993edf905f385ed766f0322c->leave($__internal_e823259a79d71a9b36fea0848e93870139ba4d21993edf905f385ed766f0322c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62f9a666fb283d200e04c98efa393090db53e3687161271eba504216e75cca94 = $this->env->getExtension("native_profiler");
        $__internal_62f9a666fb283d200e04c98efa393090db53e3687161271eba504216e75cca94->enter($__internal_62f9a666fb283d200e04c98efa393090db53e3687161271eba504216e75cca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig", 1 => "blog/textarea_ckeditor.html.twig"));
        // line 5
        echo "    <h1>Categorie creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_categorie_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_62f9a666fb283d200e04c98efa393090db53e3687161271eba504216e75cca94->leave($__internal_62f9a666fb283d200e04c98efa393090db53e3687161271eba504216e75cca94_prof);

    }

    public function getTemplateName()
    {
        return "categorie/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  55 => 10,  50 => 8,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' 'blog/textarea_ckeditor.html.twig'%}*/
/*     <h1>Categorie creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_categorie_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
