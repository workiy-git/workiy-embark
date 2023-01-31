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

/* modules/contrib/facets_block/templates/facets-block.html.twig */
class __TwigTemplate_a13f1f99bc37ead3805229141908c70a extends \Twig\Template
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
        echo "<span style=\"color:white;margin-right: 15px;\">Filter by:</span>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["facets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["facet"]) {
            // line 2
            echo "  <div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facet"], "attributes", [], "any", false, false, true, 2), "addClass", [0 => "facet-block"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
            echo ">
    ";
            // line 3
            if (($context["show_title"] ?? null)) {
                // line 4
                echo "      <p class=\"facet-block__title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["facet"], "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
                echo "</p>
    ";
            }
            // line 6
            echo "    <div class=\"facet-block__content\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["facet"], "content", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/contrib/facets_block/templates/facets-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  51 => 4,  49 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span style=\"color:white;margin-right: 15px;\">Filter by:</span>{% for facet in facets %}
  <div {{ facet.attributes.addClass('facet-block') }}>
    {% if show_title %}
      <p class=\"facet-block__title\">{{ facet.title }}</p>
    {% endif %}
    <div class=\"facet-block__content\">{{ facet.content }}</div>
  </div>
{% endfor %}
", "modules/contrib/facets_block/templates/facets-block.html.twig", "/var/www/html/web/modules/contrib/facets_block/templates/facets-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 3);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
