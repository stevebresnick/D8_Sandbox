<?php

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_57c15e59d9bfe012d5f8fd7d8a513df34ef2b2222bfb064a4536cd901de6016f extends Twig_Template
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
        // line 13
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 14
            echo "  ";
            ob_start();
            // line 15
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 17
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 17,  24 => 15,  21 => 14,  19 => 13,);
    }
}
