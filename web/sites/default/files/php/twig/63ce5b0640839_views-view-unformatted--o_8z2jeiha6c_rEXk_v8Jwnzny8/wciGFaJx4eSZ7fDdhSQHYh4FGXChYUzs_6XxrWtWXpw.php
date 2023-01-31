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

/* themes/custom/workiy/templates/views/views-view-unformatted--our-work--homeblog.html.twig */
class __TwigTemplate_e3309aa0f37841730a7b026c94bf9545 extends \Twig\Template
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
        echo "<section class=\"our-insight\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            <div class=\"wky-col-sm-12 wky-col-lg-12\">
                <h2 class=\"heading\">What's new</h2>
                <h4 class=\"heading light\">Our Insight</h4>
                <div class=\"insight-wrapper\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 33
            echo "                
                    <div class=\"insight-item wky-col-sm-12 wky-col-lg-4\">
                        <div class=\"insight-image\">
                            ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 36), "getField", [0 => $context["key"], 1 => "field_insights_image"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
                        <div class=\"insight-content\">
                            <div class=\"date-tags\">
                                <div class=\"date\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 40), "getField", [0 => $context["key"], 1 => "created"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</div>
                                <div class=\"vertical-line\"></div>
                                <div class=\"tags\">
                                    ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 43), "getField", [0 => $context["key"], 1 => "field_platform"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
                                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"heading light\"><a href=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 46), "getField", [0 => $context["key"], 1 => "view_node"], "method", false, false, true, 46), 46, $this->source))), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 46), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t<div class=\"author\">By ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 47), "getField", [0 => $context["key"], 1 => "uid"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "<span class=\"vertical-line\"></span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 47), "getField", [0 => $context["key"], 1 => "field_platform"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</div>
                        </div>
                    </div>
               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--our-work--homeblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 52,  85 => 47,  79 => 46,  73 => 43,  67 => 40,  60 => 36,  55 => 33,  51 => 32,  42 => 25,  40 => 22,  39 => 21,);
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
<section class=\"our-insight\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
            <div class=\"wky-col-sm-12 wky-col-lg-12\">
                <h2 class=\"heading\">What's new</h2>
                <h4 class=\"heading light\">Our Insight</h4>
                <div class=\"insight-wrapper\">
                {% for key,row in rows %}
                
                    <div class=\"insight-item wky-col-sm-12 wky-col-lg-4\">
                        <div class=\"insight-image\">
                            {{ view.style_plugin.getField(key, 'field_insights_image') }}
\t\t\t\t\t\t</div>
                        <div class=\"insight-content\">
                            <div class=\"date-tags\">
                                <div class=\"date\">{{ view.style_plugin.getField(key, 'created') }}</div>
                                <div class=\"vertical-line\"></div>
                                <div class=\"tags\">
                                    {{ view.style_plugin.getField(key, 'field_platform') }}
                                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"heading light\"><a href=\"{{ view.style_plugin.getField(key, 'view_node')|striptags|trim }}\">{{ view.style_plugin.getField(key, 'title') }}</a></h4>
\t\t\t\t\t\t\t<div class=\"author\">By {{ view.style_plugin.getField(key, 'uid') }}<span class=\"vertical-line\"></span>{{ view.style_plugin.getField(key, 'field_platform') }}</div>
                        </div>
                    </div>
               
                {% endfor %}
                </div>
            </div>
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--our-work--homeblog.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--our-work--homeblog.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 32);
        static $filters = array("escape" => 36, "trim" => 46, "striptags" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
