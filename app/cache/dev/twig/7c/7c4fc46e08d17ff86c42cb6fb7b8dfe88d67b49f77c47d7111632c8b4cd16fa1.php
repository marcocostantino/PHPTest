<?php

/* :product:create.html.twig */
class __TwigTemplate_00dc0ebdb51fec75123dff0d83390a53238a5b3467104f9828f51f8be6ac301c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:create.html.twig", 1);
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
        $__internal_74f3f7316559d010a581e0d11a5ec301c3013b5f3431e3098ba5eec98d414d92 = $this->env->getExtension("native_profiler");
        $__internal_74f3f7316559d010a581e0d11a5ec301c3013b5f3431e3098ba5eec98d414d92->enter($__internal_74f3f7316559d010a581e0d11a5ec301c3013b5f3431e3098ba5eec98d414d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f3f7316559d010a581e0d11a5ec301c3013b5f3431e3098ba5eec98d414d92->leave($__internal_74f3f7316559d010a581e0d11a5ec301c3013b5f3431e3098ba5eec98d414d92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb5aacb8d844c68b3d237c8e8ffdbf037fdb24aa8e5f6c36b223148dcd9a9ee9 = $this->env->getExtension("native_profiler");
        $__internal_fb5aacb8d844c68b3d237c8e8ffdbf037fdb24aa8e5f6c36b223148dcd9a9ee9->enter($__internal_fb5aacb8d844c68b3d237c8e8ffdbf037fdb24aa8e5f6c36b223148dcd9a9ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
            <h1>Crea nuovo prodotto</h1>
            <div>
                ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
                    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
                    <button class=\"success\" type=\"submit\">Crea Prodotto</button>
                    <div class=\"right\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("product_list");
        echo "\" class=\"button\">Torna indietro</a>
                    </div>
                    <div class=\"clear\"></div>
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_fb5aacb8d844c68b3d237c8e8ffdbf037fdb24aa8e5f6c36b223148dcd9a9ee9->leave($__internal_fb5aacb8d844c68b3d237c8e8ffdbf037fdb24aa8e5f6c36b223148dcd9a9ee9_prof);

    }

    public function getTemplateName()
    {
        return ":product:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  68 => 15,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container">*/
/*             <h1>Crea nuovo prodotto</h1>*/
/*             <div>*/
/*                 {{ form_start(form) }}*/
/*                     {{ form_row(form.name) }}*/
/*                     {{ form_row(form.description) }}*/
/*                     {{ form_row(form.tags) }}*/
/*                     {{ form_row(form.image) }}*/
/*                     <button class="success" type="submit">Crea Prodotto</button>*/
/*                     <div class="right">*/
/*                         <a href="{{ path('product_list') }}" class="button">Torna indietro</a>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
