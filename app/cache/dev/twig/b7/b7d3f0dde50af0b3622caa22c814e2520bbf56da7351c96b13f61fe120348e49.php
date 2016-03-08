<?php

/* ::base.html.twig */
class __TwigTemplate_ce2e5ae8354cf99ac981a0c4c44ac23fc2bd97c556529b25094bc0001464f76f extends Twig_Template
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
        $__internal_b9bbc624b69fb37c3f1edef7796adc605b5f023d62cf7f2585223281e7462cfb = $this->env->getExtension("native_profiler");
        $__internal_b9bbc624b69fb37c3f1edef7796adc605b5f023d62cf7f2585223281e7462cfb->enter($__internal_b9bbc624b69fb37c3f1edef7796adc605b5f023d62cf7f2585223281e7462cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
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
        echo "\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/foundationtosymfony.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/foundationtosymfony.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 19
        echo $this->env->getExtension('knp_menu')->render("MyBundle:Builder:mainMenu", array("template" => "FlobFoundationBundle:Menu:foundation_knp_menu.html.twig"));
        echo "
        
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>";
        
        $__internal_b9bbc624b69fb37c3f1edef7796adc605b5f023d62cf7f2585223281e7462cfb->leave($__internal_b9bbc624b69fb37c3f1edef7796adc605b5f023d62cf7f2585223281e7462cfb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d9c236c8449e4f61e9be66b4053319d2ff080add78452fb4fb52e049c39cd7 = $this->env->getExtension("native_profiler");
        $__internal_03d9c236c8449e4f61e9be66b4053319d2ff080add78452fb4fb52e049c39cd7->enter($__internal_03d9c236c8449e4f61e9be66b4053319d2ff080add78452fb4fb52e049c39cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03d9c236c8449e4f61e9be66b4053319d2ff080add78452fb4fb52e049c39cd7->leave($__internal_03d9c236c8449e4f61e9be66b4053319d2ff080add78452fb4fb52e049c39cd7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c0ccfc01619487753bbae29787c52c7a93339b55a5b14a2e4557f7166248e6d = $this->env->getExtension("native_profiler");
        $__internal_6c0ccfc01619487753bbae29787c52c7a93339b55a5b14a2e4557f7166248e6d->enter($__internal_6c0ccfc01619487753bbae29787c52c7a93339b55a5b14a2e4557f7166248e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6c0ccfc01619487753bbae29787c52c7a93339b55a5b14a2e4557f7166248e6d->leave($__internal_6c0ccfc01619487753bbae29787c52c7a93339b55a5b14a2e4557f7166248e6d_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9289d8f0a5d4789f07f35d8e48967c94071459760c6b27322b7d9441b3aee4a = $this->env->getExtension("native_profiler");
        $__internal_e9289d8f0a5d4789f07f35d8e48967c94071459760c6b27322b7d9441b3aee4a->enter($__internal_e9289d8f0a5d4789f07f35d8e48967c94071459760c6b27322b7d9441b3aee4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9289d8f0a5d4789f07f35d8e48967c94071459760c6b27322b7d9441b3aee4a->leave($__internal_e9289d8f0a5d4789f07f35d8e48967c94071459760c6b27322b7d9441b3aee4a_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e97638612a6275de92db6016feb5098f56199af73c5db112fa83b46aa2e3d8ae = $this->env->getExtension("native_profiler");
        $__internal_e97638612a6275de92db6016feb5098f56199af73c5db112fa83b46aa2e3d8ae->enter($__internal_e97638612a6275de92db6016feb5098f56199af73c5db112fa83b46aa2e3d8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e97638612a6275de92db6016feb5098f56199af73c5db112fa83b46aa2e3d8ae->leave($__internal_e97638612a6275de92db6016feb5098f56199af73c5db112fa83b46aa2e3d8ae_prof);

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
        return array (  115 => 22,  104 => 21,  93 => 6,  81 => 5,  73 => 23,  70 => 22,  68 => 21,  63 => 19,  57 => 16,  50 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">*/
/*         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css" type="text/css">*/
/*         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css" type="text/css">*/
/*         <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">*/
/*         <link rel="stylesheet" href="{{ asset('css/foundationtosymfony.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">*/
/*         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>*/
/*         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/foundationtosymfony.js') }}"></script>*/
/*     </head>*/
/*     <body>*/
/*         {{ knp_menu_render('MyBundle:Builder:mainMenu', {'template' : 'FlobFoundationBundle:Menu:foundation_knp_menu.html.twig'}) }}*/
/*         */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
