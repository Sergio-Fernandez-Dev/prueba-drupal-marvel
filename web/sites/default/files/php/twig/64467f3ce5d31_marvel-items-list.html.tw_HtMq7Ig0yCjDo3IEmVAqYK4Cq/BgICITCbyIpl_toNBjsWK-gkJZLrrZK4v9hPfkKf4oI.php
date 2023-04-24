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

/* modules/custom/marvel/templates/marvel-items-list.html.twig */
class __TwigTemplate_53cb5ceccd9e647e0a43de45c37349be extends Template
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
    <a href=\"#\" onclick=\"toggleVisibility('characters')\">Personajes</a>
    <a href=\"#\" onclick=\"toggleVisibility('comics')\">Comics</a>
</nav>

    <div id=\"character-container\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 7), "response", [], "any", false, false, true, 7), "data", [], "any", false, false, true, 7), "results", [], "any", false, false, true, 7));
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
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 12), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 12), "favorites", [], "any", false, false, true, 12))) == false)) {
                // line 13
                echo "                <button onclick=\"addToFavorites(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo ", '";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 13), "favorites", [], "any", false, false, true, 13), "endpoint", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "')\">Añadir a favoritos</button>
            ";
            } else {
                // line 15
                echo "                <button onclick=\"removeFromFavorites(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo ", '";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 15), "favorites", [], "any", false, false, true, 15), "endpoint", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "')\">Borrar de favoritos</button>
            ";
            }
            // line 17
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
    <div id=\"comic-container\" class=\"hide-content\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comics", [], "any", false, false, true, 21), "response", [], "any", false, false, true, 21), "data", [], "any", false, false, true, 21), "results", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "        <div>
            <img src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 23), "path", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 23), "extension", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">
            <h3>";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</h3>
            <p>Descripción: ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</p>
            <p>Número de páginas: ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "pageCount", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</p>
            ";
            // line 27
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 27), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comics", [], "any", false, false, true, 27), "favorites", [], "any", false, false, true, 27))) == false)) {
                // line 28
                echo "                <button onclick=\"addToFavorites(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo ", '";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comics", [], "any", false, false, true, 28), "favorites", [], "any", false, false, true, 28), "endpoint", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "')\">Añadir a favoritos</button>
            ";
            } else {
                // line 30
                echo "                <button onclick=\"removeFromFavorites(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo ", '";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comics", [], "any", false, false, true, 30), "favorites", [], "any", false, false, true, 30), "endpoint", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "')\">Borrar de favoritos</button>
            ";
            }
            // line 32
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    
    </div>

";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("marvel/marvel"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/marvel/templates/marvel-items-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  147 => 33,  140 => 32,  132 => 30,  124 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  104 => 23,  101 => 22,  97 => 21,  93 => 19,  86 => 17,  78 => 15,  70 => 13,  68 => 12,  64 => 11,  60 => 10,  54 => 9,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav> 
    <a href=\"#\" onclick=\"toggleVisibility('characters')\">Personajes</a>
    <a href=\"#\" onclick=\"toggleVisibility('comics')\">Comics</a>
</nav>

    <div id=\"character-container\">
    {% for item in data.characters.response.data.results %}
        <div>
            <img src=\"{{ item.thumbnail.path }}.{{ item.thumbnail.extension }}\">
            <h3>{{ item.name }}</h3>
            <p>Descripción: {{ item.description }}</p>
            {% if item.id in data.characters.favorites|keys == false %}
                <button onclick=\"addToFavorites({{ item.id }}, '{{ data.characters.favorites.endpoint }}')\">Añadir a favoritos</button>
            {% else %}
                <button onclick=\"removeFromFavorites({{ item.id }}, '{{ data.characters.favorites.endpoint }}')\">Borrar de favoritos</button>
            {% endif %}
        </div>
    {% endfor %}
    </div>
    <div id=\"comic-container\" class=\"hide-content\">
    {% for item in data.comics.response.data.results %}
        <div>
            <img src=\"{{ item.thumbnail.path }}.{{ item.thumbnail.extension }}\">
            <h3>{{ item.title }}</h3>
            <p>Descripción: {{ item.description }}</p>
            <p>Número de páginas: {{ item.pageCount }}</p>
            {% if item.id in data.comics.favorites|keys == false %}
                <button onclick=\"addToFavorites({{ item.id }}, '{{ data.comics.favorites.endpoint }}')\">Añadir a favoritos</button>
            {% else %}
                <button onclick=\"removeFromFavorites({{ item.id }}, '{{ data.comics.favorites.endpoint }}')\">Borrar de favoritos</button>
            {% endif %}
        </div>
    {% endfor %}    
    </div>

{{ attach_library('marvel/marvel') }}
", "modules/custom/marvel/templates/marvel-items-list.html.twig", "/var/www/html/web/modules/custom/marvel/templates/marvel-items-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 12);
        static $filters = array("escape" => 9, "keys" => 12);
        static $functions = array("attach_library" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'keys'],
                ['attach_library']
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
