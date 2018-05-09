<?php

/* C:\xampp\htdocs\Proyecto_Vino\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\Template\Bake\Controller\controller.twig */
class __TwigTemplate_d6dc362480c8ab3fee9f07604fcc8249f47d065637d792327b7e644aad435836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Controller\\controller.twig"));

        // line 20
        echo "<?php
namespace ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\Controller";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo ";

use ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\Controller\\AppController;
use Cake\\Event\\Event;

/**
 * ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " Controller
 *
";
        // line 29
        if ((isset($context["defaultModel"]) ? $context["defaultModel"] : null)) {
            // line 30
            echo " * @property \\";
            echo twig_escape_filter($this->env, (isset($context["defaultModel"]) ? $context["defaultModel"] : null), "html", null, true);
            echo " \$";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "
";
        }
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["components"]) ? $context["components"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 34
            $context["classInfo"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "classInfo", array(0 => $context["component"], 1 => "Controller/Component", 2 => "Component"), "method");
            // line 35
            echo " * @property ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classInfo"]) ? $context["classInfo"] : null), "fqn", array()), "html", null, true);
            echo " \$";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classInfo"]) ? $context["classInfo"] : null), "name", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if (twig_in_filter("index", (isset($context["actions"]) ? $context["actions"] : null))) {
            // line 39
            echo " *
 * @method \\";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
            echo "\\Model\\Entity\\";
            echo twig_escape_filter($this->env, (isset($context["entityClassName"]) ? $context["entityClassName"] : null), "html", null, true);
            echo "[]|\\Cake\\Datasource\\ResultSetInterface paginate(\$object = null, array \$settings = [])
";
        }
        // line 42
        echo " */
class ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "Controller extends AppController
{
";
        // line 45
        $context["helpers"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "arrayProperty", array(0 => "helpers", 1 => (isset($context["helpers"]) ? $context["helpers"] : null), 2 => array("indent" => false)), "method");
        // line 46
        if (twig_trim_filter((isset($context["helpers"]) ? $context["helpers"] : null))) {
            // line 47
            echo (isset($context["helpers"]) ? $context["helpers"] : null);
            echo "
";
        }
        // line 50
        $context["components"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "arrayProperty", array(0 => "components", 1 => (isset($context["components"]) ? $context["components"] : null), 2 => array("indent" => false)), "method");
        // line 51
        if (twig_trim_filter((isset($context["components"]) ? $context["components"] : null))) {
            // line 52
            echo (isset($context["components"]) ? $context["components"] : null);
            echo "
";
        }
        // line 54
        echo "
    public function beforeRender(Event \$event)
    {
        parent::beforeRender(\$event);
        \$this->viewBuilder()->setHelpers(['Materialize.Form']);
    }";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 62
echo $context['_view']->element(("Controller/" . $context["action"]),array(),array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "}
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Controller\\controller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 64,  120 => 62,  116 => 61,  109 => 54,  104 => 52,  102 => 51,  100 => 50,  95 => 47,  93 => 46,  91 => 45,  86 => 43,  83 => 42,  76 => 40,  73 => 39,  71 => 38,  60 => 35,  58 => 34,  54 => 33,  46 => 30,  44 => 29,  39 => 27,  32 => 23,  25 => 21,  22 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * Controller bake template file
 *
 * Allows templating of Controllers generated from bake.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
namespace {{ namespace }}\\Controller{{ prefix }};

use {{ namespace }}\\Controller\\AppController;
use Cake\\Event\\Event;

/**
 * {{ name }} Controller
 *
{% if defaultModel %}
 * @property \\{{ defaultModel }} \${{ name }}
{% endif %}

{%- for component in components %}
{% set classInfo = Bake.classInfo(component, 'Controller/Component', 'Component') %}
 * @property {{ classInfo.fqn }} \${{ classInfo.name }}
{% endfor %}

{%- if 'index' in actions %}
 *
 * @method \\{{ namespace }}\\Model\\Entity\\{{ entityClassName }}[]|\\Cake\\Datasource\\ResultSetInterface paginate(\$object = null, array \$settings = [])
{% endif %}
 */
class {{ name }}Controller extends AppController
{
{% set helpers = Bake.arrayProperty('helpers', helpers, {'indent': false})|raw %}
{% if helpers|trim %}
    {{- helpers|raw }}
{% endif %}

{%- set components = Bake.arrayProperty('components', components, {'indent': false})|raw %}
{% if components|trim %}
    {{- components|raw }}
{% endif %}

    public function beforeRender(Event \$event)
    {
        parent::beforeRender(\$event);
        \$this->viewBuilder()->setHelpers(['Materialize.Form']);
    }

{%- for action in actions %}
    {%- element 'Controller/' ~ action %}
{% endfor %}
}
", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Controller\\controller.twig", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Controller\\controller.twig");
    }
}
