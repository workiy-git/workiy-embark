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

/* themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--platformlist.html.twig */
class __TwigTemplate_fd2ffc92626c766806ff4e861610eb61 extends \Twig\Template
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
        echo "<section class=\"platform\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
        </div>
        <div class=\"wky-row wky-wrap\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 31
            echo "                <div class=\"wky-col-sm-12 wky-col-lg-4\">
                    <div class=\"platform-listing-img\">
                        ";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 33), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
                    </div>
                    <div class=\"platform-listing-content\">
                        <div class=\"left-color-bar\" style=\"background-color:";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 36), "getField", [0 => $context["key"], 1 => "field_color_"], "method", false, false, true, 36), 36, $this->source))), "html", null, true);
            echo "\"></div>
                        <div class=\"right-content\">
                            <h4 class=\"heading medium\"><span class=\"header-color-bar\" style=\"background-color:";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "field_color_"], "method", false, false, true, 38), 38, $this->source))), "html", null, true);
            echo "\"></span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</h4>
                            <p class=\"description\">";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 39), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 39), 39, $this->source))), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 40), "getField", [0 => $context["key"], 1 => "view_node"], "method", false, false, true, 40), 40, $this->source))), "html", null, true);
            echo "\" class=\"link right-arrow blue\">Read More</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--platformlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  78 => 40,  74 => 39,  68 => 38,  63 => 36,  57 => 33,  53 => 31,  49 => 30,  42 => 25,  40 => 22,  39 => 21,);
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
<section class=\"platform\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
        </div>
        <div class=\"wky-row wky-wrap\">
            {% for key,row in rows %}
                <div class=\"wky-col-sm-12 wky-col-lg-4\">
                    <div class=\"platform-listing-img\">
                        {{ view.style_plugin.getField(key, 'field_image') }}
                    </div>
                    <div class=\"platform-listing-content\">
                        <div class=\"left-color-bar\" style=\"background-color:{{ view.style_plugin.getField(key, 'field_color_')|striptags|trim }}\"></div>
                        <div class=\"right-content\">
                            <h4 class=\"heading medium\"><span class=\"header-color-bar\" style=\"background-color:{{ view.style_plugin.getField(key, 'field_color_')|striptags|trim }}\"></span>{{ view.style_plugin.getField(key, 'title') }}</h4>
                            <p class=\"description\">{{ view.style_plugin.getField(key, 'body')|striptags|trim }}</p>
                            <a href=\"{{ view.style_plugin.getField(key, 'view_node')|striptags|trim }}\" class=\"link right-arrow blue\">Read More</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--platformlist.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--platformlist.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 30);
        static $filters = array("escape" => 33, "trim" => 36, "striptags" => 36);
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
