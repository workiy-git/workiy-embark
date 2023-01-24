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

/* modules/contrib/facets/templates/facets-result-item.html.twig */
class __TwigTemplate_ecf471ab6056b4a872feecd2d61f5fdd extends \Twig\Template
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
        // line 19
        if (($context["is_active"] ?? null)) {
            // line 20
            echo "  <span class=\"facet-item__status js-facet-deactivate\">(-)</span>
";
        }
        // line 22
        echo "<span class=\"facet-item__value\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 22, $this->source), "html", null, true);
        echo "</span>
";
        // line 23
        if (($context["show_count"] ?? null)) {
            // line 24
            echo "  <span class=\"facet-item__count\">(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 24, $this->source), "html", null, true);
            echo ")</span>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/facets/templates/facets-result-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  50 => 23,  45 => 22,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of a facet result item.
 *
 * Available variables:
 * - value: The item value.
 * - raw_value: The raw item value.
 * - show_count: If this facet provides count.
 * - count: The amount of results.
 * - is_active: The item is active.
 * - facet: The facet for this result item.
 *   - id: the machine name for the facet.
 *   - label: The facet label.
 *
 * @ingroup themeable
 */
#}
{% if is_active %}
  <span class=\"facet-item__status js-facet-deactivate\">(-)</span>
{% endif %}
<span class=\"facet-item__value\">{{ value }}</span>
{% if show_count %}
  <span class=\"facet-item__count\">({{ count }})</span>
{% endif %}
", "modules/contrib/facets/templates/facets-result-item.html.twig", "/var/www/html/web/modules/contrib/facets/templates/facets-result-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 22);
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
