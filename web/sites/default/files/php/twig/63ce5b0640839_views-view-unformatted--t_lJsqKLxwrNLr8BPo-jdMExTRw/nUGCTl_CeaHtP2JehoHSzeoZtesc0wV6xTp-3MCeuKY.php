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

/* themes/custom/workiy/templates/views/views-view-unformatted--testimonials--testimonials.html.twig */
class __TwigTemplate_ac7c235a03b165d1ff07f2ecc08e8300 extends \Twig\Template
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
        echo "<section class=\"testimonial\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
        \t<div class=\"wky-col-sm-12 wky-offset-col-6 wky-col-lg-6\">
        \t\t<h2 class=\"heading\">Testimonials</h2>
        \t</div>
            <div class=\"wky-col-sm-12 wky-col-lg-12\">
                <div class=\"testimonial-wrapper\">
                    <div class=\"testimonial-item wky-row\">
\t\t\t\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-6\">
\t\t\t\t\t\t\t<div class=\"testimonial-img-wrapper slider slider-for\">
\t\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t\t\t";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "field_testmonial_image"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t<div class=\"testimonial-quotes\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"testimonial-dots slider slider-nav\">
\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t<div class=\"slider-dots\"></div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-6\">
\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-quotes\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"middle-content-wrapper slider slider-for\">
\t\t\t\t\t\t\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"middle-content\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 59), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"description\">";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 60), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content-wrapper slider slider-for\">
\t\t\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading\">";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 67), "getField", [0 => $context["key"], 1 => "field_name"], "method", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"description\">";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 68), "getField", [0 => $context["key"], 1 => "field_designation"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--testimonials--testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 71,  134 => 68,  130 => 67,  127 => 66,  123 => 65,  119 => 63,  110 => 60,  106 => 59,  103 => 58,  99 => 57,  89 => 49,  82 => 47,  78 => 46,  71 => 41,  62 => 38,  59 => 37,  55 => 36,  42 => 25,  40 => 22,  39 => 21,);
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
<section class=\"testimonial\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
        \t<div class=\"wky-col-sm-12 wky-offset-col-6 wky-col-lg-6\">
        \t\t<h2 class=\"heading\">Testimonials</h2>
        \t</div>
            <div class=\"wky-col-sm-12 wky-col-lg-12\">
                <div class=\"testimonial-wrapper\">
                    <div class=\"testimonial-item wky-row\">
\t\t\t\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-6\">
\t\t\t\t\t\t\t<div class=\"testimonial-img-wrapper slider slider-for\">
\t\t\t\t\t\t\t\t{% for key,row in rows %}
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t\t\t{{ view.style_plugin.getField(key, 'field_testmonial_image') }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t<div class=\"testimonial-quotes\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"testimonial-dots slider slider-nav\">
\t\t\t\t\t\t\t\t{% for key,row in rows %}
\t\t\t\t\t\t\t\t\t<div class=\"slider-dots\"></div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-6\">
\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t<div class=\"top-content\">
\t\t\t\t\t\t\t\t\t<div class=\"testimonial-quotes\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"middle-content-wrapper slider slider-for\">
\t\t\t\t\t\t\t\t\t{% for key,row in rows %}
\t\t\t\t\t\t\t\t\t\t<div class=\"middle-content\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"bottom-content-wrapper slider slider-for\">
\t\t\t\t\t\t\t\t\t{% for key,row in rows %}
\t\t\t\t\t\t\t\t\t\t<div class=\"bottom-content\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"heading\">{{ view.style_plugin.getField(key, 'field_name') }}</h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"description\">{{ view.style_plugin.getField(key, 'field_designation') }}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
            </div>
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--testimonials--testimonials.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--testimonials--testimonials.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 36);
        static $filters = array("escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
