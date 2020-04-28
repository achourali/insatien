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

/* default/register.html.twig */
class __TwigTemplate_5aef182068f5b721b44bab2cdf4a3ad71f23a5263c8fcf95d2762a2542cd534b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/register.html.twig", 1);
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
        echo "<form action=\"\" method=\"POST\">
    <div class=\"form-group\">
        <fieldset>
          <label class=\"control-label\" for=\"username\">username</label>
          <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"username\" readonly=\"\">
        </fieldset>
      </div>
      <div class=\"form-group\">
        <fieldset>
          <label class=\"control-label\" for=\"readOnlyInput\">password</label>
          <input class=\"form-control\" id=\"readOnlyInput\" type=\"password\" placeholder=\"password\" readonly=\"\">
        </fieldset>
      </div>
    <label for=\"exampleInputEmail1\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"example@insat.u-carthage.tn\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
    <div class=\"form-group\">
        <select class=\"custom-select\">
          <option selected=\"\">registering as </option>
          <option value=\"1\">student</option>
          <option value=\"2\">instructor</option>
        </select>
    </div>
    <legend>choose you group</legend>
    <div class=\"form-group\">
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\" checked=\"\">
        <label class=\"custom-control-label\" for=\"customRadio1\">GL2/1</label>
      </div>
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
        <label class=\"custom-control-label\" for=\"customRadio2\">GL2/2</label>
      </div>
    </div>
    </fieldset>
    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    <button type=\"reset\" class=\"btn btn-primary\">Reset</button>
    </fieldset>
</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/register.html.twig";
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
<form action=\"\" method=\"POST\">
    <div class=\"form-group\">
        <fieldset>
          <label class=\"control-label\" for=\"username\">username</label>
          <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"username\" readonly=\"\">
        </fieldset>
      </div>
      <div class=\"form-group\">
        <fieldset>
          <label class=\"control-label\" for=\"readOnlyInput\">password</label>
          <input class=\"form-control\" id=\"readOnlyInput\" type=\"password\" placeholder=\"password\" readonly=\"\">
        </fieldset>
      </div>
    <label for=\"exampleInputEmail1\">Email address</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"example@insat.u-carthage.tn\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
    <div class=\"form-group\">
        <select class=\"custom-select\">
          <option selected=\"\">registering as </option>
          <option value=\"1\">student</option>
          <option value=\"2\">instructor</option>
        </select>
    </div>
    <legend>choose you group</legend>
    <div class=\"form-group\">
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\" checked=\"\">
        <label class=\"custom-control-label\" for=\"customRadio1\">GL2/1</label>
      </div>
      <div class=\"custom-control custom-radio\">
        <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">
        <label class=\"custom-control-label\" for=\"customRadio2\">GL2/2</label>
      </div>
    </div>
    </fieldset>
    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    <button type=\"reset\" class=\"btn btn-primary\">Reset</button>
    </fieldset>
</form>

{% endblock %}", "default/register.html.twig", "C:\\Users\\choun\\Documents\\GitHub\\insatien\\templates\\default\\register.html.twig");
    }
}
