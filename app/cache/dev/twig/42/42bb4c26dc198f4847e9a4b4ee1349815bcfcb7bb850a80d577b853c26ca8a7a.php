<?php

/* :product:view.html.twig */
class __TwigTemplate_1a3fa010b27b66ed4dbf5c033875e2ea729610c3e0f66dba012e4098a36b4cd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:view.html.twig", 1);
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
        $__internal_b1a91b18c6820459581c84abedd9bdfcdc17f96fcd7fc1634a535b72a7c3a9f7 = $this->env->getExtension("native_profiler");
        $__internal_b1a91b18c6820459581c84abedd9bdfcdc17f96fcd7fc1634a535b72a7c3a9f7->enter($__internal_b1a91b18c6820459581c84abedd9bdfcdc17f96fcd7fc1634a535b72a7c3a9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a91b18c6820459581c84abedd9bdfcdc17f96fcd7fc1634a535b72a7c3a9f7->leave($__internal_b1a91b18c6820459581c84abedd9bdfcdc17f96fcd7fc1634a535b72a7c3a9f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b10ca04c430799ab26265fd524ddb0a2a5ea59e7226bad9c6f2265ea9e735098 = $this->env->getExtension("native_profiler");
        $__internal_b10ca04c430799ab26265fd524ddb0a2a5ea59e7226bad9c6f2265ea9e735098->enter($__internal_b10ca04c430799ab26265fd524ddb0a2a5ea59e7226bad9c6f2265ea9e735098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
            <h1>Visualizza prodotto \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getName", array(), "method"), "html", null, true);
        echo "\"</h1>
            <div class=\"container\">
                <div class=\"left product-image\">
                    <img width=\"90%\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/products/" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getImage", array(), "method"))), "html", null, true);
        echo "\" alt=\"Foto prodotto ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getId", array(), "method"), "html", null, true);
        echo "\"></a>
                </div>
                <div class=\"left product-infos\">
                    <div class=\"product-info-block\"><b>Descrizione:</b><br>";
        // line 12
        echo nl2br(twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getDescription", array(), "method")), "html", null, true));
        echo "</div>
                    <div class=\"product-info-block\"><b>Tags:</b><br>";
        // line 13
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getTags", array(), "method")), "html", null, true);
        echo "</div>
                    <div class=\"product-info-block\">
                        <b>Creato il:</b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getCreated", array(), "method"), "d/m/Y"), "html", null, true);
        echo "
                        <b>alle ore:</b> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getCreated", array(), "method"), "H:i:s"), "html", null, true);
        echo "
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_b10ca04c430799ab26265fd524ddb0a2a5ea59e7226bad9c6f2265ea9e735098->leave($__internal_b10ca04c430799ab26265fd524ddb0a2a5ea59e7226bad9c6f2265ea9e735098_prof);

    }

    public function getTemplateName()
    {
        return ":product:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  67 => 15,  62 => 13,  58 => 12,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container">*/
/*             <h1>Visualizza prodotto "{{ product.getName() }}"</h1>*/
/*             <div class="container">*/
/*                 <div class="left product-image">*/
/*                     <img width="90%" src="{{ asset('uploads/products/' ~ product.getImage()) }}" alt="Foto prodotto {{ product.getId() }}"></a>*/
/*                 </div>*/
/*                 <div class="left product-infos">*/
/*                     <div class="product-info-block"><b>Descrizione:</b><br>{{ product.getDescription()|striptags|nl2br }}</div>*/
/*                     <div class="product-info-block"><b>Tags:</b><br>{{ product.getTags()|striptags }}</div>*/
/*                     <div class="product-info-block">*/
/*                         <b>Creato il:</b> {{ product.getCreated()|date('d/m/Y') }}*/
/*                         <b>alle ore:</b> {{ product.getCreated()|date('H:i:s') }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
