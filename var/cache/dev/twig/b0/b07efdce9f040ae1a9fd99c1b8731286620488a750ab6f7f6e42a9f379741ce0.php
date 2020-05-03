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

/* pages/quizz.html.twig */
class __TwigTemplate_8bd80b411efc54ad4239e2bf6ea5c6083c1b4266864ec36c233dd2db86e648e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/quizz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/quizz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/quizz.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            // line 6
            echo "
            <ul>
                <li>
                    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 9), "html", null, true);
            echo "
                </li>
                <p style=\"color: green\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BonneReponse"]) || array_key_exists("BonneReponse", $context) ? $context["BonneReponse"] : (function () { throw new RuntimeError('Variable "BonneReponse" does not exist.', 11, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["questions"], "id", [], "any", false, false, false, 11) - 1), [], "array", false, false, false, 11), "html", null, true);
            echo "</p>
                <p style=\"color: red\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["MauvaiseReponse"]) || array_key_exists("MauvaiseReponse", $context) ? $context["MauvaiseReponse"] : (function () { throw new RuntimeError('Variable "MauvaiseReponse" does not exist.', 12, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["questions"], "id", [], "any", false, false, false, 12) - 1), [], "array", false, false, false, 12), "html", null, true);
            echo ",
                ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["MauvaiseReponseDeux"]) || array_key_exists("MauvaiseReponseDeux", $context) ? $context["MauvaiseReponseDeux"] : (function () { throw new RuntimeError('Variable "MauvaiseReponseDeux" does not exist.', 13, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["questions"], "id", [], "any", false, false, false, 13) - 1), [], "array", false, false, false, 13), "html", null, true);
            echo "</p>
            </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/quizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 16,  93 => 13,  89 => 12,  85 => 11,  80 => 9,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% for questions in question %}

            <ul>
                <li>
                    {{ questions.question }}
                </li>
                <p style=\"color: green\">{{ BonneReponse[questions.id - 1] }}</p>
                <p style=\"color: red\">{{ MauvaiseReponse[questions.id - 1] }},
                {{ MauvaiseReponseDeux[questions.id - 1] }}</p>
            </ul>
    {% endfor %}

{% endblock %}", "pages/quizz.html.twig", "/Users/victorgousset/Desktop/dev/my_quiz/templates/pages/quizz.html.twig");
    }
}
