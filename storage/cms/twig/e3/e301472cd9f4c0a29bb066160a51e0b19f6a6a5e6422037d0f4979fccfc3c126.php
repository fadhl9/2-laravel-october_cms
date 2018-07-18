<?php

/* C:\xampp\htdocs\2-laravel-october_cms/themes/acme/pages/about.htm */
class __TwigTemplate_af5474657fa636b26fdca4d5c74eef7a712172bdfff9a956fced42422f3e60d1 extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>This is the about page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>This is the about page</p>
<hr>
{% component 'resourcesLinks' %}", "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/pages/about.htm", "");
    }
}
