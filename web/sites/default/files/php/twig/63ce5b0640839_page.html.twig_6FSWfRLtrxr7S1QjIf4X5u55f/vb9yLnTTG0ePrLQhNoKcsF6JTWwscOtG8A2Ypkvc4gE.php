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

/* themes/custom/workiy/templates/system/page.html.twig */
class __TwigTemplate_8d52dc8d91c22907f98efc8e2ee8f6d0 extends \Twig\Template
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
        echo "<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
<style type=\"text/css\">

<!--/*--><![CDATA[/* ><!--*/
@media screen and (min-width: 480px) {
 .zb-btone-inner-container.zb-embed-page-title-show {
    overflow-y: visible;
}
}
.watch-more {
    
    color: #424B5A;
    font-size: 14px;
    text-decoration: none;
    margin-top: 0px;

    &:hover,
    &:focus,
    &:active {
        color: #626e84;
    }
}    

/* The Modal (background) */
.modal {
   
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: visible;
    background-color: rgba(0,0,0,0.4);
}
.video-popup {
    
    z-index: 2;
    position: absolute;
    top: 20%;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    border: 1px solid #ccc;
    padding: 10px 111px 0px 20px;
    background-color: #fff;
    border-radius: 4px;

    &.visible {
        display: block;
    }
    .close {
        position: absolute;
        right: 8px;
        top: 4%;
        font-weight: 900;
        font-size: 58px;
        color: black;
        padding: 5px 10px;
        border-bottom: none;
\tfloat:right;
    }
}

.video-wrapper {
    width: 400px;
    margin: 30px auto;
    
    @media only screen and (max-width: 560px) {
      width: 250px;
    }

    .video-container {
        position: relative;
        padding-bottom: 55.25%;
        height: 0;
        overflow: hidden;

        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    }
}
@media (max-width: 600px)
header.whitebg .watch-more a {
    filter: brightness(1) invert(0);
}

@media (max-width: 600px)
header .watch-more a {
    font-size: 0;
    background-color: transparent;
    border: 0;
    background-image: url(/sites/default/files/2023-01/appointment-book.png);
    width: 40px;
    height: 40px;
    background-size: cover;
    display: inline-block;
    padding: 0;
}
/*--><!]]>*/
</style>
<div class=\"menu-overlay\"></div>
  <div class=\"wky-container\">
    <div class=\"wky-row align-center\">
      <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-6\">
        <div class=\"main-logo\">";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "</div>
      </div>
      <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-6\">
        <div class=\"header-right\">
<div class=\"clearfix-text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item\" style=\"margin-top: 16px;\">
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js\"></script><script type=\"text/javascript\">
<!--//--><![CDATA[// ><!--

\$(function(){
    \$('#button').click(function(){
        if(!\$('#iframe').length) {
\t\t\$('#iframeHolder').html('<iframe frameborder=\"0\" height=\"\" src=\"https://bookings.workiy.com/portal-embed#/customer/workiyinc\" width=\"\"style=\"margin-left:0px;\">');
                \$('body').css('overflow', 'hidden');
        }
    });
   \$('.watch-more').click(function(){
        if(!\$('#iframe').length) {
\t\t\$('#iframeHolder').html('<iframe frameborder=\"0\" height=\"\" src=\"https://bookings.workiy.com/portal-embed#/customer/workiyinc\" width=\"\"style=\"margin-left:0px;\">');
                \$('body').css('overflow', 'hidden');
        }
        if(!\$('.video-popup').length) {
                \$('body').css('overflow', 'hidden');
        }
    });
    \$(document).on('click', '.close', function () {
      \$('body').css('overflow', 'auto');
     });
});

//--><!]]>
</script>
<p><a class=\"watch-more\" href=\"#\"><button id=\"button\" style=\"padding: 5px 20px;
border: 0;
background: #ffba08;
font-weight: 700;
color: #fff;
border-radius: 50px;margin-bottom: 0px;
    margin-right: 20px;font-family:'Poppins';\">Book an Appointment</button></a><!-- The Modal --></p>

<div class=\"modal\" id=\"modal\" style=\"display:none;\">&nbsp;</div>

<div class=\"video-popup\" style=\"display: none;\"><a class=\"close\" style=\"margin-left: 0%;
    font-size: 20px;
    border: 1px solid black;
    padding: 0px 10px 2px 10px;
    border-radius: 50%;font-weight: 300;background-color:black;color:white;cursor:pointer;\">x</a> <!-- Modal content -->

<div class=\"video-wrapper\">
<div class=\"video-container\"><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"480px\" src=\"https://bookings.workiy.com/portal-embed#/customer/workiyinc\" width=\"500px\"></iframe></div>
</div>
</div>
</div>
          <div class=\"get-in-touch\">
            <a href=\"/contact-us\" class=\"btn orange-bg white-text\">Get in touch</a>
          </div>
          <div class=\"search\">
            <div class=\"search-icon\"></div>
            <div class=\"search-close\"></div>
            <div class=\"search-content\">";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "</div>
          </div>
          <div class=\"main-navigation\">
            <div class=\"humburger-menu\"></div>
            <div class=\"menu-close\"></div>
            ";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class=\"featured\" id=\"featured\" role=\"complementary\">
   ";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
        echo "
</section>
<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
     ";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
        echo "
   </main>
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
  <div class=\"footer--top\">
    <div class=\"wky-container\">
      <div class=\"wky-row\">
        <div class=\"wky-col-md-4 wky-col-lg-4 footer-left\">
          <div class=\"footer-left-inner\">
             ";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"wky-col-md-8 wky-col-lg-8 footer-right\">
          <div class=\"footer-right-inner\">
             ";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        <!-- ";
        // line 203
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
        echo " -->
      </div>
    </div>
  <div class=\"footer--bottom\">
    <div class=\"wky-container\">
      <div class=\"wky-row align-center\">
        <div class=\"wky-col-lg-12\">
          ";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/workiy/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 210,  264 => 203,  258 => 200,  250 => 195,  238 => 186,  231 => 182,  220 => 174,  212 => 169,  151 => 111,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header aria-label=\"Site header\" class=\"header\" id=\"header\" role=\"banner\">
<style type=\"text/css\">

<!--/*--><![CDATA[/* ><!--*/
@media screen and (min-width: 480px) {
 .zb-btone-inner-container.zb-embed-page-title-show {
    overflow-y: visible;
}
}
.watch-more {
    
    color: #424B5A;
    font-size: 14px;
    text-decoration: none;
    margin-top: 0px;

    &:hover,
    &:focus,
    &:active {
        color: #626e84;
    }
}    

/* The Modal (background) */
.modal {
   
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: visible;
    background-color: rgba(0,0,0,0.4);
}
.video-popup {
    
    z-index: 2;
    position: absolute;
    top: 20%;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    border: 1px solid #ccc;
    padding: 10px 111px 0px 20px;
    background-color: #fff;
    border-radius: 4px;

    &.visible {
        display: block;
    }
    .close {
        position: absolute;
        right: 8px;
        top: 4%;
        font-weight: 900;
        font-size: 58px;
        color: black;
        padding: 5px 10px;
        border-bottom: none;
\tfloat:right;
    }
}

.video-wrapper {
    width: 400px;
    margin: 30px auto;
    
    @media only screen and (max-width: 560px) {
      width: 250px;
    }

    .video-container {
        position: relative;
        padding-bottom: 55.25%;
        height: 0;
        overflow: hidden;

        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    }
}
@media (max-width: 600px)
header.whitebg .watch-more a {
    filter: brightness(1) invert(0);
}

@media (max-width: 600px)
header .watch-more a {
    font-size: 0;
    background-color: transparent;
    border: 0;
    background-image: url(/sites/default/files/2023-01/appointment-book.png);
    width: 40px;
    height: 40px;
    background-size: cover;
    display: inline-block;
    padding: 0;
}
/*--><!]]>*/
</style>
<div class=\"menu-overlay\"></div>
  <div class=\"wky-container\">
    <div class=\"wky-row align-center\">
      <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-6\">
        <div class=\"main-logo\">{{ page.branding }}</div>
      </div>
      <div class=\"wky-col-6 wky-col-sm-6 wky-col-lg-6\">
        <div class=\"header-right\">
<div class=\"clearfix-text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item\" style=\"margin-top: 16px;\">
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js\"></script><script type=\"text/javascript\">
<!--//--><![CDATA[// ><!--

\$(function(){
    \$('#button').click(function(){
        if(!\$('#iframe').length) {
\t\t\$('#iframeHolder').html('<iframe frameborder=\"0\" height=\"\" src=\"https://bookings.workiy.com/portal-embed#/customer/workiyinc\" width=\"\"style=\"margin-left:0px;\">');
                \$('body').css('overflow', 'hidden');
        }
    });
   \$('.watch-more').click(function(){
        if(!\$('#iframe').length) {
\t\t\$('#iframeHolder').html('<iframe frameborder=\"0\" height=\"\" src=\"https://bookings.workiy.com/portal-embed#/customer/workiyinc\" width=\"\"style=\"margin-left:0px;\">');
                \$('body').css('overflow', 'hidden');
        }
        if(!\$('.video-popup').length) {
                \$('body').css('overflow', 'hidden');
        }
    });
    \$(document).on('click', '.close', function () {
      \$('body').css('overflow', 'auto');
     });
});

//--><!]]>
</script>
<p><a class=\"watch-more\" href=\"#\"><button id=\"button\" style=\"padding: 5px 20px;
border: 0;
background: #ffba08;
font-weight: 700;
color: #fff;
border-radius: 50px;margin-bottom: 0px;
    margin-right: 20px;font-family:'Poppins';\">Book an Appointment</button></a><!-- The Modal --></p>

<div class=\"modal\" id=\"modal\" style=\"display:none;\">&nbsp;</div>

<div class=\"video-popup\" style=\"display: none;\"><a class=\"close\" style=\"margin-left: 0%;
    font-size: 20px;
    border: 1px solid black;
    padding: 0px 10px 2px 10px;
    border-radius: 50%;font-weight: 300;background-color:black;color:white;cursor:pointer;\">x</a> <!-- Modal content -->

<div class=\"video-wrapper\">
<div class=\"video-container\"><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"480px\" src=\"https://bookings.workiy.com/portal-embed#/customer/workiyinc\" width=\"500px\"></iframe></div>
</div>
</div>
</div>
          <div class=\"get-in-touch\">
            <a href=\"/contact-us\" class=\"btn orange-bg white-text\">Get in touch</a>
          </div>
          <div class=\"search\">
            <div class=\"search-icon\"></div>
            <div class=\"search-close\"></div>
            <div class=\"search-content\">{{ page.search }}</div>
          </div>
          <div class=\"main-navigation\">
            <div class=\"humburger-menu\"></div>
            <div class=\"menu-close\"></div>
            {{ page.navigation }}
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section class=\"featured\" id=\"featured\" role=\"complementary\">
   {{ page.featured }}
</section>
<section class=\"main\" id=\"main\">
   <main aria-label=\"Site main content\" class=\"content\" id=\"content\" role=\"main\">
     {{ page.content }}
   </main>
</section>
<footer aria-label=\"Site footer\" class=\"footer\" id=\"footer\" role=\"contentinfo\">
  <div class=\"footer--top\">
    <div class=\"wky-container\">
      <div class=\"wky-row\">
        <div class=\"wky-col-md-4 wky-col-lg-4 footer-left\">
          <div class=\"footer-left-inner\">
             {{ page.footer_first }}
          </div>
        </div>
        <div class=\"wky-col-md-8 wky-col-lg-8 footer-right\">
          <div class=\"footer-right-inner\">
             {{ page.footer_second }}
          </div>
        </div>
        <!-- {{ page.footer_third }} -->
      </div>
    </div>
  <div class=\"footer--bottom\">
    <div class=\"wky-container\">
      <div class=\"wky-row align-center\">
        <div class=\"wky-col-lg-12\">
          {{ page.footer_bottom }}
        </div>
      </div>
    </div>
  </div>
</footer>
", "themes/custom/workiy/templates/system/page.html.twig", "/var/www/html/web/themes/custom/workiy/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 111);
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
