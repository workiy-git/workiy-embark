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

/* themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--featuredinsightssub.html.twig */
class __TwigTemplate_7e1053ddb71d16029ca032853fe09144 extends \Twig\Template
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
        echo "<section class=\"insight-featured\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            <div class=\"wky-col-sm-12 wky-col-lg-12\">
                <h2 class=\"heading\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "getTitle", [], "method", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</h2>
            </div>
        </div>
        <div class=\"wky-row wky-wrap\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 34
            echo "            <div class=\"wky-col-sm-12 wky-col-lg-6\">
                ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 35)) {
                // line 36
                echo "                    <div class=\"featured left\">
                        <div class=\"left-content\">
                            <h3 class=\"heading medium\">";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</h3>
                            <p class=\"description\">";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 39), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 40), "getField", [0 => $context["key"], 1 => "url"], "method", false, false, true, 40), 40, $this->source))), "html", null, true);
                echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        <div class=\"left-img\">
                            ";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 43), "getField", [0 => $context["key"], 1 => "field_featured_image"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 47
            echo "                ";
            if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 47) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 47) % 2) == 0))) {
                // line 48
                echo "                    <div class=\"featured right reverse\">
\t\t\t\t\t\t<div class=\"right-content\">
                            <h3 class=\"heading medium\">";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 50), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "</h3>
                            <p class=\"description\">";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 51), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 52), "getField", [0 => $context["key"], 1 => "url"], "method", false, false, true, 52), 52, $this->source))), "html", null, true);
                echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        <div class=\"right-img\">
                            ";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 55), "getField", [0 => $context["key"], 1 => "field_featured_image"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 58
$context["loop"], "first", [], "any", false, false, true, 58) && ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 58) % 2) != 0))) {
                // line 59
                echo "                    <div class=\"featured left\">
                        <div class=\"left-content\">
                            <h3 class=\"heading medium\">";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 61), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</h3>
                            <p class=\"description\">";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 62), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 63), "getField", [0 => $context["key"], 1 => "url"], "method", false, false, true, 63), 63, $this->source))), "html", null, true);
                echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        <div class=\"left-img\">
                            ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 66), "getField", [0 => $context["key"], 1 => "field_featured_image"], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 70
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--featuredinsightssub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 72,  156 => 70,  149 => 66,  143 => 63,  139 => 62,  135 => 61,  131 => 59,  129 => 58,  123 => 55,  117 => 52,  113 => 51,  109 => 50,  105 => 48,  102 => 47,  95 => 43,  89 => 40,  85 => 39,  81 => 38,  77 => 36,  75 => 35,  72 => 34,  55 => 33,  48 => 29,  42 => 25,  40 => 22,  39 => 21,);
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
<section class=\"insight-featured\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            <div class=\"wky-col-sm-12 wky-col-lg-12\">
                <h2 class=\"heading\">{{ view.getTitle() }}</h2>
            </div>
        </div>
        <div class=\"wky-row wky-wrap\">
        {% for key,row in rows %}
            <div class=\"wky-col-sm-12 wky-col-lg-6\">
                {% if loop.first %}
                    <div class=\"featured left\">
                        <div class=\"left-content\">
                            <h3 class=\"heading medium\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                            <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                            <a href=\"{{ view.style_plugin.getField(key, 'url')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        <div class=\"left-img\">
                            {{ view.style_plugin.getField(key, 'field_featured_image') }}
                        </div>
                    </div>
                {% endif %}
                {% if not loop.first and loop.index % 2 == 0 %}
                    <div class=\"featured right reverse\">
\t\t\t\t\t\t<div class=\"right-content\">
                            <h3 class=\"heading medium\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                            <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                            <a href=\"{{ view.style_plugin.getField(key, 'url')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        <div class=\"right-img\">
                            {{ view.style_plugin.getField(key, 'field_featured_image') }}
                        </div>
                    </div>
                {% elseif not loop.first and loop.index % 2 != 0 %}
                    <div class=\"featured left\">
                        <div class=\"left-content\">
                            <h3 class=\"heading medium\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                            <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                            <a href=\"{{ view.style_plugin.getField(key, 'url')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        <div class=\"left-img\">
                            {{ view.style_plugin.getField(key, 'field_featured_image') }}
                        </div>
                    </div>
                {% endif %}
            </div>
        {% endfor %}
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--featuredinsightssub.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--featuredinsightssub.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 33, "if" => 35);
        static $filters = array("escape" => 29, "trim" => 40, "striptags" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'trim', 'striptags'],
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
