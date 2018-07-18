<?php

/* C:\xampp\htdocs\2-laravel-october_cms/themes/acme/pages/home.htm */
class __TwigTemplate_6bcab6ec77d521b5eb3cfcbe591955a6a3176a0fc7fc472ebf175322b1778a76 extends Twig_Template
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
        echo "<div class='jumbotron text-center'>
    <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <p><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class='btn btn-default'>Read more</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class='jumbotron text-center'>
    <h1>{{ this.theme.site_name }}</h1>
    <p>{{ this.theme.site_description }}</p>
    <p><a href=\"{{'about'|page}}\" class='btn btn-default'>Read more</a></p>
</div>", "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/pages/home.htm", "");
    }
}
