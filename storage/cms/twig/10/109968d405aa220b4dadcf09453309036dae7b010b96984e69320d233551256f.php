<?php

/* C:\xampp\htdocs\2-laravel-october_cms/themes/responsiv-clean/pages/blog/category.htm */
class __TwigTemplate_2c58eead03e2f703b758dbf3a7f465a9603cadd1a9b967b4a8f5c7b4128612fc extends Twig_Template
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
        echo "<div class=\"category-title\">
    <h1>Category: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
</div>

<div class=\"blog-posts\">
    ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/responsiv-clean/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"category-title\">
    <h1>Category: {{ category.name }}</h1>
</div>

<div class=\"blog-posts\">
    {% partial 'blog/posts' %}
</div>", "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/responsiv-clean/pages/blog/category.htm", "");
    }
}
