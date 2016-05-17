<?php

/* blog/pagination.html.twig */
class __TwigTemplate_d4b06af1d85cdc8e425a3d1d7db3931e7954070540bfe948d1ad4c05f0164f5e extends Twig_Template
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
        $__internal_ee1e8da278f6b46333aef25fc9dc831ef39eb256d97e172ed2a6ed3dfeb0a5a2 = $this->env->getExtension("native_profiler");
        $__internal_ee1e8da278f6b46333aef25fc9dc831ef39eb256d97e172ed2a6ed3dfeb0a5a2->enter($__internal_ee1e8da278f6b46333aef25fc9dc831ef39eb256d97e172ed2a6ed3dfeb0a5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/pagination.html.twig"));

        // line 1
        echo "<nav>
<ul class=\"pagination-buttons pagination\">
        ";
        // line 3
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
            // line 4
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 5
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => 1))), "html", null, true);
            echo "\">&lt;&lt;</a></li>
            <li><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 7
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1)))), "html", null, true);
            echo "\">&lt; </a></li>
        ";
        }
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute(        // line 11
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "            <li ";
            if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                echo " class=\"active\"";
            }
            echo "><a 
href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 14
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $context["p"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))) {
            // line 17
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 18
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1)))), "html", null, true);
            echo "\">&gt; </a></li>
            <li><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 20
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array())))), "html", null, true);
            echo "\">&gt;&gt;</a></li>
        ";
        }
        // line 22
        echo "</ul>
</nav>";
        
        $__internal_ee1e8da278f6b46333aef25fc9dc831ef39eb256d97e172ed2a6ed3dfeb0a5a2->leave($__internal_ee1e8da278f6b46333aef25fc9dc831ef39eb256d97e172ed2a6ed3dfeb0a5a2_prof);

    }

    public function getTemplateName()
    {
        return "blog/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 20,  75 => 19,  71 => 18,  69 => 17,  66 => 16,  56 => 14,  55 => 13,  48 => 12,  45 => 11,  42 => 10,  40 => 9,  35 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <nav>*/
/* <ul class="pagination-buttons pagination">*/
/*         {% if pagination.page>1 %}*/
/*             <li><a href="{{ path(pagination.route, */
/* pagination.route_params|merge({'page': 1})) }}">&lt;&lt;</a></li>*/
/*             <li><a href="{{ path(pagination.route, */
/* pagination.route_params|merge({'page': pagination.page-1})) }}">&lt; </a></li>*/
/*         {% endif %}*/
/*         {#display p numbers only from p-4 to p+4 but don't go <1 or >pages_count#}*/
/*         {% for p in range(max(pagination.page-4, 1), */
/* min(pagination.page+4, pagination.pages_count)) %}*/
/*             <li {% if p == pagination.page %} class="active"{% endif %}><a */
/* href="{{ path(pagination.route, */
/* pagination.route_params|merge({'page': p})) }}">{{ p }}</a></li>*/
/*         {% endfor %}*/
/*         {% if pagination.page<pagination.pages_count %}*/
/*             <li><a href="{{ path(pagination.route, */
/* pagination.route_params|merge({'page': pagination.page+1})) }}">&gt; </a></li>*/
/*             <li><a href="{{ path(pagination.route, */
/* pagination.route_params|merge({'page': pagination.pages_count})) }}">&gt;&gt;</a></li>*/
/*         {% endif %}*/
/* </ul>*/
/* </nav>*/
