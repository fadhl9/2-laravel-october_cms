<?php

/* C:\xampp\htdocs\2-laravel-october_cms/themes/acme/pages/contact.htm */
class __TwigTemplate_79db331c01f807476620ffadc9f7eba44d51e149d48b0da409729ff5c5a101b7 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<p>This is the contact page</p>
<hr>
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
        return "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
<p>This is the contact page</p>
<hr>
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
</form>", "C:\\xampp\\htdocs\\2-laravel-october_cms/themes/acme/pages/contact.htm", "");
    }
}
