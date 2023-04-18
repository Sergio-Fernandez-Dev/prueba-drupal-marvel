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

/* modules/custom/marvel/templates/marvel-item-list.html.twig */
class __TwigTemplate_ac323c4d4d451d3245cc843a741dee14 extends Template
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
        echo "<nav> 
    <a href=\"https://prueba-drupal-marvel.ddev.site/marvel/characters\">Personajes</a>
    <a href=\"https://prueba-drupal-marvel.ddev.site/marvel/comics\">Comics</a>
</nav>
 
";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "category", [], "any", false, false, true, 6) == "characters")) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "response", [], "any", false, false, true, 7), "data", [], "any", false, false, true, 7), "results", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <div>
            <img src=\"";
                // line 9
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 9), "path", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo ".";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 9), "extension", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\">
            <h3>";
                // line 10
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</h3>
            <p>Descripción: ";
                // line 11
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "</p>
            ";
                // line 12
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 12), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "favorites", [], "any", false, false, true, 12))) == false)) {
                    // line 13
                    echo "                <button>Añadir a favoritos</button>
            ";
                } else {
                    // line 15
                    echo "                <button>Borrar de favoritos</button>
            ";
                }
                // line 17
                echo "        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "response", [], "any", false, false, true, 20), "data", [], "any", false, false, true, 20), "results", [], "any", false, false, true, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "        <div>
            <img src\"";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 22), "path", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo ".";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 22), "extension", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "\">
            <h3>";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</h3>
            <p>Descripción: ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</p>
            <p>Número de páginas: ";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "pageCount", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    
";
        }
        // line 29
        echo "

";
    }

    public function getTemplateName()
    {
        return "modules/custom/marvel/templates/marvel-item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 29,  119 => 27,  110 => 25,  106 => 24,  102 => 23,  96 => 22,  93 => 21,  88 => 20,  80 => 17,  76 => 15,  72 => 13,  70 => 12,  66 => 11,  62 => 10,  56 => 9,  53 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/marvel/templates/marvel-item-list.html.twig", "/var/www/html/web/modules/custom/marvel/templates/marvel-item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 7);
        static $filters = array("escape" => 9, "keys" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'keys'],
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
