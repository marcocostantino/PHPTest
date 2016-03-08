<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8d3c8625de668ccc62d93b92aa53b1489f128e9654b3491b3fecb21a3b30cb2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09986a114453ad3591c760a41c97e0285e751625b82d12f9dbcb733eb2479648 = $this->env->getExtension("native_profiler");
        $__internal_09986a114453ad3591c760a41c97e0285e751625b82d12f9dbcb733eb2479648->enter($__internal_09986a114453ad3591c760a41c97e0285e751625b82d12f9dbcb733eb2479648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09986a114453ad3591c760a41c97e0285e751625b82d12f9dbcb733eb2479648->leave($__internal_09986a114453ad3591c760a41c97e0285e751625b82d12f9dbcb733eb2479648_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d13fb1d9a967bd8e43aec1e76fcaf2193b8d4f0b100cc59ce1b2fc17aaa0c239 = $this->env->getExtension("native_profiler");
        $__internal_d13fb1d9a967bd8e43aec1e76fcaf2193b8d4f0b100cc59ce1b2fc17aaa0c239->enter($__internal_d13fb1d9a967bd8e43aec1e76fcaf2193b8d4f0b100cc59ce1b2fc17aaa0c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d13fb1d9a967bd8e43aec1e76fcaf2193b8d4f0b100cc59ce1b2fc17aaa0c239->leave($__internal_d13fb1d9a967bd8e43aec1e76fcaf2193b8d4f0b100cc59ce1b2fc17aaa0c239_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebbed65f9bf36a555e3b90b17d64cfbe56b8c737d30562a5575801afe8447c96 = $this->env->getExtension("native_profiler");
        $__internal_ebbed65f9bf36a555e3b90b17d64cfbe56b8c737d30562a5575801afe8447c96->enter($__internal_ebbed65f9bf36a555e3b90b17d64cfbe56b8c737d30562a5575801afe8447c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebbed65f9bf36a555e3b90b17d64cfbe56b8c737d30562a5575801afe8447c96->leave($__internal_ebbed65f9bf36a555e3b90b17d64cfbe56b8c737d30562a5575801afe8447c96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f3a009e9a03e76caadcd02be274c062e9a1d770901694e92ba20fc4f6afb637 = $this->env->getExtension("native_profiler");
        $__internal_0f3a009e9a03e76caadcd02be274c062e9a1d770901694e92ba20fc4f6afb637->enter($__internal_0f3a009e9a03e76caadcd02be274c062e9a1d770901694e92ba20fc4f6afb637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0f3a009e9a03e76caadcd02be274c062e9a1d770901694e92ba20fc4f6afb637->leave($__internal_0f3a009e9a03e76caadcd02be274c062e9a1d770901694e92ba20fc4f6afb637_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
