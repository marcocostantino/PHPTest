<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_647c019cffa31bca65096d7bb5df0a3527c7ff11fa7a240817b4bf6ff8fe212c extends Twig_Template
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
        $__internal_69463a1c19e06d9f1aa0685411ef5e8f4bbf7b4c2dd15224348685594df897cf = $this->env->getExtension("native_profiler");
        $__internal_69463a1c19e06d9f1aa0685411ef5e8f4bbf7b4c2dd15224348685594df897cf->enter($__internal_69463a1c19e06d9f1aa0685411ef5e8f4bbf7b4c2dd15224348685594df897cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_69463a1c19e06d9f1aa0685411ef5e8f4bbf7b4c2dd15224348685594df897cf->leave($__internal_69463a1c19e06d9f1aa0685411ef5e8f4bbf7b4c2dd15224348685594df897cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
