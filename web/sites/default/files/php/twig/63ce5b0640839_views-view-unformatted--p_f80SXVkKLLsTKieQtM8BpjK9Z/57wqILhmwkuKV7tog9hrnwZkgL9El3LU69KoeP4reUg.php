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

/* themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--homeplatforms.html.twig */
class __TwigTemplate_23ef2085e8f79556ed1b0418c58d5a86 extends \Twig\Template
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
        echo "<section id=\"our-platforms\" class=\"large-device-only\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\"> 
           <div class=\"wky-col-sm-12 wky-col-lg-6 bg-voilet platform-left\">
                <div class=\"hint-text\"><span class=\"yellow-square\"></span>Our Technologies</div>
                <h2 class=\"heading\"><span class=\"light\">Experience end-to-end successful acceleration of your </span>business with us!</h2>
                <div class=\"platform-logo-slider slider-for\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 33
            echo "                        <div class=\"platform-logo\">
                            <div class=\"image\">
\t\t\t\t\t\t\t     ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 35), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                            </div>
\t\t\t\t\t\t</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>
                
                <div class=\"view-all\" style=\"margin-right:23%\">
                    <a href=\"/our-platforms\" class=\"btn primary-btn right-arrow\">View All</a>
                </div>
           </div>
           <div class=\"wky-col-sm-12 wky-col-lg-6 platform-right\">
                <div class=\"platform-content-slider slider-for\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 48
            echo "                    <div class=\"platform-content\">
                        <h3 class=\"heading\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 49), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</h3>
                        
                        <p class=\"description\">";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 51), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 52), "getField", [0 => $context["key"], 1 => "view_node"], "method", false, false, true, 52), 52, $this->source))), "html", null, true);
            echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
\t\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
           </div>
        </div>
    </div>
</section>       

<section id=\"our-platforms-mobile\" class=\"small-device-only bg-voilet\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\"> 
           <div class=\"wky-col-sm-12\">
                <div class=\"hint-text\"><span class=\"yellow-square\"></span>Our Technologies</div>
                <h2 class=\"heading\"><span class=\"light\">Experience end-to-end successful acceleration of your </span>business with us!</h2>
                <div class=\"slider slider-for platform-content-wrapper\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 69
            echo "                    <div class=\"platform-content\">
                        <div class=\"platform-content-img\">";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 70), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "</div>
                        <h3 class=\"heading\">";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 71), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</h3>
                        
                        <p class=\"description\">";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 73), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 74), "getField", [0 => $context["key"], 1 => "view_node"], "method", false, false, true, 74), 74, $this->source))), "html", null, true);
            echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
\t\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </div>
                
                <div class=\"view-all\">
                    <a href=\"/our-platforms\" class=\"btn primary-btn right-arrow\">View All</a>
                </div>
           </div>
        </div>
    </div>
</section>    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--homeplatforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 77,  139 => 74,  135 => 73,  130 => 71,  126 => 70,  123 => 69,  119 => 68,  104 => 55,  95 => 52,  91 => 51,  86 => 49,  83 => 48,  79 => 47,  69 => 39,  59 => 35,  55 => 33,  51 => 32,  42 => 25,  40 => 22,  39 => 21,);
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
<section id=\"our-platforms\" class=\"large-device-only\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\"> 
           <div class=\"wky-col-sm-12 wky-col-lg-6 bg-voilet platform-left\">
                <div class=\"hint-text\"><span class=\"yellow-square\"></span>Our Technologies</div>
                <h2 class=\"heading\"><span class=\"light\">Experience end-to-end successful acceleration of your </span>business with us!</h2>
                <div class=\"platform-logo-slider slider-for\">
                    {% for key,row in rows %}
                        <div class=\"platform-logo\">
                            <div class=\"image\">
\t\t\t\t\t\t\t     {{ view.style_plugin.getField(key, 'field_image') }}
                            </div>
\t\t\t\t\t\t</div>
                    {% endfor %}
                </div>
                
                <div class=\"view-all\" style=\"margin-right:23%\">
                    <a href=\"/our-platforms\" class=\"btn primary-btn right-arrow\">View All</a>
                </div>
           </div>
           <div class=\"wky-col-sm-12 wky-col-lg-6 platform-right\">
                <div class=\"platform-content-slider slider-for\">
                {% for key,row in rows %}
                    <div class=\"platform-content\">
                        <h3 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                        
                        <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                        <a href=\"{{ view.style_plugin.getField(key, 'view_node')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
\t\t\t\t\t</div>
                {% endfor %}
                </div>
           </div>
        </div>
    </div>
</section>       

<section id=\"our-platforms-mobile\" class=\"small-device-only bg-voilet\">
    <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\"> 
           <div class=\"wky-col-sm-12\">
                <div class=\"hint-text\"><span class=\"yellow-square\"></span>Our Technologies</div>
                <h2 class=\"heading\"><span class=\"light\">Experience end-to-end successful acceleration of your </span>business with us!</h2>
                <div class=\"slider slider-for platform-content-wrapper\">
                {% for key,row in rows %}
                    <div class=\"platform-content\">
                        <div class=\"platform-content-img\">{{ view.style_plugin.getField(key, 'field_image') }}</div>
                        <h3 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                        
                        <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                        <a href=\"{{ view.style_plugin.getField(key, 'view_node')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
\t\t\t\t\t</div>
                {% endfor %}
                </div>
                
                <div class=\"view-all\">
                    <a href=\"/our-platforms\" class=\"btn primary-btn right-arrow\">View All</a>
                </div>
           </div>
        </div>
    </div>
</section>    ", "themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--homeplatforms.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--platforms-view--homeplatforms.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 32);
        static $filters = array("escape" => 35, "trim" => 52, "striptags" => 52);
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
