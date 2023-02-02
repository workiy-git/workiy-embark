<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig */
class __TwigTemplate_7fd2b1e2554a159e12c3f38869586eda extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["content"] ?? null)) {
            // line 2
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "moderation-dashboard"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
            echo ">
    ";
            // line 3
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "left", [], "any", false, false, true, 3)) {
                // line 4
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "left", [], "any", false, false, true, 4), "addClass", [0 => "layout__region", 1 => "moderation-dashboard-region"], "method", false, false, true, 4), 4, $this->source), "html", null, true);
                echo ">
        ";
                // line 5
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "left", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 8
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 8)) {
                // line 9
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "middle", [], "any", false, false, true, 9), "addClass", [0 => "layout__region", 1 => "moderation-dashboard-region"], "method", false, false, true, 9), 9, $this->source), "html", null, true);
                echo ">
        ";
                // line 10
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "middle", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 13
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "right", [], "any", false, false, true, 13)) {
                // line 14
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "right", [], "any", false, false, true, 14), "addClass", [0 => "layout__region", 1 => "moderation-dashboard-region"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                echo ">
        ";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "right", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 18
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  81 => 15,  76 => 14,  73 => 13,  67 => 10,  62 => 9,  59 => 8,  53 => 5,  48 => 4,  46 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content %}
  <div {{ attributes.addClass('moderation-dashboard') }}>
    {% if content.left %}
      <div {{ region_attributes.left.addClass('layout__region', 'moderation-dashboard-region') }}>
        {{ content.left }}
      </div>
    {% endif %}
    {% if content.middle %}
      <div {{ region_attributes.middle.addClass('layout__region', 'moderation-dashboard-region') }}>
        {{ content.middle }}
      </div>
    {% endif %}
    {% if content.right %}
      <div {{ region_attributes.right.addClass('layout__region', 'moderation-dashboard-region') }}>
        {{ content.right }}
      </div>
    {% endif %}
  </div>
{% endif %}
", "modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig", "/var/www/html/web/modules/contrib/moderation_dashboard/templates/moderation-dashboard.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
