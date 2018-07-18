<?php

/* C:\xampp\htdocs\2-laravel-october_cms/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_83695b162562ac3d800c52607078aa74108f299522e94ec542dc3d652016d40e extends Twig_Template
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
        echo "<h1>Contact us</h1>
<form action=\"\">
    <div class='form-group'>
        <lable>Name</lable>
        <input type=\"text\" class='form-control'>
    </div>
    <div class='form-group'>
        <lable>Email</lable>
        <input type=\"email\" class='form-control'>
    </div>
    <div class='form-group'>
        <lable>Message</lable>
        <textarea type=\"text\" class='form-control'></textarea>
    </div>
    <button type='submit'>Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact us</h1>
<form action=\"\">
    <div class='form-group'>
        <lable>Name</lable>
        <input type=\"text\" class='form-control'>
    </div>
    <div class='form-group'>
        <lable>Email</lable>
        <input type=\"email\" class='form-control'>
    </div>
    <div class='form-group'>
        <lable>Message</lable>
        <textarea type=\"text\" class='form-control'></textarea>
    </div>
    <button type='submit'>Submit</button>
</form>", "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/responsiv-clean/pages/contact.htm", "");
    }
}
