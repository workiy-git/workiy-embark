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

/* __string_template__0d569895743f65059ac6971d7fd1cee7 */
class __TwigTemplate_c98fef15e960ddfb7677f9839a1c6e84 extends \Twig\Template
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
        echo "<div class=\"service-main-content\">
      <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
          <div class=\"wky-col-sm-12 wky-col-lg-12\">
            <div class=\"service-heading\">              
              <h3 class=\"heading\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_subtitle"] ?? null), 6, $this->source), "html", null, true);
        echo "</h3>
              <p class=\"description\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description__value"] ?? null), 7, $this->source), "html", null, true);
        echo "</p>
            </div>
          </div>
        </div>
      </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__0d569895743f65059ac6971d7fd1cee7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"service-main-content\">
      <div class=\"wky-container\">
        <div class=\"wky-row wky-wrap\">
          <div class=\"wky-col-sm-12 wky-col-lg-12\">
            <div class=\"service-heading\">              
              <h3 class=\"heading\">{{ field_subtitle }}</h3>
              <p class=\"description\">{{ description__value }}</p>
            </div>
          </div>
        </div>
      </div>
</div>", "__string_template__0d569895743f65059ac6971d7fd1cee7", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
