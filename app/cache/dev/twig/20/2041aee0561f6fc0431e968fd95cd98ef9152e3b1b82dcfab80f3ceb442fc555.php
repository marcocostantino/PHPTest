<?php

/* :product:list.html.twig */
class __TwigTemplate_e38be8204fdc949660a46b253b5ed25f64615b45d1f26697a63b236663a786ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":product:list.html.twig", 1);
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
        $__internal_882ac3fa612c7f9f10e90f2eb53b13c34820fd04a36524514c9ce939663e815d = $this->env->getExtension("native_profiler");
        $__internal_882ac3fa612c7f9f10e90f2eb53b13c34820fd04a36524514c9ce939663e815d->enter($__internal_882ac3fa612c7f9f10e90f2eb53b13c34820fd04a36524514c9ce939663e815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882ac3fa612c7f9f10e90f2eb53b13c34820fd04a36524514c9ce939663e815d->leave($__internal_882ac3fa612c7f9f10e90f2eb53b13c34820fd04a36524514c9ce939663e815d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58b2c309b45bcec3074ca3c263df129d84a127be14023002e01edfc7bc7c4bd4 = $this->env->getExtension("native_profiler");
        $__internal_58b2c309b45bcec3074ca3c263df129d84a127be14023002e01edfc7bc7c4bd4->enter($__internal_58b2c309b45bcec3074ca3c263df129d84a127be14023002e01edfc7bc7c4bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container\">
            <h1>Prodotti</h1>
            <div class=\"right\">
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("product_create");
        echo "\" class=\"button small\">Crea nuovo</a>
            </div>
            <div class=\"clear\"></div>
            <table width=\"100%\">
                <tr>
                    <th width=\"90px\">Foto</th>
                    <th width=\"350px\">Nome</th>
                    <th>Tags</th>
                    <th width=\"180px\">Data creazione</th>
                    <th width=\"100px\">Azioni</th>
                </tr>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_view", array("id" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\"><img width=\"90\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/products/" . $this->getAttribute($context["product"], "getImage", array(), "method"))), "html", null, true);
            echo "\" alt=\"Foto prodotto ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getId", array(), "method"), "html", null, true);
            echo "\"></a>
                        </td>
                        <td>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_view", array("id" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getName", array(), "method"), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "getTags", array(), "method"), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "getCreated", array(), "method"), "Y-m-d H:i"), "html", null, true);
            echo "
                        </td>
                        <td>
                            <ul class=\"product-actions\">
                                <li><a class=\"button tiny warning\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\">Modifica</a></li>
                                <li><a onclick=\"return confirm('Sei sicuro di voler eliminare questo Prodotto?');\" class=\"button tiny alert\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id" => $this->getAttribute($context["product"], "getId", array(), "method"))), "html", null, true);
            echo "\">Elimina</a></li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_58b2c309b45bcec3074ca3c263df129d84a127be14023002e01edfc7bc7c4bd4->leave($__internal_58b2c309b45bcec3074ca3c263df129d84a127be14023002e01edfc7bc7c4bd4_prof);

    }

    public function getTemplateName()
    {
        return ":product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 41,  103 => 36,  99 => 35,  92 => 31,  86 => 28,  78 => 25,  68 => 22,  64 => 20,  60 => 19,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container">*/
/*             <h1>Prodotti</h1>*/
/*             <div class="right">*/
/*                 <a href="{{ path('product_create') }}" class="button small">Crea nuovo</a>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*             <table width="100%">*/
/*                 <tr>*/
/*                     <th width="90px">Foto</th>*/
/*                     <th width="350px">Nome</th>*/
/*                     <th>Tags</th>*/
/*                     <th width="180px">Data creazione</th>*/
/*                     <th width="100px">Azioni</th>*/
/*                 </tr>*/
/*                 {% for product in products %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             <a href="{{ path('product_view', {'id': product.getId() }) }}"><img width="90" src="{{ asset('uploads/products/' ~ product.getImage()) }}" alt="Foto prodotto {{ product.getId() }}"></a>*/
/*                         </td>*/
/*                         <td>*/
/*                             <a href="{{ path('product_view', {'id': product.getId() }) }}">{{ product.getName() }}</a>*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ product.getTags() }}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ product.getCreated()|date('Y-m-d H:i') }}*/
/*                         </td>*/
/*                         <td>*/
/*                             <ul class="product-actions">*/
/*                                 <li><a class="button tiny warning" href="{{ path('product_edit', {'id': product.getId() }) }}">Modifica</a></li>*/
/*                                 <li><a onclick="return confirm('Sei sicuro di voler eliminare questo Prodotto?');" class="button tiny alert" href="{{ path('product_delete', {'id': product.getId() }) }}">Elimina</a></li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
