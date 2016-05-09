<?php

/* base.html.twig */
class __TwigTemplate_c88dd9750f29468b6d6b04ba7a61249229da475f879f756c1c63210ae8a5ae47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_893df936bd7e7d48f4dc24e133e4ceac00d25c24f2a01e9fb6afc6d36832502b = $this->env->getExtension("native_profiler");
        $__internal_893df936bd7e7d48f4dc24e133e4ceac00d25c24f2a01e9fb6afc6d36832502b->enter($__internal_893df936bd7e7d48f4dc24e133e4ceac00d25c24f2a01e9fb6afc6d36832502b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">
<link rel=\"icon\" href=\"../../favicon.ico\">

<title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\"
\thref=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"
\tintegrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\"
\tcrossorigin=\"anonymous\">

";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "<!-- Custom styles for this template -->
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/starter-template.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

\t<nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\"
\t\t\t\t\tdata-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\"
\t\t\t\t\taria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span
\t\t\t\t\t\tclass=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
\t\t\t\t\t\tclass=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Project name</a>
\t\t\t</div>
\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li class=\"active\"><a href=\"#\">Home</a></li>
\t\t\t\t\t<li><a href=\"#about\">About</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--/.nav-collapse -->
\t\t</div>
\t</nav>

\t<div class=\"container\">

\t\t<div class=\"starter-template\">
\t\t\t";
        // line 54
        $this->displayBlock('layout', $context, $blocks);
        // line 61
        echo "\t\t\t<footer>
\t\t\t";
        // line 62
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Blog:footer"));
        echo "
\t\t\t</footer>
\t\t</div>

\t</div>
\t<!-- /.container -->


\t<!-- Bootstrap core JavaScript
    ================================================== -->
\t<!-- Placed at the end of the document so the pages load faster -->
\t<script
\t\tsrc=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
\t<!-- Latest compiled and minified JavaScript -->
\t<script
\t\tsrc=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\"
\t\tcrossorigin=\"anonymous\"></script>
\t";
        // line 81
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
</html>


";
        
        $__internal_893df936bd7e7d48f4dc24e133e4ceac00d25c24f2a01e9fb6afc6d36832502b->leave($__internal_893df936bd7e7d48f4dc24e133e4ceac00d25c24f2a01e9fb6afc6d36832502b_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2a35a2ea8be50933562e0a4d22ac807e31f39ebf417d1755d1eea4df4ef24dc = $this->env->getExtension("native_profiler");
        $__internal_a2a35a2ea8be50933562e0a4d22ac807e31f39ebf417d1755d1eea4df4ef24dc->enter($__internal_a2a35a2ea8be50933562e0a4d22ac807e31f39ebf417d1755d1eea4df4ef24dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " TP Symfony";
        
        $__internal_a2a35a2ea8be50933562e0a4d22ac807e31f39ebf417d1755d1eea4df4ef24dc->leave($__internal_a2a35a2ea8be50933562e0a4d22ac807e31f39ebf417d1755d1eea4df4ef24dc_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fec87d51c98b1ee2470de34dfc669c323425c692613db7a1629efbe5682f60a6 = $this->env->getExtension("native_profiler");
        $__internal_fec87d51c98b1ee2470de34dfc669c323425c692613db7a1629efbe5682f60a6->enter($__internal_fec87d51c98b1ee2470de34dfc669c323425c692613db7a1629efbe5682f60a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fec87d51c98b1ee2470de34dfc669c323425c692613db7a1629efbe5682f60a6->leave($__internal_fec87d51c98b1ee2470de34dfc669c323425c692613db7a1629efbe5682f60a6_prof);

    }

    // line 54
    public function block_layout($context, array $blocks = array())
    {
        $__internal_37aff6227dd57d5bc41abdf914c3e6a3c7c20a12a8663b2d75c7bf1eccf17943 = $this->env->getExtension("native_profiler");
        $__internal_37aff6227dd57d5bc41abdf914c3e6a3c7c20a12a8663b2d75c7bf1eccf17943->enter($__internal_37aff6227dd57d5bc41abdf914c3e6a3c7c20a12a8663b2d75c7bf1eccf17943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 55
        echo "\t\t\t<h1>Bootstrap starter template</h1>
\t\t\t<p class=\"lead\">
\t\t\t\tUse this document as a way to quickly start any new project.<br> All
\t\t\t\tyou get is this text and a mostly barebones HTML document.
\t\t\t</p>
\t\t\t";
        
        $__internal_37aff6227dd57d5bc41abdf914c3e6a3c7c20a12a8663b2d75c7bf1eccf17943->leave($__internal_37aff6227dd57d5bc41abdf914c3e6a3c7c20a12a8663b2d75c7bf1eccf17943_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10aa78f48f058dd75258c29c7ed4eac43b587a6dea11c96c000ec030be8376fe = $this->env->getExtension("native_profiler");
        $__internal_10aa78f48f058dd75258c29c7ed4eac43b587a6dea11c96c000ec030be8376fe->enter($__internal_10aa78f48f058dd75258c29c7ed4eac43b587a6dea11c96c000ec030be8376fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10aa78f48f058dd75258c29c7ed4eac43b587a6dea11c96c000ec030be8376fe->leave($__internal_10aa78f48f058dd75258c29c7ed4eac43b587a6dea11c96c000ec030be8376fe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 81,  159 => 55,  153 => 54,  142 => 20,  130 => 12,  119 => 82,  117 => 81,  95 => 62,  92 => 61,  90 => 54,  55 => 22,  52 => 21,  50 => 20,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* <link rel="icon" href="../../favicon.ico">*/
/* */
/* <title>{% block title %} TP Symfony{% endblock %}</title>*/
/* */
/* <!-- Latest compiled and minified CSS -->*/
/* <link rel="stylesheet"*/
/* 	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"*/
/* 	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"*/
/* 	crossorigin="anonymous">*/
/* */
/* {% block stylesheets %}{% endblock %}*/
/* <!-- Custom styles for this template -->*/
/* <link href="{{ asset('css/starter-template.css')}}" rel="stylesheet">*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* 	<nav class="navbar navbar-inverse navbar-fixed-top">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" class="navbar-toggle collapsed"*/
/* 					data-toggle="collapse" data-target="#navbar" aria-expanded="false"*/
/* 					aria-controls="navbar">*/
/* 					<span class="sr-only">Toggle navigation</span> <span*/
/* 						class="icon-bar"></span> <span class="icon-bar"></span> <span*/
/* 						class="icon-bar"></span>*/
/* 				</button>*/
/* 				<a class="navbar-brand" href="#">Project name</a>*/
/* 			</div>*/
/* 			<div id="navbar" class="collapse navbar-collapse">*/
/* 				<ul class="nav navbar-nav">*/
/* 					<li class="active"><a href="#">Home</a></li>*/
/* 					<li><a href="#about">About</a></li>*/
/* 					<li><a href="#contact">Contact</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<!--/.nav-collapse -->*/
/* 		</div>*/
/* 	</nav>*/
/* */
/* 	<div class="container">*/
/* */
/* 		<div class="starter-template">*/
/* 			{% block layout %}*/
/* 			<h1>Bootstrap starter template</h1>*/
/* 			<p class="lead">*/
/* 				Use this document as a way to quickly start any new project.<br> All*/
/* 				you get is this text and a mostly barebones HTML document.*/
/* 			</p>*/
/* 			{% endblock %}*/
/* 			<footer>*/
/* 			{{ render(controller("AppBundle:Blog:footer")) }}*/
/* 			</footer>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	<!-- /.container -->*/
/* */
/* */
/* 	<!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/* 	<!-- Placed at the end of the document so the pages load faster -->*/
/* 	<script*/
/* 		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>*/
/* 	<!-- Latest compiled and minified JavaScript -->*/
/* 	<script*/
/* 		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"*/
/* 		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"*/
/* 		crossorigin="anonymous"></script>*/
/* 	{% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
