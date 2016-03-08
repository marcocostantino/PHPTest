<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f4575e2ff82d0b0cebdd3405dec2eba423960919d3866edfbe5ed234affa45c1 extends Twig_Template
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
        $__internal_bd89417b6f1162e06550037398cb348cfe135f48f6f53029c1fc5c66a882297c = $this->env->getExtension("native_profiler");
        $__internal_bd89417b6f1162e06550037398cb348cfe135f48f6f53029c1fc5c66a882297c->enter($__internal_bd89417b6f1162e06550037398cb348cfe135f48f6f53029c1fc5c66a882297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bd89417b6f1162e06550037398cb348cfe135f48f6f53029c1fc5c66a882297c->leave($__internal_bd89417b6f1162e06550037398cb348cfe135f48f6f53029c1fc5c66a882297c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
