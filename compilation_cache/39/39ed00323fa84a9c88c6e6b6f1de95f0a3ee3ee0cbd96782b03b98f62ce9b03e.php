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

/* index.twig */
class __TwigTemplate_d4c01f6ad876a73e12a3ba0b1aaecbfdf3aa6b95e47e07e33e298fd54b03fdbc extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>TWIG - Test</title>
    <link rel=\"stylesheet\" href=\"style.css\">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap');

        .items {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            column-gap: 25px;
            row-gap: 25px;
            justify-content: space-around;
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class=\"wrapper\">
        ";
        // line 29
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "nav.twig");
        yield "
        ";
        // line 31
        yield "        <div class=\"items\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["widgetData"]) {
            // line 33
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "widget.twig");
            yield "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widgetData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const widgets = document.querySelectorAll('.widget');
            widgets.forEach((w, i) => {
                let odd = i % 2 == 0;
                w.classList.add(odd ? 'odd' : 'even');
                const image = w.querySelector('.image');
                w.addEventListener('mousemove', (e) => {
                    let xOff = e.clientX - w.offsetLeft - w.clientWidth / 2;
                    let yOff = e.clientY - w.offsetTop - w.clientHeight / 2;
                    image.style.transform = `translateX(\${xOff * -0.005}px) translateY(\${yOff * -0.01}px)`;
                }, true);
            });
        });

        document.querySelector('.widget')
    </script>
</body>

</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.twig";
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
        return array (  109 => 35,  92 => 33,  75 => 32,  72 => 31,  67 => 29,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "F:\\phpdev\\htdocs\\twig\\templates\\index.twig");
    }
}
