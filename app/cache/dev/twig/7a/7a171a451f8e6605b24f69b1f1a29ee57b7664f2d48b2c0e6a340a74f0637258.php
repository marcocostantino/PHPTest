<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7a85f1e3fa4903ec356c718e7c436c1f9e2840ec8ca62ec9c6c4c50177d4962c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39b58fcfbf0d3a082dd2280ee788718689a2682b82d443c8d7b58ab10acb5dc0 = $this->env->getExtension("native_profiler");
        $__internal_39b58fcfbf0d3a082dd2280ee788718689a2682b82d443c8d7b58ab10acb5dc0->enter($__internal_39b58fcfbf0d3a082dd2280ee788718689a2682b82d443c8d7b58ab10acb5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_39b58fcfbf0d3a082dd2280ee788718689a2682b82d443c8d7b58ab10acb5dc0->leave($__internal_39b58fcfbf0d3a082dd2280ee788718689a2682b82d443c8d7b58ab10acb5dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
