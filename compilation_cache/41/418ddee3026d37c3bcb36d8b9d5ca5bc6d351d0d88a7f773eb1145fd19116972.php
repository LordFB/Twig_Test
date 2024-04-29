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

/* nav.twig */
class __TwigTemplate_e1714de27857fd9f25319b355036cc52e781783b45b8c2f13fbfb6d7c5a983a3 extends Template
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
        // line 1
        yield "<style>
    nav {
        width: 100vw;
        display: flex;
        background: var(--buttonColor);
    }

    nav>a {
        color: var(--textColor);
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        padding: 10px 15px;
        background: var(--buttonColor);
        color: var(--buttonTextColor);
        font-weight: 400;
        transition: all 0.2s;
        border-left: 1px solid var(--borderColor)
    }

    nav a:hover {
        filter: brightness(50%);
    }
</style>

<nav>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["nav"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navItem"]) {
            // line 27
            yield "    <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["navItem"], "url", [], "any", false, false, false, 27), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["navItem"], "text", [], "any", false, false, false, 27), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "</nav>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.twig";
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
        return array (  80 => 29,  69 => 27,  65 => 26,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.twig", "F:\\phpdev\\htdocs\\twig\\templates\\nav.twig");
    }
}
