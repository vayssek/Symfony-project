<?php

/* blog/textarea_ckeditor.html.twig */
class __TwigTemplate_5f6ac637d4483c6bc72a443998af63aea79c011ac2cfe5a2ee81d8df09d7026b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c8ec24f091bf0cce3606103da913f3f7b649f04652fe201920c69245c935f1a = $this->env->getExtension("native_profiler");
        $__internal_0c8ec24f091bf0cce3606103da913f3f7b649f04652fe201920c69245c935f1a->enter($__internal_0c8ec24f091bf0cce3606103da913f3f7b649f04652fe201920c69245c935f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/textarea_ckeditor.html.twig"));

        // line 1
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_0c8ec24f091bf0cce3606103da913f3f7b649f04652fe201920c69245c935f1a->leave($__internal_0c8ec24f091bf0cce3606103da913f3f7b649f04652fe201920c69245c935f1a_prof);

    }

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_69724a2228d0efe9536c437c1d8f370bef88c4986854daa26f9a16ea3acce8bc = $this->env->getExtension("native_profiler");
        $__internal_69724a2228d0efe9536c437c1d8f370bef88c4986854daa26f9a16ea3acce8bc->enter($__internal_69724a2228d0efe9536c437c1d8f370bef88c4986854daa26f9a16ea3acce8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"form_
   -control ckeditor\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_69724a2228d0efe9536c437c1d8f370bef88c4986854daa26f9a16ea3acce8bc->leave($__internal_69724a2228d0efe9536c437c1d8f370bef88c4986854daa26f9a16ea3acce8bc_prof);

    }

    public function getTemplateName()
    {
        return "blog/textarea_ckeditor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {%- block textarea_widget -%}*/
/* {% spaceless %}*/
/*     <textarea {{ block('widget_attributes') }} class="form_*/
/*    -control ckeditor">{{ value }}</textarea>*/
/* {% endspaceless %}*/
/* {%- endblock textarea_widget -%}*/
