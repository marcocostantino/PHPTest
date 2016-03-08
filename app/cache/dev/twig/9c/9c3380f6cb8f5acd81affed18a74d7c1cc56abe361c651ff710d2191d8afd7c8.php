<?php

/* :default:index.html.twig */
class __TwigTemplate_d54ffa31072b78dc745ae38e4937b962bfc9635666110d784087d5ef63be04f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6aea91ce39a0b7c8fdfd41e92191347864ee7ac38186bf2d4652dcf09492a9 = $this->env->getExtension("native_profiler");
        $__internal_7a6aea91ce39a0b7c8fdfd41e92191347864ee7ac38186bf2d4652dcf09492a9->enter($__internal_7a6aea91ce39a0b7c8fdfd41e92191347864ee7ac38186bf2d4652dcf09492a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6aea91ce39a0b7c8fdfd41e92191347864ee7ac38186bf2d4652dcf09492a9->leave($__internal_7a6aea91ce39a0b7c8fdfd41e92191347864ee7ac38186bf2d4652dcf09492a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8956aa8e5f5a8c87d83f63adc59baf808b05b34ca9ec592184d60b2adb8bc3f1 = $this->env->getExtension("native_profiler");
        $__internal_8956aa8e5f5a8c87d83f63adc59baf808b05b34ca9ec592184d60b2adb8bc3f1->enter($__internal_8956aa8e5f5a8c87d83f63adc59baf808b05b34ca9ec592184d60b2adb8bc3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
            <div id=\"welcome\">
                <h1>Benvenuto nell'App Test</h1>
            </div>
        </div>
    </div>
";
        
        $__internal_8956aa8e5f5a8c87d83f63adc59baf808b05b34ca9ec592184d60b2adb8bc3f1->leave($__internal_8956aa8e5f5a8c87d83f63adc59baf808b05b34ca9ec592184d60b2adb8bc3f1_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container">*/
/*             <div id="welcome">*/
/*                 <h1>Benvenuto nell'App Test</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
