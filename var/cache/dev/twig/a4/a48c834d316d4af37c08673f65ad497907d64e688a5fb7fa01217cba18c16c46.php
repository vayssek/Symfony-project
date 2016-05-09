<?php

/* blog/layout.html.twig */
class __TwigTemplate_3984340e9ab2c9bc73c827934d135cd209adea324444e188e8be98584a88cf61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'layout' => array($this, 'block_layout'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6672a0201e185a4d3757a87909519b9bcad1c3015ae39e6564fd03e1d30bb3a5 = $this->env->getExtension("native_profiler");
        $__internal_6672a0201e185a4d3757a87909519b9bcad1c3015ae39e6564fd03e1d30bb3a5->enter($__internal_6672a0201e185a4d3757a87909519b9bcad1c3015ae39e6564fd03e1d30bb3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6672a0201e185a4d3757a87909519b9bcad1c3015ae39e6564fd03e1d30bb3a5->leave($__internal_6672a0201e185a4d3757a87909519b9bcad1c3015ae39e6564fd03e1d30bb3a5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_029f858bb3656e4deaaed935bfe7255f1d2f9115df842a4f482e965ecb86d896 = $this->env->getExtension("native_profiler");
        $__internal_029f858bb3656e4deaaed935bfe7255f1d2f9115df842a4f482e965ecb86d896->enter($__internal_029f858bb3656e4deaaed935bfe7255f1d2f9115df842a4f482e965ecb86d896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " 
";
        // line 3
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Blog 
";
        
        $__internal_029f858bb3656e4deaaed935bfe7255f1d2f9115df842a4f482e965ecb86d896->leave($__internal_029f858bb3656e4deaaed935bfe7255f1d2f9115df842a4f482e965ecb86d896_prof);

    }

    // line 6
    public function block_layout($context, array $blocks = array())
    {
        $__internal_f5e8b3d1684b94e5e2e73f3f810699d0c1ba3a14cf4bf1cac4351574e4e774a4 = $this->env->getExtension("native_profiler");
        $__internal_f5e8b3d1684b94e5e2e73f3f810699d0c1ba3a14cf4bf1cac4351574e4e774a4->enter($__internal_f5e8b3d1684b94e5e2e73f3f810699d0c1ba3a14cf4bf1cac4351574e4e774a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 7
        echo "<h1>Blog</h1>
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        echo " ";
        
        $__internal_f5e8b3d1684b94e5e2e73f3f810699d0c1ba3a14cf4bf1cac4351574e4e774a4->leave($__internal_f5e8b3d1684b94e5e2e73f3f810699d0c1ba3a14cf4bf1cac4351574e4e774a4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7358f34e8c2edf6827fca1513180d6620a0808bf1f4a342474772e584172361e = $this->env->getExtension("native_profiler");
        $__internal_7358f34e8c2edf6827fca1513180d6620a0808bf1f4a342474772e584172361e->enter($__internal_7358f34e8c2edf6827fca1513180d6620a0808bf1f4a342474772e584172361e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_7358f34e8c2edf6827fca1513180d6620a0808bf1f4a342474772e584172361e->leave($__internal_7358f34e8c2edf6827fca1513180d6620a0808bf1f4a342474772e584172361e_prof);

    }

    public function getTemplateName()
    {
        return "blog/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  59 => 7,  53 => 6,  44 => 3,  36 => 2,  11 => 1,);
    }
}
/* {%extends "base.html.twig"%} */
/* {% block title %} */
/* {{ parent() }} - Blog */
/* {% endblock %}*/
/* */
/* {%block layout%}*/
/* <h1>Blog</h1>*/
/* {%block body%} {%endblock%} {%endblock%}*/
/* */
