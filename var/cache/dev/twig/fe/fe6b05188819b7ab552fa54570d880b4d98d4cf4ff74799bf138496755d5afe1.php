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

/* default/contactUs.html.twig */
class __TwigTemplate_63c966ec617d69ab17d34eea0f31f73feb0bb3fb7063a267c594b46463dc9c61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/contactUs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/contactUs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron jumbotron-sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12\">
                <h1 class=\"h1\">
                <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"well well-sm\">
                <form>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"name\">
                                Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">
                                Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                                </span>
                                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">
                                Subject</label>
                            <select id=\"subject\" name=\"subject\" class=\"form-control\" required=\"required\">
                                <option value=\"na\" selected=\"\">Choose One:</option>
                                <option value=\"service\">General Customer Service</option>
                                <option value=\"suggestions\">Suggestions</option>
                                <option value=\"product\">Feedbacks</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"name\">
                                Message</label>
                            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"9\" cols=\"25\" required=\"required\"
                                placeholder=\"Message\"></textarea>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"btnContactUs\">Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class=\"col-md-4\">
            <form>
            <legend><span class=\"glyphicon glyphicon-globe\"></span> Our office</legend>
            <address>
                <strong>Insat.</strong><br>
                676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080d<br>
                <abbr title=\"Phone\">(+216)</abbr>98 210 263
            </address>
            <address>
                <strong>chaima AKKARI</strong><br>
                <a href=\"mailto:#\">chaima050@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/contactUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"jumbotron jumbotron-sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12\">
                <h1 class=\"h1\">
                <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"well well-sm\">
                <form>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"name\">
                                Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">
                                Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                                </span>
                                <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"subject\">
                                Subject</label>
                            <select id=\"subject\" name=\"subject\" class=\"form-control\" required=\"required\">
                                <option value=\"na\" selected=\"\">Choose One:</option>
                                <option value=\"service\">General Customer Service</option>
                                <option value=\"suggestions\">Suggestions</option>
                                <option value=\"product\">Feedbacks</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"name\">
                                Message</label>
                            <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"9\" cols=\"25\" required=\"required\"
                                placeholder=\"Message\"></textarea>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"btnContactUs\">Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class=\"col-md-4\">
            <form>
            <legend><span class=\"glyphicon glyphicon-globe\"></span> Our office</legend>
            <address>
                <strong>Insat.</strong><br>
                676 INSAT Centre Urbain Nord BP، Tunis Cedex 1080d<br>
                <abbr title=\"Phone\">(+216)</abbr>98 210 263
            </address>
            <address>
                <strong>chaima AKKARI</strong><br>
                <a href=\"mailto:#\">chaima050@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div> 
{% endblock %} ", "default/contactUs.html.twig", "C:\\Users\\choun\\Documents\\GitHub\\insatien\\templates\\default\\contactUs.html.twig");
    }
}
