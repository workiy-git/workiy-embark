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

/* themes/custom/workiy/templates/views/views-view-unformatted--teams--hometeams.html.twig */
class __TwigTemplate_75013a578b46b18dbc848028bcfda7bf extends \Twig\Template
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
        echo "<section class=\"our-team\">
\t<div class=\"wky-container\">
\t\t<div class=\"wky-row wky-wrap\">
\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-4\">
                <div class=\"team-content\">
                    <!--<div class=\"hint-text\"><span class=\"yellow-square\"></span>Build with us</div>-->
                    <h2 class=\"heading\"><span class=\"light\">Our </span>Team</h2>
                    <!--<p class=\"description\">Every organization builds a promising client line through their dedicated services. Likewise, Workiy’s Services enable our clients to deliver their commitments even better! But who are the people behind these deliverables? What is this team that fulfils these promises?</p>
                    <p>Meet the team, who build your dream!</p>-->                    
                </div>
            </div>
        </div>
    </div>    
    <div class=\"team-profile-wrapper\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 40
            echo "            <div class=\"team-profile\">
                <div class=\"team-wrapper\">
                    <div class=\"team-description\">
                                        
                    </div>
                    <div class=\"team-img\" style=\"height:100%;width:100%;\">
 <h3 class=\"heading\">";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 46), "getField", [0 => $context["key"], 1 => "title"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</h3>
<p class=\"description\">";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 47), "getField", [0 => $context["key"], 1 => "body"], "method", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</p> 
                        ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "style_plugin", [], "any", false, false, true, 48), "getField", [0 => $context["key"], 1 => "field_team_image"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "

                        
                    </div>
                </div>
            </div>
                        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        
    </div> 
</section>       ";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/views/views-view-unformatted--teams--hometeams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 55,  78 => 48,  74 => 47,  70 => 46,  62 => 40,  58 => 39,  42 => 25,  40 => 22,  39 => 21,);
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
<section class=\"our-team\">
\t<div class=\"wky-container\">
\t\t<div class=\"wky-row wky-wrap\">
\t\t\t<div class=\"wky-col-sm-12 wky-col-lg-4\">
                <div class=\"team-content\">
                    <!--<div class=\"hint-text\"><span class=\"yellow-square\"></span>Build with us</div>-->
                    <h2 class=\"heading\"><span class=\"light\">Our </span>Team</h2>
                    <!--<p class=\"description\">Every organization builds a promising client line through their dedicated services. Likewise, Workiy’s Services enable our clients to deliver their commitments even better! But who are the people behind these deliverables? What is this team that fulfils these promises?</p>
                    <p>Meet the team, who build your dream!</p>-->                    
                </div>
            </div>
        </div>
    </div>    
    <div class=\"team-profile-wrapper\">
        {% for key,row in rows %}
            <div class=\"team-profile\">
                <div class=\"team-wrapper\">
                    <div class=\"team-description\">
                                        
                    </div>
                    <div class=\"team-img\" style=\"height:100%;width:100%;\">
 <h3 class=\"heading\">{{ view.style_plugin.getField(key, 'title') }}</h3>
<p class=\"description\">{{ view.style_plugin.getField(key, 'body') }}</p> 
                        {{ view.style_plugin.getField(key, 'field_team_image') }}

                        
                    </div>
                </div>
            </div>
                        
        {% endfor %}        
    </div> 
</section>       ", "themes/custom/workiy/templates/views/views-view-unformatted--teams--hometeams.html.twig", "/var/www/html/web/themes/custom/workiy/templates/views/views-view-unformatted--teams--hometeams.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "for" => 39);
        static $filters = array("escape" => 46);
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
