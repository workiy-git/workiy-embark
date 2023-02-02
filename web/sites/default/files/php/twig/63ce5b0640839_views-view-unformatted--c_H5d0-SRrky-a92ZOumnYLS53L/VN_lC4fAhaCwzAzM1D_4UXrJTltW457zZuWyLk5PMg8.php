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

/* themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistinghome.html.twig */
class __TwigTemplate_a026376b33ad3dd8dcdb4e524a1cb260 extends \Twig\Template
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
        echo "<section id=\"our-clients\">
    <div class=\"wky-container\">
        
        <h2 class=\"heading\"><span class=\"light\">We are committed to transforming our client’s businesses & drive their growth</span> is our responsibility.</h2>
        <div class=\"wky-row wky-wrap client-items\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 31
            echo "            <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-3\">
                <div class=\"client-item\">
                    <div class=\"client-logo\"><a target=\"_blank\" href=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 33), "getField", [0 => $context["key"], 1 => "field_website_link"], "method", false, false, true, 33), 33, $this->source))), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 33), "getField", [0 => $context["key"], 1 => "field_client_image"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</a></div>
                    <div class=\"client-content\">
                        <h4 class=\"client-name\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 35), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</h4>
                        ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 36), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                        <a target=\"_blank\" href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 37), "getField", [0 => $context["key"], 1 => "field_website_link"], "method", false, false, true, 37), 37, $this->source))), "html", null, true);
            echo "\">Read more</a>
                    </div>
                </div>
\t\t\t    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "  
        </div>
    </div>
</section>       ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistinghome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  72 => 37,  68 => 36,  64 => 35,  57 => 33,  53 => 31,  49 => 30,  42 => 25,  40 => 22,  39 => 21,);
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
<section id=\"our-clients\">
    <div class=\"wky-container\">
        
        <h2 class=\"heading\"><span class=\"light\">We are committed to transforming our client’s businesses & drive their growth</span> is our responsibility.</h2>
        <div class=\"wky-row wky-wrap client-items\">
            {% for key,row in rows %}
            <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-3\">
                <div class=\"client-item\">
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
</section>       ", "themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistinghome.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--clients--clientlistinghome.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 30);
        static $filters = array("escape" => 33, "trim" => 33, "striptags" => 33);
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
