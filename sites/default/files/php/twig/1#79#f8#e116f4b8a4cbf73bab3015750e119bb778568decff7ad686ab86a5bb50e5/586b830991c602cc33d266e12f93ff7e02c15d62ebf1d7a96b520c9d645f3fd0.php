<?php

/* core/themes/classy/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_79f8e116f4b8a4cbf73bab3015750e119bb778568decff7ad686ab86a5bb50e5 extends Twig_Template
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
        // line 12
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()))) {
            // line 13
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">";
            // line 14
            echo $this->env->getExtension('drupal_core')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 16
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 17
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 18
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 19
                echo $this->env->getExtension('drupal_core')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 20
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 24
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array())) {
                // line 25
                echo "        <li class=\"pager__item is-active\">
          ";
                // line 26
                echo t("Page @items.current", array("@items.current" => $this->getAttribute(                // line 27
(isset($context["items"]) ? $context["items"] : null), "current", array()), ));
                // line 29
                echo "        </li>
      ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 32
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 33
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 34
                echo $this->env->getExtension('drupal_core')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 35
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("››"))) : (t("››"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 39
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  84 => 35,  80 => 34,  72 => 33,  69 => 32,  66 => 31,  62 => 29,  60 => 27,  59 => 26,  56 => 25,  53 => 24,  46 => 20,  42 => 19,  34 => 18,  31 => 17,  29 => 16,  24 => 14,  21 => 13,  19 => 12,);
    }
}
