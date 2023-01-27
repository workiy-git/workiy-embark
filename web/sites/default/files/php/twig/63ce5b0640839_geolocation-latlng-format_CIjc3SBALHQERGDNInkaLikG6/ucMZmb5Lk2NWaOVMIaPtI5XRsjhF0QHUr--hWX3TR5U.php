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

/* modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig */
class __TwigTemplate_e585e077da3fecdefcbd9e3fecf2ad8c extends \Twig\Template
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
        // line 15
        echo "<span typeof=\"Place\">
  <span property=\"geo\" typeof=\"GeoCoordinates\">
    <meta property=\"latitude\" content=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lat"] ?? null), 17, $this->source), "html", null, true);
        echo "\">
    <meta property=\"longitude\" content=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lng"] ?? null), 18, $this->source), "html", null, true);
        echo "\">
  </span>
  <span class=\"geolocation-latlng\">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lat"] ?? null), 20, $this->source), "html", null, true);
        echo ", ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lng"] ?? null), 20, $this->source), "html", null, true);
        echo "</span>
</span>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  47 => 18,  43 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default microdata theme implementation for a geolocation with latitude, longitude.
 *
 * Available variables:
 * - lat: The latitude value.
 * - lng: The longitude value.
 *
 * @see template_preprocess()
 *
 * @ingroup themeable
 */
#}
<span typeof=\"Place\">
  <span property=\"geo\" typeof=\"GeoCoordinates\">
    <meta property=\"latitude\" content=\"{{ lat }}\">
    <meta property=\"longitude\" content=\"{{ lng }}\">
  </span>
  <span class=\"geolocation-latlng\">{{ lat }}, {{ lng }}</span>
</span>
", "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig", "/var/www/html/web/modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
