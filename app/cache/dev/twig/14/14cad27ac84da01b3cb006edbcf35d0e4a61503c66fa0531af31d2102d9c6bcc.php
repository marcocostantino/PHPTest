<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_455794ed043d95bfcfca9f077023a3acaa861c734a35fc22e308d64cc53fb876 extends Twig_Template
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
        $__internal_e9fb640c3af67da8726eac205584ae61696d28020c16fdb580db5aa48fc3d022 = $this->env->getExtension("native_profiler");
        $__internal_e9fb640c3af67da8726eac205584ae61696d28020c16fdb580db5aa48fc3d022->enter($__internal_e9fb640c3af67da8726eac205584ae61696d28020c16fdb580db5aa48fc3d022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e9fb640c3af67da8726eac205584ae61696d28020c16fdb580db5aa48fc3d022->leave($__internal_e9fb640c3af67da8726eac205584ae61696d28020c16fdb580db5aa48fc3d022_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
