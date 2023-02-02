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

/* themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistingabout.html.twig */
class __TwigTemplate_604f892b643c52c07f1a69c36cd9dc6b extends \Twig\Template
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
        echo "<section id=\"our-clients\"class=\"our-client-about\" style=\"background-image: url('/sites/default/files/2022-12/Rectangle 100.png');
    background-repeat: no-repeat;background-position: center;\">
    <div class=\"wky-container\" >
        <h2 style=\"text-align:center;padding-top: 8%;\"><span class=\"yellow-square\"></span>Our Clients</h2>
        <p style=\"text-align:center\">We are committed to transforming our client’s businesses and drive their growth is our responsibility.</p>
        <div class=\"wky-row wky-wrap client-items client-items-tech\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 32
            echo "            <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-3\">
                <div class=\"client-item client-item-tech\">
                    <div class=\"client-logo\"><a target=\"_blank\" href=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 34), "getField", [0 => $context["key"], 1 => "field_website_link"], "method", false, false, true, 34), 34, $this->source))), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 34), "getField", [0 => $context["key"], 1 => "field_client_image"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</a></div>
                    <div class=\"client-content\">
                        <h4 class=\"client-name\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 36), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</h4>
                        ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 37), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
                        <a target=\"_blank\" href=\"";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "field_website_link"], "method", false, false, true, 38), 38, $this->source))), "html", null, true);
            echo "\">Read more</a>
                    </div>
                </div>
\t\t\t    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  
        </div>
    </div>
</section>       ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistingabout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  73 => 38,  69 => 37,  65 => 36,  58 => 34,  54 => 32,  50 => 31,  42 => 25,  40 => 22,  39 => 21,);
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
<section id=\"our-clients\"class=\"our-client-about\" style=\"background-image: url('/sites/default/files/2022-12/Rectangle 100.png');
    background-repeat: no-repeat;background-position: center;\">
    <div class=\"wky-container\" >
        <h2 style=\"text-align:center;padding-top: 8%;\"><span class=\"yellow-square\"></span>Our Clients</h2>
        <p style=\"text-align:center\">We are committed to transforming our client’s businesses and drive their growth is our responsibility.</p>
        <div class=\"wky-row wky-wrap client-items client-items-tech\">
            {% for key,row in rows %}
            <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-3\">
                <div class=\"client-item client-item-tech\">
                    <div class=\"client-logo\"><a target=\"_blank\" href=\"{{ view.style_plugin.getField(key, 'field_website_link') |striptags|trim }}\">{{ view.style_plugin.getField(key, 'field_client_image') }}</a></div>
                    <div class=\"client-content\">
                        <h4 class=\"client-name\">{{ view.style_plugin.getField(key, 'title') }}</h4>
                        {{ view.style_plugin.getField(key, 'body') }}
                        <a target=\"_blank\" href=\"{{ view.style_plugin.getField(key, 'field_website_link') |striptags|trim }}\">Read more</a>
                    </div>
                </div>
\t\t\t    </div>
            {% endfor %}  
        </div>
    </div>
</section>       ", "themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistingabout.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistingabout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 31);
        static $filters = array("escape" => 34, "trim" => 34, "striptags" => 34);
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
