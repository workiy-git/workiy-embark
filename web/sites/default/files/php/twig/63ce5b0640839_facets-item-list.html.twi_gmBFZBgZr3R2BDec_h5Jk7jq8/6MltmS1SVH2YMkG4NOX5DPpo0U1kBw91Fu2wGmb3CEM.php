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

/* modules/contrib/facets/templates/facets-item-list.html.twig */
class __TwigTemplate_97237320702912d3d0e1e2838b529d97 extends \Twig\Template
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
        // line 27
        if (($context["cache_hash"] ?? null)) {
            // line 28
            echo "  <!-- facets cacheable metadata
       hash: ";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_hash"] ?? null), 29, $this->source), "html", null, true);
            echo "
  ";
            // line 30
            if (($context["cache_contexts"] ?? null)) {
                // line 31
                echo "       contexts: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_contexts"] ?? null), 31, $this->source), "html", null, true);
            }
            // line 33
            echo "  ";
            if (($context["cache_tags"] ?? null)) {
                // line 34
                echo "       tags: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_tags"] ?? null), 34, $this->source), "html", null, true);
            }
            // line 36
            echo "  ";
            if (($context["cache_max_age"] ?? null)) {
                // line 37
                echo "       max age: ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_max_age"] ?? null), 37, $this->source), "html", null, true);
            }
            // line 39
            echo "  -->";
        }
        // line 41
        echo "<div class=\"facets-widget-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 41), "type", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\">
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 42), "type", [], "any", false, false, true, 42)) {
            // line 43
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 43), "type", [], "any", false, false, true, 43), 43, $this->source))], "method", false, false, true, 43);
            // line 44
            echo "  ";
        }
        // line 45
        echo "  ";
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 46
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 47
                echo "<h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
                echo "</h3>";
            }
            // line 50
            if (($context["items"] ?? null)) {
                // line 51
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 51, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 51, $this->source), "html", null, true);
                echo ">";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 53
                    echo "<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 55, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 57, $this->source), "html", null, true);
            }
        }
        // line 60
        echo "
";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "widget", [], "any", false, false, true, 61), "type", [], "any", false, false, true, 61) == "dropdown")) {
            // line 62
            echo "  <label id=\"facet_";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "id", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "_label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Facet"));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["facet"] ?? null), "label", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</label>";
        }
        // line 64
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/facets/templates/facets-item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  128 => 62,  126 => 61,  123 => 60,  119 => 57,  114 => 55,  104 => 53,  100 => 52,  95 => 51,  93 => 50,  88 => 47,  86 => 46,  83 => 45,  80 => 44,  78 => 43,  76 => 42,  71 => 41,  68 => 39,  64 => 37,  61 => 36,  57 => 34,  54 => 33,  50 => 31,  48 => 30,  44 => 29,  41 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a facets item list.
 *
 * Available variables:
 * - items: A list of items. Each item contains:
 *   - attributes: HTML attributes to be applied to each list item.
 *   - value: The content of the list element.
 * - title: The title of the list.
 * - list_type: The tag for list element (\"ul\" or \"ol\").
 * - wrapper_attributes: HTML attributes to be applied to the list wrapper.
 * - attributes: HTML attributes to be applied to the list.
 * - empty: A message to display when there are no items. Allowed value is a
 *   string or render array.
 * - context: A list of contextual data associated with the list. May contain:
 *   - list_style: The ID of the widget plugin this facet uses.
 * - facet: The facet for this result item.
 *   - id: the machine name for the facet.
 *   - label: The facet label.
 *
 * @see facets_preprocess_facets_item_list()
 *
 * @ingroup themeable
 */
#}
{% if cache_hash %}
  <!-- facets cacheable metadata
       hash: {{ cache_hash }}
  {% if cache_contexts %}
       contexts: {{ cache_contexts }}
  {%- endif %}
  {% if cache_tags %}
       tags: {{ cache_tags }}
  {%- endif %}
  {% if cache_max_age %}
       max age: {{ cache_max_age }}
  {%- endif %}
  -->
{%- endif %}
<div class=\"facets-widget- {{- facet.widget.type -}} \">
  {% if facet.widget.type %}
    {%- set attributes = attributes.addClass('item-list__' ~ facet.widget.type) %}
  {% endif %}
  {% if items or empty %}
    {%- if title is not empty -%}
      <h3>{{ title }}</h3>
    {%- endif -%}

    {%- if items -%}
      <{{ list_type }}{{ attributes }}>
        {%- for item in items -%}
          <li{{ item.attributes }}>{{ item.value }}</li>
        {%- endfor -%}
      </{{ list_type }}>
    {%- else -%}
      {{- empty -}}
    {%- endif -%}
  {%- endif %}

{% if facet.widget.type == \"dropdown\" %}
  <label id=\"facet_{{ facet.id }}_label\">{{ 'Facet'|t }} {{ facet.label }}</label>
{%- endif %}
</div>
", "modules/contrib/facets/templates/facets-item-list.html.twig", "/var/www/html/web/modules/contrib/facets/templates/facets-item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 27, "set" => 43, "for" => 52);
        static $filters = array("escape" => 29, "t" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 't'],
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
