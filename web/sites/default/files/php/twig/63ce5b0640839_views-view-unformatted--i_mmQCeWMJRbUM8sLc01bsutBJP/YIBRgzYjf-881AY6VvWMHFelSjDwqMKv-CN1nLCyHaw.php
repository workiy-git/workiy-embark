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

/* themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--case_studiesservice.html.twig */
class __TwigTemplate_c70bae1d76700f200b92c71b4c60113a extends \Twig\Template
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
        // line 21
        $context["row_classes"] = [0 => ((        // line 22
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
        // line 25
        echo "<section class=\"insights-casestudies\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 29
            echo "                <div class=\"wky-col-sm-12 wky-col-lg-4 insight-inner-wrapper\">
                    <div class=\"insights-casestudies-img\">
                        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 31), "getField", [0 => $context["key"], 1 => "field_insights_image"], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"insights-casestudies-content\">
                        <h4 class=\"heading light\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 34), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</h4>
                        <p class=\"description\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 35), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</p>
                        <div class=\"listing-link-img\">
                            <a href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 37), "getField", [0 => $context["key"], 1 => "url"], "method", false, false, true, 37), 37, $this->source))), "html", null, true);
            echo "\" class=\"link right-arrow blue\">Read More</a>
                            <span class=\"primary-paltform-image\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</span>
                        </div>
                        <span style=\"display:none\" class=\"viewallname\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 40), "getField", [0 => $context["key"], 1 => "name"], "method", false, false, true, 40), 40, $this->source))), [" " => "-"]), "html", null, true);
            echo "</span>
                </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--case_studiesservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 44,  79 => 40,  74 => 38,  70 => 37,  65 => 35,  61 => 34,  55 => 31,  51 => 29,  47 => 28,  42 => 25,  40 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{%
  set row_classes = [
    default_row_class ? 'views-row',
  ]
%}
<section class=\"insights-casestudies\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            {% for key,row in rows %}
                <div class=\"wky-col-sm-12 wky-col-lg-4 insight-inner-wrapper\">
                    <div class=\"insights-casestudies-img\">
                        {{ view.style_plugin.getField(key, 'field_insights_image') }}
                    </div>
                    <div class=\"insights-casestudies-content\">
                        <h4 class=\"heading light\">{{ view.style_plugin.getField(key, 'title') }}</h4>
                        <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                        <div class=\"listing-link-img\">
                            <a href=\"{{ view.style_plugin.getField(key, 'url')|striptags|trim }}\" class=\"link right-arrow blue\">Read More</a>
                            <span class=\"primary-paltform-image\">{{ view.style_plugin.getField(key, 'field_image') }}</span>
                        </div>
                        <span style=\"display:none\" class=\"viewallname\">{{ view.style_plugin.getField(key, 'name')|striptags|lower|replace({' ': \"-\" }) }}</span>
                </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--case_studiesservice.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--case_studiesservice.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 28);
        static $filters = array("escape" => 31, "trim" => 37, "striptags" => 37, "replace" => 40, "lower" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'trim', 'striptags', 'replace', 'lower'],
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
