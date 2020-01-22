<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mytheme/templates/maintenance-page.html.twig */
class __TwigTemplate_72fc29cf065497296fb5029c1605f6643aa647ad462137870e887b8aedb78212 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 15];
        $filters = ["escape" => 16, "t" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if (($context["logo"] ?? null)) {
            // line 16
            echo "      <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 22
            echo "      <div class=\"name-and-slogan\">
        ";
            // line 23
            if (($context["site_name"] ?? null)) {
                // line 24
                echo "         <h1 class=\"site-name\">
           <a href=\"";
                // line 25
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
         </h1>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (($context["site_slogan"] ?? null)) {
                // line 30
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
        ";
            }
            // line 32
            echo "      </div>";
            // line 33
            echo "    ";
        }
        // line 34
        echo "
  </header>
  <h1>This is the maintenance page:)</h1>
  <main role=\"main\">
    ";
        // line 38
        if (($context["title"] ?? null)) {
            // line 39
            echo "      <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

    ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  </main>

  ";
        // line 47
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 48
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
    </aside>";
            // line 51
            echo "  ";
        }
        // line 52
        echo "
  ";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 54
            echo "    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
    </aside>";
            // line 57
            echo "  ";
        }
        // line 58
        echo "
  ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 60
            echo "    <footer role=\"contentinfo\">
      ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 64
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  179 => 61,  176 => 60,  174 => 59,  171 => 58,  168 => 57,  164 => 55,  161 => 54,  159 => 53,  156 => 52,  153 => 51,  149 => 49,  146 => 48,  144 => 47,  138 => 44,  133 => 42,  130 => 41,  124 => 39,  122 => 38,  116 => 34,  113 => 33,  111 => 32,  105 => 30,  103 => 29,  100 => 28,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  69 => 17,  62 => 16,  60 => 15,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single Drupal page while offline.
 *
 * All available variables are mirrored in page.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_maintenance_page()
 */
#}
<div class=\"layout-container\">

  <header role=\"banner\">
    {% if logo %}
      <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
        <img src=\"{{ logo }}\" alt=\"{{ 'Home'|t }}\"/>
      </a>
    {% endif %}

    {% if site_name or site_slogan %}
      <div class=\"name-and-slogan\">
        {% if site_name %}
         <h1 class=\"site-name\">
           <a href=\"{{ front_page }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
         </h1>
        {% endif %}

        {% if site_slogan %}
          <div class=\"site-slogan\">{{ site_slogan }}</div>
        {% endif %}
      </div>{# /.name-and-slogan #}
    {% endif %}

  </header>
  <h1>This is the maintenance page:)</h1>
  <main role=\"main\">
    {% if title %}
      <h1>{{ title }}</h1>
    {% endif %}

    {{ page.highlighted }}

    {{ page.content }}
  </main>

  {% if page.sidebar_first %}
    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      {{ page.sidebar_first }}
    </aside>{# /.layout-sidebar-first #}
  {% endif %}

  {% if page.sidebar_second %}
    <aside class=\"layout-sidebar-second\" role=\"complementary\">
      {{ page.sidebar_second }}
    </aside>{# /.layout-sidebar-second #}
  {% endif %}

  {% if page.footer %}
    <footer role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
", "themes/custom/mytheme/templates/maintenance-page.html.twig", "/Users/joe/Sites/devdesktop/drupal8theming/themes/custom/mytheme/templates/maintenance-page.html.twig");
    }
}
