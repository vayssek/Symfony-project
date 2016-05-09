<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90e10baca9d8e4b15eff36e7917c8237edc999720ee16de3b56064b868e7ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c0aea17e1c9ee69e530d94eb77d8c987e582a5998ba41514a1adbcd6deabfc9 = $this->env->getExtension("native_profiler");
        $__internal_3c0aea17e1c9ee69e530d94eb77d8c987e582a5998ba41514a1adbcd6deabfc9->enter($__internal_3c0aea17e1c9ee69e530d94eb77d8c987e582a5998ba41514a1adbcd6deabfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0aea17e1c9ee69e530d94eb77d8c987e582a5998ba41514a1adbcd6deabfc9->leave($__internal_3c0aea17e1c9ee69e530d94eb77d8c987e582a5998ba41514a1adbcd6deabfc9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86ef1eaa79649a3a71e878a9f631941f6350a91143286acf3fb71aa85f939bc1 = $this->env->getExtension("native_profiler");
        $__internal_86ef1eaa79649a3a71e878a9f631941f6350a91143286acf3fb71aa85f939bc1->enter($__internal_86ef1eaa79649a3a71e878a9f631941f6350a91143286acf3fb71aa85f939bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86ef1eaa79649a3a71e878a9f631941f6350a91143286acf3fb71aa85f939bc1->leave($__internal_86ef1eaa79649a3a71e878a9f631941f6350a91143286acf3fb71aa85f939bc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c648d43b5495358182fe12a163e20d797325c8c892f2178894569d39a95cf6a = $this->env->getExtension("native_profiler");
        $__internal_2c648d43b5495358182fe12a163e20d797325c8c892f2178894569d39a95cf6a->enter($__internal_2c648d43b5495358182fe12a163e20d797325c8c892f2178894569d39a95cf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c648d43b5495358182fe12a163e20d797325c8c892f2178894569d39a95cf6a->leave($__internal_2c648d43b5495358182fe12a163e20d797325c8c892f2178894569d39a95cf6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a356b34e82a8673a8115b1011dbdd4b28fb434ccbf62e6371c41e09f5c02a39 = $this->env->getExtension("native_profiler");
        $__internal_2a356b34e82a8673a8115b1011dbdd4b28fb434ccbf62e6371c41e09f5c02a39->enter($__internal_2a356b34e82a8673a8115b1011dbdd4b28fb434ccbf62e6371c41e09f5c02a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a356b34e82a8673a8115b1011dbdd4b28fb434ccbf62e6371c41e09f5c02a39->leave($__internal_2a356b34e82a8673a8115b1011dbdd4b28fb434ccbf62e6371c41e09f5c02a39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
