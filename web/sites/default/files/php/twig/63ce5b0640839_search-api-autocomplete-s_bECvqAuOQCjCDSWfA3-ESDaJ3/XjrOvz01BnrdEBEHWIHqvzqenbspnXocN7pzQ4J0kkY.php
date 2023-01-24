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

/* modules/contrib/search_api_autocomplete/templates/search-api-autocomplete-suggestion.html.twig */
class __TwigTemplate_725fcea5f09f71d6e256deddf531c659 extends \Twig\Template
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
        // line 28
        echo "
<div class=\"search-api-autocomplete-suggestion\">
  ";
        // line 30
        if (($context["note"] ?? null)) {
            // line 31
            echo "    <span class=\"autocomplete-suggestion-note\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["note"] ?? null), 31, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 33
        echo "  ";
        if (($context["label"] ?? null)) {
            // line 34
            echo "    <span class=\"autocomplete-suggestion-label\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 34, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 36
        echo "  ";
        ob_start();
        // line 37
        echo "    ";
        if (($context["suggestion_prefix"] ?? null)) {
            // line 38
            echo "      <span class=\"autocomplete-suggestion-suggestion-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suggestion_prefix"] ?? null), 38, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 40
        echo "    ";
        if (($context["user_input"] ?? null)) {
            // line 41
            echo "      <span class=\"autocomplete-suggestion-user-input\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_input"] ?? null), 41, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 43
        echo "    ";
        if (($context["suggestion_suffix"] ?? null)) {
            // line 44
            echo "      <span class=\"autocomplete-suggestion-suggestion-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suggestion_suffix"] ?? null), 44, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 46
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 47
        echo "  ";
        if (($context["results_count"] ?? null)) {
            // line 48
            echo "    <span class=\"autocomplete-suggestion-results-count\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results_count"] ?? null), 48, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/search_api_autocomplete/templates/search-api-autocomplete-suggestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 50,  96 => 48,  93 => 47,  90 => 46,  84 => 44,  81 => 43,  75 => 41,  72 => 40,  66 => 38,  63 => 37,  60 => 36,  54 => 34,  51 => 33,  45 => 31,  43 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a search suggestion.
 *
 * Keywords suggestions (which will fill the keywords input field) can be
 * distinguished from direct results/links (which will take the user to a
 * different page) by checking whether the \"keys\" or the \"url\" key is set.
 *
 * Keywords suggestions will usually contain the keywords as a concatenation of
 * \"suggestion_prefix\", \"user_input\" and \"suggestion_suffix\".
 *
 * Available variables:
 * - keys: The fulltext keywords this suggestion will put into the search field.
 * - url: The URL (\\Drupal\\Core\\Url object) to which the suggestion will
 *   redirect the user.
 * - label: A complete label to display for the suggestion.
 * - note: Text to display in front of the label.
 * - results_count: The (approximate) number of results the suggested keywords
 *   will yield.
 * - suggestion_prefix: A suggested prefix for the entered user input.
 * - suggestion_suffix: A suggested suffix for the entered user input.
 * - user_input: The input entered by the user so far.
 *
 * @ingroup themeable
 */
#}

<div class=\"search-api-autocomplete-suggestion\">
  {% if note %}
    <span class=\"autocomplete-suggestion-note\">{{ note }}</span>
  {% endif %}
  {% if label %}
    <span class=\"autocomplete-suggestion-label\">{{ label }}</span>
  {% endif %}
  {% spaceless %}
    {% if suggestion_prefix %}
      <span class=\"autocomplete-suggestion-suggestion-prefix\">{{ suggestion_prefix }}</span>
    {% endif %}
    {% if user_input %}
      <span class=\"autocomplete-suggestion-user-input\">{{ user_input }}</span>
    {% endif %}
    {% if suggestion_suffix %}
      <span class=\"autocomplete-suggestion-suggestion-suffix\">{{ suggestion_suffix }}</span>
    {% endif %}
  {% endspaceless %}
  {% if results_count %}
    <span class=\"autocomplete-suggestion-results-count\">{{ results_count }}</span>
  {% endif %}
</div>
", "modules/contrib/search_api_autocomplete/templates/search-api-autocomplete-suggestion.html.twig", "/var/www/html/web/modules/contrib/search_api_autocomplete/templates/search-api-autocomplete-suggestion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30, "spaceless" => 36);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless'],
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
