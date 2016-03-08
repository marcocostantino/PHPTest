<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_355eb278d1ac69f30460288a8e353cfd816eb0e838353f4dada7db11a5953a3f extends Twig_Template
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
        $__internal_756f46a1b041c5cb10c61ee05c8aa2774e45a8c8c33718019af2c8d56c4abb08 = $this->env->getExtension("native_profiler");
        $__internal_756f46a1b041c5cb10c61ee05c8aa2774e45a8c8c33718019af2c8d56c4abb08->enter($__internal_756f46a1b041c5cb10c61ee05c8aa2774e45a8c8c33718019af2c8d56c4abb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_756f46a1b041c5cb10c61ee05c8aa2774e45a8c8c33718019af2c8d56c4abb08->leave($__internal_756f46a1b041c5cb10c61ee05c8aa2774e45a8c8c33718019af2c8d56c4abb08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
