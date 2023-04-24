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
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 12), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 12), "favorites", [], "any", false, false, true, 12))) == true)) {
                // line 13
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("YES");
                echo "
                ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                ";
                // line 15
                $context["buttonMessage"] = "Borrar de favoritos";
                // line 16
                echo "            ";
            } else {
                // line 17
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("NO");
                echo "
                ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
                ";
                // line 19
                $context["buttonMessage"] = "Añadir a favoritos";
                // line 20
                echo "            ";
            }
            // line 21
            echo "            <button id=\"button-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\" onclick=\"tiggerAction(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ", '";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 21), "favorites", [], "any", false, false, true, 21), "endpoint", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "')\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttonMessage"] ?? null), 21, $this->source), "html", null, true);
            echo "</button>           
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
    <div id=\"comic-container\" class=\"hide-content\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "comics", [], "any", false, false, true, 26), "response", [], "any", false, false, true, 26), "data", [], "any", false, false, true, 26), "results", [], "any", false, false, true, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "        <div>
            <img src=\"";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 28), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo ".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "thumbnail", [], "any", false, false, true, 28), "extension", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">
            <h3>";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</h3>
            <p>Descripción: ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</p>
            <p>Número de páginas: ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "pageCount", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "</p>
            ";
            // line 32
            if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 32), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 32), "favorites", [], "any", false, false, true, 32))) == true)) {
                // line 33
                echo "                ";
                $context["buttonMessage"] = "Borrar de favoritos";
                // line 34
                echo "            ";
            } else {
                // line 35
                echo "                ";
                $context["buttonMessage"] = "Añadir a favoritos";
                // line 36
                echo "            ";
            }
            // line 37
            echo "            <button id=\"button-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\" onclick=\"tiggerAction(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo ", '";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "characters", [], "any", false, false, true, 37), "favorites", [], "any", false, false, true, 37), "endpoint", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "')\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buttonMessage"] ?? null), 37, $this->source), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    
    </div>

";
        // line 42
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
        return array (  178 => 42,  173 => 39,  157 => 37,  154 => 36,  151 => 35,  148 => 34,  145 => 33,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  125 => 28,  122 => 27,  118 => 26,  114 => 24,  98 => 21,  95 => 20,  93 => 19,  89 => 18,  84 => 17,  81 => 16,  79 => 15,  75 => 14,  70 => 13,  68 => 12,  64 => 11,  60 => 10,  54 => 9,  51 => 8,  47 => 7,  39 => 1,);
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
            {% if item.id in data.characters.favorites|keys == true %}
                {{'YES'}}
                {{item.id}}
                {% set buttonMessage = \"Borrar de favoritos\" %}
            {% else %}
                {{'NO'}}
                {{item.id}}
                {% set buttonMessage = \"Añadir a favoritos\" %}
            {% endif %}
            <button id=\"button-{{ item.id }}\" onclick=\"tiggerAction({{ item.id }}, '{{ data.characters.favorites.endpoint }}')\">{{ buttonMessage }}</button>           
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
            {% if item.id in data.characters.favorites|keys == true %}
                {% set buttonMessage = \"Borrar de favoritos\" %}
            {% else %}
                {% set buttonMessage = \"Añadir a favoritos\" %}
            {% endif %}
            <button id=\"button-{{ item.id }}\" onclick=\"tiggerAction({{ item.id }}, '{{ data.characters.favorites.endpoint }}')\">{{ buttonMessage }}</button>
        </div>
    {% endfor %}    
    </div>

{{ attach_library('marvel/marvel') }}
", "modules/custom/marvel/templates/marvel-items-list.html.twig", "/var/www/html/web/modules/custom/marvel/templates/marvel-items-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 7, "if" => 12, "set" => 15);
        static $filters = array("escape" => 9, "keys" => 12);
        static $functions = array("attach_library" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
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
