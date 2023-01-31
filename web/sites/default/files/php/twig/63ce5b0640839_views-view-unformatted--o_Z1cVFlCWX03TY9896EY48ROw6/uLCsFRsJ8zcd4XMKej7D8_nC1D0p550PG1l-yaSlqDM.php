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

/* themes/custom/workiy/templates/views/views-view-unformatted--our-work--featuredplatform.html.twig */
class __TwigTemplate_fef6fd851b60b656f520e2762f1507a7 extends \Twig\Template
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
<section id=\"featured-work\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 30
            echo "            <div class=\"wky-col-sm-12 wky-col-lg-6\">
                <div class=\"featured-img\">
                    ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 32), "getField", [0 => $context["key"], 1 => "field_insights_image"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
                </div>
            </div>
            <div class=\"wky-col-sm-12 wky-col-lg-6\">
                <div class=\"featured-content\">
                    <h3 class=\"heading\">";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 37), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</h3>
                    <p class=\"description\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 38), "getField", [0 => $context["key"], 1 => "field_subtitle"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</p>
                    ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 39), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
                    <div class=\"logos\">
                        <div class=\"primary-logo\">
                            ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 42), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
                        </div>
                        <div class=\"secondary-logo\">
                        ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 45), "getField", [0 => $context["key"], 1 => "view"], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                    <!--<a href=\"\" class=\"btn primary-btn right-arrow\">Read more</a>-->
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--our-work--featuredplatform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  84 => 45,  78 => 42,  72 => 39,  68 => 38,  64 => 37,  56 => 32,  52 => 30,  48 => 29,  42 => 25,  40 => 22,  39 => 21,);
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

<section id=\"featured-work\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
        {% for key,row in rows %}
            <div class=\"wky-col-sm-12 wky-col-lg-6\">
                <div class=\"featured-img\">
                    {{ view.style_plugin.getField(key, 'field_insights_image') }}
                </div>
            </div>
            <div class=\"wky-col-sm-12 wky-col-lg-6\">
                <div class=\"featured-content\">
                    <h3 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                    <p class=\"description\">{{ view.style_plugin.getField(key, 'field_subtitle') }}</p>
                    {{ view.style_plugin.getField(key, 'body') }}
                    <div class=\"logos\">
                        <div class=\"primary-logo\">
                            {{ view.style_plugin.getField(key, 'field_image') }}
                        </div>
                        <div class=\"secondary-logo\">
                        {{ view.style_plugin.getField(key, 'view') }}
                        </div>
                    </div>
                    <!--<a href=\"\" class=\"btn primary-btn right-arrow\">Read more</a>-->
                </div>
            {% endfor %}
            </div>
        </div>
    </div>
</section>", "themes/custom/workiy/templates/views/views-view-unformatted--our-work--featuredplatform.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--our-work--featuredplatform.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 29);
        static $filters = array("escape" => 32);
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
