<?php

/* themes/vcweb/templates/views/views-view-field--field-service-status.html.twig */
class __TwigTemplate_4304c6c9d43ca78d9f921e24d613c10578868862cbebde9324096a76462ea858 extends Twig_Template
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
        $tags = array("if" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 23
        echo "
";
        // line 24
        if (((isset($context["output"]) ? $context["output"] : null) == "Online")) {
            // line 25
            echo "  <img src=\"/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
            echo "/images/status-online.jpg\" height=\"30\"/>
";
        } elseif ((        // line 26
(isset($context["output"]) ? $context["output"] : null) == "Issue Identified")) {
            // line 27
            echo "  <img src=\"/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
            echo "/images/status-issue-identified.jpg\" height=\"30\"/>
";
        } elseif ((        // line 28
(isset($context["output"]) ? $context["output"] : null) == "Scheduled Maintenance")) {
            // line 29
            echo "  <img src=\"/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
            echo "/images/status-scheduled-maintenance.jpg\" height=\"30\"/>
";
        } elseif ((        // line 30
(isset($context["output"]) ? $context["output"] : null) == "Offline")) {
            // line 31
            echo "  <img src=\"/";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
            echo "/images/status-offline.jpg\" height=\"30\"/>
";
        }
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/vcweb/templates/views/views-view-field--field-service-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  69 => 31,  67 => 30,  62 => 29,  60 => 28,  55 => 27,  53 => 26,  48 => 25,  46 => 24,  43 => 23,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a single field in a view.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view that the field belongs to.*/
/*  * - field: The field handler that can process the input.*/
/*  * - row: The raw result of the database query that generated this field.*/
/*  * - output: The processed output that will normally be used.*/
/*  **/
/*  * When fetching output from the row this construct should be used:*/
/*  * data = row[field.field_alias]*/
/*  **/
/*  * The above will guarantee that you'll always get the correct data, regardless*/
/*  * of any changes in the aliasing that might happen if the view is modified.*/
/*  **/
/*  * @see template_preprocess_views_view_field()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {% if output == "Online" %}*/
/*   <img src="/{{ directory }}/images/status-online.jpg" height="30"/>*/
/* {% elseif output == "Issue Identified" %}*/
/*   <img src="/{{ directory }}/images/status-issue-identified.jpg" height="30"/>*/
/* {% elseif output == "Scheduled Maintenance" %}*/
/*   <img src="/{{ directory }}/images/status-scheduled-maintenance.jpg" height="30"/>*/
/* {% elseif output == "Offline" %}*/
/*   <img src="/{{ directory }}/images/status-offline.jpg" height="30"/>*/
/* {% endif %}*/
/* {{ output }}*/
