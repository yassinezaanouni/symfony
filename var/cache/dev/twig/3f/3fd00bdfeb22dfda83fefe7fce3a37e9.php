<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ticket/index.html.twig */
class __TwigTemplate_a3d357f009e91003f2d1b73d5e622d52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ticket/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Ticket index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Ticket index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Valide</th>
                <th>Total</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 19
            yield "            <tr>
                <td>";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                <td>";
            // line 21
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "valide", [], "any", false, false, false, 21)) ? ("Yes") : ("No"));
            yield "</td>
                <td>";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "total", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\">edit</a>
                </td>
                <td>
                    <a href=\"";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">show</a>
                    ";
            // line 29
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "roles", [], "any", false, false, false, 29))) {
                yield "<a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\">edit</a>";
            }
            // line 30
            yield "                </td>
                <td>
                    ";
            // line 32
            if (CoreExtension::inFilter("ROLE_CAISSIER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "roles", [], "any", false, false, false, 32))) {
                // line 33
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "valide", [], "any", false, false, false, 33)) {
                    // line 34
                    yield "                    <button class=\"bg-muted text-white rounded button \" disabled>
                        pay
                    </button>
                    ";
                } else {
                    // line 38
                    yield "                        <a class=\"bg-primary text-white rounded button p-2\" href=";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choose_ticket", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    yield ">pay</a>
                    ";
                }
                // line 40
                yield "                    ";
            }
            // line 41
            yield "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            yield "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        yield "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ticket/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  175 => 51,  170 => 48,  161 => 44,  154 => 41,  151 => 40,  145 => 38,  139 => 34,  136 => 33,  134 => 32,  130 => 30,  124 => 29,  120 => 28,  114 => 25,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  94 => 19,  89 => 18,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ticket index{% endblock %}

{% block body %}
    <h1>Ticket index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Valide</th>
                <th>Total</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ticket in tickets %}
            <tr>
                <td>{{ ticket.id }}</td>
                <td>{{ ticket.valide ? 'Yes' : 'No' }}</td>
                <td>{{ ticket.total }}</td>
                <td>
                    <a href=\"{{ path('app_ticket_show', {'id': ticket.id}) }}\">show</a>
                    <a href=\"{{ path('app_ticket_edit', {'id': ticket.id}) }}\">edit</a>
                </td>
                <td>
                    <a href=\"{{ path('app_ticket_show', {'id': ticket.id}) }}\">show</a>
                    {% if 'ROLE_ADMIN' in app.user.roles  %}<a href=\"{{ path('app_ticket_edit', {'id': ticket.id}) }}\">edit</a>{% endif %}
                </td>
                <td>
                    {% if 'ROLE_CAISSIER' in app.user.roles  %}
                    {% if ticket.valide %}
                    <button class=\"bg-muted text-white rounded button \" disabled>
                        pay
                    </button>
                    {% else %}
                        <a class=\"bg-primary text-white rounded button p-2\" href={{ path('choose_ticket', {'id': ticket.id}) }}>pay</a>
                    {% endif %}
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_ticket_new') }}\">Create new</a>
{% endblock %}
", "ticket/index.html.twig", "/home/houssein/Desktop/symfony/templates/ticket/index.html.twig");
    }
}
