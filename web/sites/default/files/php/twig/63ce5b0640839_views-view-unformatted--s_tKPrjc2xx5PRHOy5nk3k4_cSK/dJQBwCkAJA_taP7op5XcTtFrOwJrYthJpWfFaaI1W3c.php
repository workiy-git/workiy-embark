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

/* themes/custom/workiy/templates/views/views-view-unformatted--services--homeservices.html.twig */
class __TwigTemplate_7a149176ca990fd79781c2fb82c2e3cd extends \Twig\Template
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
        echo "
<section id=\"our-services\">
    <div class=\"wky-container\">
        <!--<div class=\"wky-row wky-wrap\">
            <div class=\"wky-col-sm-12 wky-col-lg-12 text-center\">-->
                <div class=\"hint-text\"><span class=\"yellow-square\"></span>Our Services</div>
                <h2 class=\"heading\">Our services offer pivotal growth and active results, molding your businesses, <span class=\"light\">with promising opportunities and rich tech-experience.</span></h2>
            <!--</div>
        </div>-->
        <div class=\"wky-row wky-wrap service-item-wrapper\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 36
            echo "            <div class=\"wky-col-sm-12 wky-col-lg-6 service-item\">
                <div class=\"service-img\">
                    ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
                </div>
                <div class=\"service-content\">
                    <div class=\"yellow-square-border\"></div>
                    <h4 class=\"heading\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 42), "getField", [0 => $context["key"], 1 => "name"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</h4>
                    <div class=\"description\">";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 43), "getField", [0 => $context["key"], 1 => "description__value"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</div>
                    <a href=\"";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 44), "getField", [0 => $context["key"], 1 => "view_taxonomy_term"], "method", false, false, true, 44), 44, $this->source))), "html", null, true);
            echo "\" class=\"link right-arrow white\">Read more</a>
                </div>
\t\t\t</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--services--homeservices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 48,  77 => 44,  73 => 43,  69 => 42,  62 => 38,  58 => 36,  54 => 35,  42 => 25,  40 => 22,  39 => 21,);
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

<section id=\"our-services\">
    <div class=\"wky-container\">
        <!--<div class=\"wky-row wky-wrap\">
            <div class=\"wky-col-sm-12 wky-col-lg-12 text-center\">-->
                <div class=\"hint-text\"><span class=\"yellow-square\"></span>Our Services</div>
                <h2 class=\"heading\">Our services offer pivotal growth and active results, molding your businesses, <span class=\"light\">with promising opportunities and rich tech-experience.</span></h2>
            <!--</div>
        </div>-->
        <div class=\"wky-row wky-wrap service-item-wrapper\">
            {% for key,row in rows %}
            <div class=\"wky-col-sm-12 wky-col-lg-6 service-item\">
                <div class=\"service-img\">
                    {{ view.style_plugin.getField(key, 'field_image') }}
                </div>
                <div class=\"service-content\">
                    <div class=\"yellow-square-border\"></div>
                    <h4 class=\"heading\">{{ view.style_plugin.getField(key, 'name') }}</h4>
                    <div class=\"description\">{{ view.style_plugin.getField(key, 'description__value') }}</div>
                    <a href=\"{{ view.style_plugin.getField(key, 'view_taxonomy_term')|striptags|trim }}\" class=\"link right-arrow white\">Read more</a>
                </div>
\t\t\t</div>
            {% endfor %}
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--services--homeservices.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--services--homeservices.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 35);
        static $filters = array("escape" => 38, "trim" => 44, "striptags" => 44);
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
