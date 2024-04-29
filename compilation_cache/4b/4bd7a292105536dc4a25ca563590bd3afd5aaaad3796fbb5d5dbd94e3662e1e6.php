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

/* widget.twig */
class __TwigTemplate_f13ce2f445ac6b146f8c10eb85b62f2bbef27ae6d1f45f95aa91217f80dc3cbf extends Template
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
    .widget {
        flex: 1 0 28%;
        height: 200px;
        min-width: 400px;
        display: flex;
        padding: var(--padding);
        outline: 1px solid var(--borderColor);
        background: var(--backgroundColor);
        border-radius: var(--borderRadius);
        transition: all 0.2s;
    }

    .widget:hover {
        z-index: 1;
    }

    .widget.odd:hover {
        transform: perspective(1000px) rotateZ(2deg) rotateX(10deg) scale(1.1);
        transform-origin: center center;
    }

    .widget.even:hover {
        transform: perspective(1000px) rotateZ(-2deg) rotateX(10deg) scale(1.1);
        transform-origin: center center;
    }

    .image {
        background-size: 100% !important;
        width: 200px;
        flex-shrink: 0;
    }

    .details {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-items: stretch;
        padding: 0px 10px;
        position: relative;
    }

    .details h1 {
        line-height: 1em;
    }

    .details p {
        padding: 5px 0px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        column-gap: 5px;
        justify-self: flex-end;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .buttons button {
        appearance: none;
        border: 0;
        background: var(--buttonColor);
        color: var(--buttonTextColor);
        padding: 10px 20px;
        border-radius: var(--borderRadius);
        cursor: pointer;
        transition: all 0.2s;
    }

    .buttons button:hover {
        filter: brightness(50%);
    }

    button.red {
        background-color: rgb(198, 94, 94);
    }
</style>

<div class=\"widget\">
    <div class=\"image\" style=\"background:url(";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widgetData"] ?? null), "image", [], "any", false, false, false, 82), "html", null, true);
        yield ")\" alt=\"\"></div>
    <div class=\"details\">
        <h1 class=\"title\">";
        // line 84
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widgetData"] ?? null), "title", [], "any", false, false, false, 84), "html", null, true);
        yield "</h1>
        <p class=\"text\">";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::titleStringFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["widgetData"] ?? null), "text", [], "any", false, false, false, 85))), "html", null, true);
        yield "</p>
        <div class=\"buttons\">
            <button><a href=\"/details/";
        // line 87
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widgetData"] ?? null), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "\"></a>GO</button>
            <button class=\"red\">NOPE ";
        // line 88
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["widgetData"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
        yield "</button>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "widget.twig";
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
        return array (  139 => 88,  135 => 87,  130 => 85,  126 => 84,  121 => 82,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "widget.twig", "F:\\phpdev\\htdocs\\twig\\templates\\widget.twig");
    }
}
