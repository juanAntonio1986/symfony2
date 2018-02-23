<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de875166e87b384f485a3460677ebbef60ea2fb1d61f5ba3b7b45e1734a31896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de875166e87b384f485a3460677ebbef60ea2fb1d61f5ba3b7b45e1734a31896->enter($__internal_de875166e87b384f485a3460677ebbef60ea2fb1d61f5ba3b7b45e1734a31896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_867b427758a804c7cbc336a867cdbb783c5477b47e94b0acc3d658f2588fa679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867b427758a804c7cbc336a867cdbb783c5477b47e94b0acc3d658f2588fa679->enter($__internal_867b427758a804c7cbc336a867cdbb783c5477b47e94b0acc3d658f2588fa679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de875166e87b384f485a3460677ebbef60ea2fb1d61f5ba3b7b45e1734a31896->leave($__internal_de875166e87b384f485a3460677ebbef60ea2fb1d61f5ba3b7b45e1734a31896_prof);

        
        $__internal_867b427758a804c7cbc336a867cdbb783c5477b47e94b0acc3d658f2588fa679->leave($__internal_867b427758a804c7cbc336a867cdbb783c5477b47e94b0acc3d658f2588fa679_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c2135c01735bd0d35950ea3f34ccb2957c40a5874ee50ccfdb2d56642b6b5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2135c01735bd0d35950ea3f34ccb2957c40a5874ee50ccfdb2d56642b6b5f5->enter($__internal_2c2135c01735bd0d35950ea3f34ccb2957c40a5874ee50ccfdb2d56642b6b5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5ae58a731d71c5e7738b79802ce8fa1a3c559315b586d2a387ed3e121c7a912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ae58a731d71c5e7738b79802ce8fa1a3c559315b586d2a387ed3e121c7a912->enter($__internal_c5ae58a731d71c5e7738b79802ce8fa1a3c559315b586d2a387ed3e121c7a912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c5ae58a731d71c5e7738b79802ce8fa1a3c559315b586d2a387ed3e121c7a912->leave($__internal_c5ae58a731d71c5e7738b79802ce8fa1a3c559315b586d2a387ed3e121c7a912_prof);

        
        $__internal_2c2135c01735bd0d35950ea3f34ccb2957c40a5874ee50ccfdb2d56642b6b5f5->leave($__internal_2c2135c01735bd0d35950ea3f34ccb2957c40a5874ee50ccfdb2d56642b6b5f5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff72c55567f3f2777c737134d0875c6ea1fb74bb2a0497977c12061da51ac7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff72c55567f3f2777c737134d0875c6ea1fb74bb2a0497977c12061da51ac7e0->enter($__internal_ff72c55567f3f2777c737134d0875c6ea1fb74bb2a0497977c12061da51ac7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb87ff55a05e60ed7653dc49155a5ef3c71234f0e625b94098095e3beb225650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb87ff55a05e60ed7653dc49155a5ef3c71234f0e625b94098095e3beb225650->enter($__internal_bb87ff55a05e60ed7653dc49155a5ef3c71234f0e625b94098095e3beb225650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bb87ff55a05e60ed7653dc49155a5ef3c71234f0e625b94098095e3beb225650->leave($__internal_bb87ff55a05e60ed7653dc49155a5ef3c71234f0e625b94098095e3beb225650_prof);

        
        $__internal_ff72c55567f3f2777c737134d0875c6ea1fb74bb2a0497977c12061da51ac7e0->leave($__internal_ff72c55567f3f2777c737134d0875c6ea1fb74bb2a0497977c12061da51ac7e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b34370de1f0fcf5a3b94b4e4e5608826edb781628b89442dd43768d172576150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34370de1f0fcf5a3b94b4e4e5608826edb781628b89442dd43768d172576150->enter($__internal_b34370de1f0fcf5a3b94b4e4e5608826edb781628b89442dd43768d172576150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_469c6b3a8c21b1dfb1b5a5d220b1be4d8bd5aecd7e3aafed4716ac1413572a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469c6b3a8c21b1dfb1b5a5d220b1be4d8bd5aecd7e3aafed4716ac1413572a5a->enter($__internal_469c6b3a8c21b1dfb1b5a5d220b1be4d8bd5aecd7e3aafed4716ac1413572a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_469c6b3a8c21b1dfb1b5a5d220b1be4d8bd5aecd7e3aafed4716ac1413572a5a->leave($__internal_469c6b3a8c21b1dfb1b5a5d220b1be4d8bd5aecd7e3aafed4716ac1413572a5a_prof);

        
        $__internal_b34370de1f0fcf5a3b94b4e4e5608826edb781628b89442dd43768d172576150->leave($__internal_b34370de1f0fcf5a3b94b4e4e5608826edb781628b89442dd43768d172576150_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/juanantonio/NetBeansProjects/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
