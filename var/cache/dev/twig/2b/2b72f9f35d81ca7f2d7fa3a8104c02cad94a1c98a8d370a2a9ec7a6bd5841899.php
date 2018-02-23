<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_14cbb9af9ab891df39ec22a45f294cfcb0d0b20353df1dec782260345aced956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cbb9af9ab891df39ec22a45f294cfcb0d0b20353df1dec782260345aced956->enter($__internal_14cbb9af9ab891df39ec22a45f294cfcb0d0b20353df1dec782260345aced956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7b133b2a559bcda3c8db3626ec914ee27b0ffa83a9d628f55f9cdb94dca86de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b133b2a559bcda3c8db3626ec914ee27b0ffa83a9d628f55f9cdb94dca86de8->enter($__internal_7b133b2a559bcda3c8db3626ec914ee27b0ffa83a9d628f55f9cdb94dca86de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14cbb9af9ab891df39ec22a45f294cfcb0d0b20353df1dec782260345aced956->leave($__internal_14cbb9af9ab891df39ec22a45f294cfcb0d0b20353df1dec782260345aced956_prof);

        
        $__internal_7b133b2a559bcda3c8db3626ec914ee27b0ffa83a9d628f55f9cdb94dca86de8->leave($__internal_7b133b2a559bcda3c8db3626ec914ee27b0ffa83a9d628f55f9cdb94dca86de8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5abf458041f8e1efc903514165a4bcf9cddc57f7ce265613035e9d52dff60b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5abf458041f8e1efc903514165a4bcf9cddc57f7ce265613035e9d52dff60b1->enter($__internal_f5abf458041f8e1efc903514165a4bcf9cddc57f7ce265613035e9d52dff60b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c803ebbc5ab90edc3ab88c68944a6190bb0ce699a1a6717b244058d2594e8ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c803ebbc5ab90edc3ab88c68944a6190bb0ce699a1a6717b244058d2594e8ee8->enter($__internal_c803ebbc5ab90edc3ab88c68944a6190bb0ce699a1a6717b244058d2594e8ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c803ebbc5ab90edc3ab88c68944a6190bb0ce699a1a6717b244058d2594e8ee8->leave($__internal_c803ebbc5ab90edc3ab88c68944a6190bb0ce699a1a6717b244058d2594e8ee8_prof);

        
        $__internal_f5abf458041f8e1efc903514165a4bcf9cddc57f7ce265613035e9d52dff60b1->leave($__internal_f5abf458041f8e1efc903514165a4bcf9cddc57f7ce265613035e9d52dff60b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0bf2b27820a24832259a48064880b873a484aefcbf0fa5750cd2ae47b912f4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf2b27820a24832259a48064880b873a484aefcbf0fa5750cd2ae47b912f4c3->enter($__internal_0bf2b27820a24832259a48064880b873a484aefcbf0fa5750cd2ae47b912f4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d23b08bf6df5fbaee095151e8c01d8dfe6285aa288363d40d0a25aa3f8e34cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23b08bf6df5fbaee095151e8c01d8dfe6285aa288363d40d0a25aa3f8e34cb6->enter($__internal_d23b08bf6df5fbaee095151e8c01d8dfe6285aa288363d40d0a25aa3f8e34cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d23b08bf6df5fbaee095151e8c01d8dfe6285aa288363d40d0a25aa3f8e34cb6->leave($__internal_d23b08bf6df5fbaee095151e8c01d8dfe6285aa288363d40d0a25aa3f8e34cb6_prof);

        
        $__internal_0bf2b27820a24832259a48064880b873a484aefcbf0fa5750cd2ae47b912f4c3->leave($__internal_0bf2b27820a24832259a48064880b873a484aefcbf0fa5750cd2ae47b912f4c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce0f66c29eec5d815cb5132f3be203e08979f802e7b4751871ec37f11befa30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0f66c29eec5d815cb5132f3be203e08979f802e7b4751871ec37f11befa30e->enter($__internal_ce0f66c29eec5d815cb5132f3be203e08979f802e7b4751871ec37f11befa30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87fff0afa4898b1c74d1244f8be7c4368f4591045c9e59f44abb49c6a785af3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fff0afa4898b1c74d1244f8be7c4368f4591045c9e59f44abb49c6a785af3f->enter($__internal_87fff0afa4898b1c74d1244f8be7c4368f4591045c9e59f44abb49c6a785af3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_87fff0afa4898b1c74d1244f8be7c4368f4591045c9e59f44abb49c6a785af3f->leave($__internal_87fff0afa4898b1c74d1244f8be7c4368f4591045c9e59f44abb49c6a785af3f_prof);

        
        $__internal_ce0f66c29eec5d815cb5132f3be203e08979f802e7b4751871ec37f11befa30e->leave($__internal_ce0f66c29eec5d815cb5132f3be203e08979f802e7b4751871ec37f11befa30e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/juanantonio/NetBeansProjects/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
