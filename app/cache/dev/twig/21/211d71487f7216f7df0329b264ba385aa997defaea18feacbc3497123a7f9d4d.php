<?php

/* :product:edit.html.twig */
class __TwigTemplate_f07f1c3526c3355c4b8ce412bc7586be0aaf4d1eb7412f296f78cdf8b0dbcec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:edit.html.twig", 1);
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
        $__internal_0128090457e6b8d0f8338bc937ffa4f70e6fc4604c9eb55e93607d13ae4312c3 = $this->env->getExtension("native_profiler");
        $__internal_0128090457e6b8d0f8338bc937ffa4f70e6fc4604c9eb55e93607d13ae4312c3->enter($__internal_0128090457e6b8d0f8338bc937ffa4f70e6fc4604c9eb55e93607d13ae4312c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0128090457e6b8d0f8338bc937ffa4f70e6fc4604c9eb55e93607d13ae4312c3->leave($__internal_0128090457e6b8d0f8338bc937ffa4f70e6fc4604c9eb55e93607d13ae4312c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13720d0c6e7aa290b68e5da875b9553c4aaa926d5b470adaf41b77ba6c3b70a3 = $this->env->getExtension("native_profiler");
        $__internal_13720d0c6e7aa290b68e5da875b9553c4aaa926d5b470adaf41b77ba6c3b70a3->enter($__internal_13720d0c6e7aa290b68e5da875b9553c4aaa926d5b470adaf41b77ba6c3b70a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
            <h1>Modifica prodotto \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "\"</h1>
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
                    <button class=\"success\" type=\"submit\">Salva modifiche</button>
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
        
        $__internal_13720d0c6e7aa290b68e5da875b9553c4aaa926d5b470adaf41b77ba6c3b70a3->leave($__internal_13720d0c6e7aa290b68e5da875b9553c4aaa926d5b470adaf41b77ba6c3b70a3_prof);

    }

    public function getTemplateName()
    {
        return ":product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container">*/
/*             <h1>Modifica prodotto "{{ product.getName() }}"</h1>*/
/*             <div>*/
/*                 {{ form_start(form) }}*/
/*                     {{ form_row(form.name) }}*/
/*                     {{ form_row(form.description) }}*/
/*                     {{ form_row(form.tags) }}*/
/*                     {{ form_row(form.image) }}*/
/*                     <button class="success" type="submit">Salva modifiche</button>*/
/*                     <div class="right">*/
/*                         <a href="{{ path('product_list') }}" class="button">Torna indietro</a>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
