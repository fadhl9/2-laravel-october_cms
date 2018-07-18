<?php

/* C:\xampp\htdocs\2-laravel-october_cms/themes/acme/partials/site/header.htm */
class __TwigTemplate_081cd1d2c04d8d372466c50e43c8c86aab531d2a268831e4de0bf36c297c5a8d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">       
            <li class=\"nav-item ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
            <li class=\"nav-item ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About us</a></li>
            <li class=\"nav-item ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
            <li class=\"nav-item ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\"><a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact us</a></li>

            <li class=\"nav-item\"><a class=\"nav-link\" href=\"http://localhost/2-laravel-october_cms/backend\">Admin</a></li>

        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  52 => 11,  44 => 10,  36 => 9,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">{{ this.theme.site_name }}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">       
            <li class=\"nav-item {% if this.page.id == 'home' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a></li>
            <li class=\"nav-item {% if this.page.id == 'about' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'about'|page }}\">About us</a></li>
            <li class=\"nav-item {% if this.page.id == 'blog' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a></li>
            <li class=\"nav-item {% if this.page.id == 'contact' %}active{% endif %}\"><a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact us</a></li>

            <li class=\"nav-item\"><a class=\"nav-link\" href=\"http://localhost/2-laravel-october_cms/backend\">Admin</a></li>

        </ul>
    </div>
</nav>", "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/partials/site/header.htm", "");
    }
}
