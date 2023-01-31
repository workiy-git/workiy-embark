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

/* themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--platforminsightsblog.html.twig */
class __TwigTemplate_3e804eac50e9f72e4a66774644a661af extends \Twig\Template
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
        echo "<section class=\"insights-listing\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 29
            echo "                <div class=\"wky-col-sm-12 wky-col-lg-4\">
                    <div class=\"insight-image\">
                        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 31), "getField", [0 => $context["key"], 1 => "field_insights_image"], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"insight-content\">
                        <div class=\"date-tags\">
                            <div class=\"date\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 35), "getField", [0 => $context["key"], 1 => "created"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</div>
                            <div class=\"vertical-line\"></div>
                            <div class=\"tags\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "title_1"], "method", false, false, true, 38))), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 39
                echo "                                <span class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["platform"], 39, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["platform"], 39, $this->source), "html", null, true);
                echo "</span> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                            </div>
                        </div>

                        <h4 class=\"heading light\"><a href=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 44), "getField", [0 => $context["key"], 1 => "url"], "method", false, false, true, 44), 44, $this->source))), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 44), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</a></h4>
                        <div class=\"author\">By ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 45), "getField", [0 => $context["key"], 1 => "uid"], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "<span class=\"vertical-line\"></span>
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 46), "getField", [0 => $context["key"], 1 => "title_1"], "method", false, false, true, 46))), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 47
                echo "                                <span class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["platform"], 47, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["platform"], 47, $this->source), "html", null, true);
                echo "</span> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--platforminsightsblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  113 => 49,  102 => 47,  98 => 46,  94 => 45,  88 => 44,  83 => 41,  72 => 39,  68 => 38,  62 => 35,  55 => 31,  51 => 29,  47 => 28,  42 => 25,  40 => 22,  39 => 21,);
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
<section class=\"insights-listing\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            {% for key,row in rows %}
                <div class=\"wky-col-sm-12 wky-col-lg-4\">
                    <div class=\"insight-image\">
                        {{ view.style_plugin.getField(key, 'field_insights_image') }}
                    </div>
                    <div class=\"insight-content\">
                        <div class=\"date-tags\">
                            <div class=\"date\">{{ view.style_plugin.getField(key, 'created') }}</div>
                            <div class=\"vertical-line\"></div>
                            <div class=\"tags\">
                            {% for platform in view.style_plugin.getField(key, 'title_1')|striptags|trim|split(',') %}
                                <span class=\"{{platform}}\">{{platform}}</span> 
                            {% endfor %}
                            </div>
                        </div>

                        <h4 class=\"heading light\"><a href=\"{{ view.style_plugin.getField(key, 'url')|striptags|trim }}\">{{ view.style_plugin.getField(key, 'title') }}</a></h4>
                        <div class=\"author\">By {{ view.style_plugin.getField(key, 'uid') }}<span class=\"vertical-line\"></span>
                            {% for platform in view.style_plugin.getField(key, 'title_1')|striptags|trim|split(',') %}
                                <span class=\"{{platform}}\">{{platform}}</span> 
                            {% endfor %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--platforminsightsblog.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--insights-listing--platforminsightsblog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 28);
        static $filters = array("escape" => 31, "split" => 38, "trim" => 38, "striptags" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'split', 'trim', 'striptags'],
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
