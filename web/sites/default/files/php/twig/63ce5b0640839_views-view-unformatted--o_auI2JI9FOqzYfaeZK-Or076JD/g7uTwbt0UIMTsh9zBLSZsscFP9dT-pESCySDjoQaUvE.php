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

/* themes/custom/workiy/templates/views/views-view-unformatted--our-work--casestudy.html.twig */
class __TwigTemplate_45e2c329a2e9f55537e6bfc89a5abe09 extends \Twig\Template
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
        // line 1
        echo "
";
        // line 22
        $context["row_classes"] = [0 => ((        // line 23
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
        // line 26
        echo "<section id=\"our-work\" class=\"large-device-only\">
    <div class=\"half-circle\"></div>
    <div class=\"wky-container\">
        <div class=\"wky-row\">
            <div class=\"wky-col-12\">
                <div class=\"work-scrolling\">
                    <div class=\"wky-row\">
                        <div class=\"wky-col-sm-12 wky-col-lg-6\">
                            <div class=\"work-left\">
                                <div class=\"sticky-display\">
                                    <div class=\"hint-text\"><span class=\"yellow-square\"></span>Showing our Works</div>
                                    <h2 class=\"heading\">Our Works<span class=\"light\"> Include.</span></h2>
                                    <div class=\"client-logo-wrapper\">
                                        <ul>
                                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 41
            echo "                                                ";
            if (($context["key"] == 0)) {
                // line 42
                echo "                                                    <li>
                                                ";
            } else {
                // line 44
                echo "                                                    <li>
                                                ";
            }
            // line 46
            echo "                                                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 46), "getField", [0 => $context["key"], 1 => "field_client_image"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
                                                </li>
                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                        </ul>
                                    </div>
                                    <div class=\"platform-logo-wrapper\">
                                        <ul>
                                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 54
            echo "                                                ";
            if (($context["key"] == 0)) {
                // line 55
                echo "                                                    <li>
                                                ";
            } else {
                // line 57
                echo "                                                    <li>
                                                ";
            }
            // line 59
            echo "                                                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 59), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
                                                    </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                        </ul>
                                    </div>
                                   
                                </div>
<div id=\"our-foot\"><a href=\"our-work\" class=\"view-all our-work-view-all\">View all works</a></div>
                            </div>
                            
                        </div>
                        <div class=\"wky-col-sm-12 wky-col-lg-6\">
                            <div class=\"work-right\">
                                <div class=\"work-item-wrapper\">
                                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 74
            echo "                                       ";
            if (($context["key"] == 0)) {
                // line 75
                echo "                                        <div id=\"work-n\" class=\"work-item one item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 75, $this->source), "html", null, true);
                echo "\">
                                        ";
            } elseif ((            // line 76
$context["key"] == 1)) {
                // line 77
                echo "                                        <div class=\"work-item two item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 77, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 78
$context["key"] == 2)) {
                // line 79
                echo "                                        <div class=\"work-item three item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 79, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 80
$context["key"] == 3)) {
                // line 81
                echo "                                        <div class=\"work-item four item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 81, $this->source), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 83
                echo "                                        <div id=\"fif\" class=\"work-item five item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 83, $this->source), "html", null, true);
                echo "\">
                                        ";
            }
            // line 85
            echo "                                            <h3 class=\"heading\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 85), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "</h3>
                                            ";
            // line 87
            echo "                                            <p class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 87), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "</p>
                                            ";
            // line 89
            echo "                                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 89), "getField", [0 => $context["key"], 1 => "view_node"], "method", false, false, true, 89), 89, $this->source))), "html", null, true);
            echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
                                        </div>
                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                 </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>



<section id=\"our-work-mobile\" class=\"small-device-only\">
    <div class=\"half-circle\"></div>
    <div class=\"wky-container\">
        <div class=\"wky-row\">
            <div class=\"wky-col-12\">
            <div class=\"hint-text\"><span class=\"yellow-square\"></span>Showing our Works</div>
            <h2 class=\"heading\">Our Works<span class=\"light\"> Include.</span></h2>
              <div class=\"work-item-wrapper\">
                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 115
            echo "                        ";
            if (($context["key"] == 0)) {
                // line 116
                echo "                        <div class=\"work-item one item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 116, $this->source), "html", null, true);
                echo "\">
                        ";
            } elseif ((            // line 117
$context["key"] == 1)) {
                // line 118
                echo "                        <div class=\"work-item two item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 118, $this->source), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 120
                echo "                        <div class=\"work-item three item-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 120, $this->source), "html", null, true);
                echo "\">
                        ";
            }
            // line 122
            echo "                            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 122), "getField", [0 => $context["key"], 1 => "field_client_image"], "method", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "
                            <h3 class=\"heading\">";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 123), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "</h3>
                            ";
            // line 125
            echo "                            <p class=\"description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 125), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "</p>
                            ";
            // line 127
            echo "                            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 127), "getField", [0 => $context["key"], 1 => "view_node"], "method", false, false, true, 127), 127, $this->source))), "html", null, true);
            echo "\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </div>
                <ul class=\"platform-logo-wrapper\">
                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 133
            echo "                        ";
            if (($context["key"] == 0)) {
                // line 134
                echo "                            <li>
                        ";
            } else {
                // line 136
                echo "                            <li>
                        ";
            }
            // line 138
            echo "                            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 138), "getField", [0 => $context["key"], 1 => "field_image"], "method", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
                            </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                </ul>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--our-work--casestudy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 141,  283 => 138,  279 => 136,  275 => 134,  272 => 133,  268 => 132,  264 => 130,  254 => 127,  249 => 125,  245 => 123,  240 => 122,  234 => 120,  228 => 118,  226 => 117,  221 => 116,  218 => 115,  214 => 114,  190 => 92,  180 => 89,  175 => 87,  170 => 85,  164 => 83,  158 => 81,  156 => 80,  151 => 79,  149 => 78,  144 => 77,  142 => 76,  137 => 75,  134 => 74,  130 => 73,  117 => 62,  107 => 59,  103 => 57,  99 => 55,  96 => 54,  92 => 53,  86 => 49,  76 => 46,  72 => 44,  68 => 42,  65 => 41,  61 => 40,  45 => 26,  43 => 23,  42 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{#
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
<section id=\"our-work\" class=\"large-device-only\">
    <div class=\"half-circle\"></div>
    <div class=\"wky-container\">
        <div class=\"wky-row\">
            <div class=\"wky-col-12\">
                <div class=\"work-scrolling\">
                    <div class=\"wky-row\">
                        <div class=\"wky-col-sm-12 wky-col-lg-6\">
                            <div class=\"work-left\">
                                <div class=\"sticky-display\">
                                    <div class=\"hint-text\"><span class=\"yellow-square\"></span>Showing our Works</div>
                                    <h2 class=\"heading\">Our Works<span class=\"light\"> Include.</span></h2>
                                    <div class=\"client-logo-wrapper\">
                                        <ul>
                                            {% for key,row in rows %}
                                                {% if key == 0 %}
                                                    <li>
                                                {% else %}
                                                    <li>
                                                {% endif %}
                                                    {{ view.style_plugin.getField(key, 'field_client_image') }}
                                                </li>
                                             {% endfor %}
                                        </ul>
                                    </div>
                                    <div class=\"platform-logo-wrapper\">
                                        <ul>
                                            {% for key,row in rows %}
                                                {% if key == 0 %}
                                                    <li>
                                                {% else %}
                                                    <li>
                                                {% endif %}
                                                    {{ view.style_plugin.getField(key, 'field_image') }}
                                                    </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                   
                                </div>
<div id=\"our-foot\"><a href=\"our-work\" class=\"view-all our-work-view-all\">View all works</a></div>
                            </div>
                            
                        </div>
                        <div class=\"wky-col-sm-12 wky-col-lg-6\">
                            <div class=\"work-right\">
                                <div class=\"work-item-wrapper\">
                                    {% for key,row in rows %}
                                       {% if key == 0 %}
                                        <div id=\"work-n\" class=\"work-item one item-{{ key }}\">
                                        {% elseif key == 1 %}
                                        <div class=\"work-item two item-{{ key }}\">
\t\t\t\t\t\t\t\t\t\t{% elseif key == 2 %}
                                        <div class=\"work-item three item-{{ key }}\">
\t\t\t\t\t\t\t\t\t\t{% elseif key == 3 %}
                                        <div class=\"work-item four item-{{ key }}\">
                                        {% else %}
                                        <div id=\"fif\" class=\"work-item five item-{{ key }}\">
                                        {% endif %}
                                            <h3 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                                            {# <h3 class=\"heading light\">{{ view.style_plugin.getField(key, 'field_subtitle') }}</h3> #}
                                            <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                                            {# <p class=\"url\"><a href=\"{{ view.style_plugin.getField(key, 'field_website_link') }}\">{{ view.style_plugin.getField(key, 'field_website_link') }}</a></p>    #}
                                            <a href=\"{{ view.style_plugin.getField(key, 'view_node')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
                                        </div>
                                     {% endfor %}
                                 </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</section>



<section id=\"our-work-mobile\" class=\"small-device-only\">
    <div class=\"half-circle\"></div>
    <div class=\"wky-container\">
        <div class=\"wky-row\">
            <div class=\"wky-col-12\">
            <div class=\"hint-text\"><span class=\"yellow-square\"></span>Showing our Works</div>
            <h2 class=\"heading\">Our Works<span class=\"light\"> Include.</span></h2>
              <div class=\"work-item-wrapper\">
                    {% for key,row in rows %}
                        {% if key == 0 %}
                        <div class=\"work-item one item-{{ key }}\">
                        {% elseif key == 1 %}
                        <div class=\"work-item two item-{{ key }}\">
                        {% else %}
                        <div class=\"work-item three item-{{ key }}\">
                        {% endif %}
                            {{ view.style_plugin.getField(key, 'field_client_image') }}
                            <h3 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h3>
                            {# <h3 class=\"heading light\">{{ view.style_plugin.getField(key, 'field_subtitle') }}</h3> #}
                            <p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p>
                            {# <p class=\"url\"><a href=\"{{ view.style_plugin.getField(key, 'field_website_link') }}\">{{ view.style_plugin.getField(key, 'field_website_link') }}</a></p>    #}
                            <a href=\"{{ view.style_plugin.getField(key, 'view_node')|striptags|trim }}\" class=\"btn primary-btn right-arrow\">Read more</a>
                        </div>
                        {% endfor %}
                </div>
                <ul class=\"platform-logo-wrapper\">
                    {% for key,row in rows %}
                        {% if key == 0 %}
                            <li>
                        {% else %}
                            <li>
                        {% endif %}
                            {{ view.style_plugin.getField(key, 'field_image') }}
                            </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</section>
", "themes/custom/workiy/templates/views/views-view-unformatted--our-work--casestudy.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--our-work--casestudy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "for" => 40, "if" => 41);
        static $filters = array("escape" => 46, "trim" => 89, "striptags" => 89);
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
