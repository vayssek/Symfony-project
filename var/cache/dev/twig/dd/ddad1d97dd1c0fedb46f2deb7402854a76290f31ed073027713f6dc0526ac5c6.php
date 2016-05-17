<?php

/* categorie/show.html.twig */
class __TwigTemplate_c5786485ac76a3ec2dd5c0839f584dce26b882b095657f7a661edaf14491aef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog/layout.html.twig", "categorie/show.html.twig", 1);
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
        $__internal_deecd8b9b89749071cbe5676a7638b381c90fd9e6cd676a956fd63368c3c268e = $this->env->getExtension("native_profiler");
        $__internal_deecd8b9b89749071cbe5676a7638b381c90fd9e6cd676a956fd63368c3c268e->enter($__internal_deecd8b9b89749071cbe5676a7638b381c90fd9e6cd676a956fd63368c3c268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categorie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deecd8b9b89749071cbe5676a7638b381c90fd9e6cd676a956fd63368c3c268e->leave($__internal_deecd8b9b89749071cbe5676a7638b381c90fd9e6cd676a956fd63368c3c268e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_438b82ccfa00e3fe019d2346004e047791dbbd14fc529407b3b47decf52d7f77 = $this->env->getExtension("native_profiler");
        $__internal_438b82ccfa00e3fe019d2346004e047791dbbd14fc529407b3b47decf52d7f77->enter($__internal_438b82ccfa00e3fe019d2346004e047791dbbd14fc529407b3b47decf52d7f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Categorie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_categorie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_categorie_edit", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_438b82ccfa00e3fe019d2346004e047791dbbd14fc529407b3b47decf52d7f77->leave($__internal_438b82ccfa00e3fe019d2346004e047791dbbd14fc529407b3b47decf52d7f77_prof);

    }

    public function getTemplateName()
    {
        return "categorie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  77 => 28,  71 => 25,  65 => 22,  55 => 15,  48 => 11,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'blog/layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Categorie</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ categorie.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ categorie.titre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_categorie_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_categorie_edit', { 'id': categorie.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
