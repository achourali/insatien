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
class __TwigTemplate_9d06a3692605eb56a78153e83e16d5c5a5699ec0a2953cd145572eea47b51d34 extends Template
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
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form');
        echo "


    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "
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
        return array (  144 => 46,  142 => 45,  140 => 44,  138 => 43,  136 => 42,  134 => 41,  132 => 40,  130 => 39,  128 => 38,  126 => 37,  124 => 36,  122 => 35,  120 => 34,  118 => 33,  116 => 32,  114 => 31,  112 => 30,  110 => 29,  108 => 28,  106 => 27,  104 => 26,  102 => 25,  100 => 24,  98 => 23,  96 => 22,  94 => 21,  92 => 20,  90 => 19,  88 => 18,  86 => 17,  84 => 16,  82 => 15,  80 => 14,  78 => 13,  76 => 12,  74 => 11,  72 => 10,  70 => 9,  68 => 8,  62 => 4,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

{{ form(form) }}


    {#<form action=\"\" method=\"POST\">#}
    {#    <div class=\"form-group\">#}
    {#        <fieldset>#}
    {#          <label class=\"control-label\" for=\"username\">username</label>#}
    {#          <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"username\" readonly=\"\">#}
    {#        </fieldset>#}
    {#      </div>#}
    {#      <div class=\"form-group\">#}
    {#        <fieldset>#}
    {#          <label class=\"control-label\" for=\"readOnlyInput\">password</label>#}
    {#          <input class=\"form-control\" id=\"readOnlyInput\" type=\"password\" placeholder=\"password\" readonly=\"\">#}
    {#        </fieldset>#}
    {#      </div>#}
    {#    <label for=\"exampleInputEmail1\">Email address</label>#}
    {#    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"example@insat.u-carthage.tn\">#}
    {#    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>#}
    {#    <div class=\"form-group\">#}
    {#        <select class=\"custom-select\">#}
    {#          <option selected=\"\">registering as </option>#}
    {#          <option value=\"1\">student</option>#}
    {#          <option value=\"2\">instructor</option>#}
    {#        </select>#}
    {#    </div>#}
    {#    <legend>choose you group</legend>#}
    {#    <div class=\"form-group\">#}
    {#      <div class=\"custom-control custom-radio\">#}
    {#        <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\" checked=\"\">#}
    {#        <label class=\"custom-control-label\" for=\"customRadio1\">GL2/1</label>#}
    {#      </div>#}
    {#      <div class=\"custom-control custom-radio\">#}
    {#        <input type=\"radio\" id=\"customRadio2\" name=\"customRadio\" class=\"custom-control-input\">#}
    {#        <label class=\"custom-control-label\" for=\"customRadio2\">GL2/2</label>#}
    {#      </div>#}
    {#    </div>#}
    {#    </fieldset>#}
    {#    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>#}
    {#    <button type=\"reset\" class=\"btn btn-primary\">Reset</button>#}
    {#    </fieldset>#}
    {#</form>#}

{% endblock %}
", "default/register.html.twig", "C:\\Users\\choun\\Documents\\GitHub\\insatien\\templates\\default\\register.html.twig");
    }
}
