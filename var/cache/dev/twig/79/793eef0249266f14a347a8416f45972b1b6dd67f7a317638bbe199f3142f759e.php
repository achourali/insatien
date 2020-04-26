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

/* inc/navbar.html.twig */
class __TwigTemplate_223f33e470401e55910bac0123c201a1e9778033c0392ee08d469d4c68223286 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"\\\">insatien</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/event\">Events calendar</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/contact\">Contact us</a>
        </li>
      </ul>
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"username\">
        <input class=\"form-control mr-sm-2\" type=\"password\" placeholder=\"password\">
        <button type=\"button\" class=\"btn btn-primary\" type=\"submit\">login</button>
        <a class=\"btn btn-secondary\" href=\"/register\" role=\"button\">sign up</a>
      </form>
    </div>
  </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"\\\">insatien</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/event\">Events calendar</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/contact\">Contact us</a>
        </li>
      </ul>
      <form class=\"form-inline my-2 my-lg-0\">
        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"username\">
        <input class=\"form-control mr-sm-2\" type=\"password\" placeholder=\"password\">
        <button type=\"button\" class=\"btn btn-primary\" type=\"submit\">login</button>
        <a class=\"btn btn-secondary\" href=\"/register\" role=\"button\">sign up</a>
      </form>
    </div>
  </nav>", "inc/navbar.html.twig", "C:\\Users\\choun\\Documents\\GitHub\\insatien\\templates\\inc\\navbar.html.twig");
    }
}
