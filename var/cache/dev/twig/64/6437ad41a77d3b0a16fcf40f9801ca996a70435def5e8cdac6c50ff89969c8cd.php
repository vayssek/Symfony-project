<?php

/* categorie/index.html.twig */
class __TwigTemplate_5f16f7b7379e1204054cd6397e41a975ae0ce56ed339f9fc68003ddf66ef7085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "categorie/index.html.twig", 1);
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
        $__internal_c42ebc741ee5ebe49c9533ad9f240858d6c8e2f01af24923e745619f258bf9e1 = $this->env->getExtension("native_profiler");
        $__internal_c42ebc741ee5ebe49c9533ad9f240858d6c8e2f01af24923e745619f258bf9e1->enter($__internal_c42ebc741ee5ebe49c9533ad9f240858d6c8e2f01af24923e745619f258bf9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42ebc741ee5ebe49c9533ad9f240858d6c8e2f01af24923e745619f258bf9e1->leave($__internal_c42ebc741ee5ebe49c9533ad9f240858d6c8e2f01af24923e745619f258bf9e1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_536d951280e63b3634bcdbfa290807456290dca6ef306178fae08491d6c3f80a = $this->env->getExtension("native_profiler");
        $__internal_536d951280e63b3634bcdbfa290807456290dca6ef306178fae08491d6c3f80a->enter($__internal_536d951280e63b3634bcdbfa290807456290dca6ef306178fae08491d6c3f80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Categorie list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "titre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_categorie_show", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_categorie_edit", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_categorie_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_536d951280e63b3634bcdbfa290807456290dca6ef306178fae08491d6c3f80a->leave($__internal_536d951280e63b3634bcdbfa290807456290dca6ef306178fae08491d6c3f80a_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  91 => 32,  79 => 26,  73 => 23,  66 => 19,  60 => 18,  57 => 17,  53 => 16,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Categorie list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Titre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for categorie in categories %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_categorie_show', { 'id': categorie.id }) }}">{{ categorie.id }}</a></td>*/
/*                 <td>{{ categorie.titre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_categorie_show', { 'id': categorie.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_categorie_edit', { 'id': categorie.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_categorie_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
