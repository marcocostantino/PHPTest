<?php

/* ::base.html.twig */
class __TwigTemplate_6865bebb76c97a6921010d45209313297fb64ef29b2ddef0770fc934c174eac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/normalize.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/flobfoundation/css/foundationtosymfony.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
    </head>
    <body>
    ";
        // line 15
        echo $this->env->getExtension('knp_menu')->render("MyBundle:Builder:mainMenu");
        echo "
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/flobfoundation/js/foundationtosymfony.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  81 => 16,  76 => 6,  70 => 5,  63 => 20,  59 => 18,  56 => 17,  54 => 16,  50 => 15,  43 => 11,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/normalize.min.css" type="text/css" />*/
/*         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css" type="text/css" />*/
/*         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/flobfoundation/css/foundationtosymfony.css') }}" type="text/css" />*/
/*         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/*     {{ knp_menu_render('MyBundle:Builder:mainMenu') }}*/
/*     {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/flobfoundation/js/foundationtosymfony.js') }}"></script>*/
/*     </body>*/
/* </html>*/
