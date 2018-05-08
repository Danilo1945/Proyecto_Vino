<?php

/* C:\xampp\htdocs\Proyecto_Vino\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\Template\Bake\Element\form.twig */
class __TwigTemplate_e90c83a63dc9549e620c21241ad34be90a5b9d8ac2b27f759fcc8db482cac1fc extends Twig_Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Element\\form.twig"));

        // line 1
        echo "<div class=\"hide\">
    <?= \$this->layout = \"Materialize.materialize\"; ?>
</div>
";
        // line 4
        $context["fields"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "filterFields", array(0 => (isset($context["fields"]) ? $context["fields"] : null), 1 => (isset($context["schema"]) ? $context["schema"] : null), 2 => (isset($context["modelObject"]) ? $context["modelObject"] : null)), "method");
        // line 5
        echo "<div class=\"row\">
    <div class=\"col s12 m3\">
        <div class=\"card darken-1\">
            <div class=\"card-content white-text\">
                <span class=\"card-title green-text\">Actions</span>
                <div class=\"card-action\">
";
        // line 11
        if ((strpos((isset($context["action"]) ? $context["action"] : null), "add") === false)) {
            // line 12
            echo "                    <li class=\"padding-action\"><?= \$this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', \$";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, array(), "array"), "html", null, true);
            echo "],
                            ['confirm' => __('Are you sure you want to delete # {0}?', \$";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, array(), "array"), "html", null, true);
            echo ")]
                            )
                            ?></li>
";
        }
        // line 19
        echo "                    <li class=\"padding-action\"><?= \$this->Html->link(__('List ";
        echo twig_escape_filter($this->env, (isset($context["pluralHumanName"]) ? $context["pluralHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'index']) ?></li>";
        echo "
";
        // line 20
        $context["done"] = array();
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) ? $context["associations"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 23
                if (( !($this->getAttribute($context["details"], "controller", array()) === $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "name", array())) && !twig_in_filter($this->getAttribute($context["details"], "controller", array()), (isset($context["done"]) ? $context["done"] : null)))) {
                    // line 24
                    echo "                    <li class=\"padding-action\"><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'index']) ?></li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New ";
                    // line 25
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore(Cake\Utility\Inflector::singularize($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'add']) ?></li>";
                    echo "
";
                    // line 26
                    $context["done"] = twig_array_merge((isset($context["done"]) ? $context["done"] : null), array(0 => $this->getAttribute($context["details"], "controller", array())));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"col s12 m9\">
        <div class=\"card darken-1\">
            <div class=\"card-content black-text\">
                <?= \$this->Form->create(\$";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
        echo ") ?>
                <span class=\"card-title green-text\"><?= __('";
        // line 38
        echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize((isset($context["action"]) ? $context["action"] : null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo "') ?></span>";
        echo "
";
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter($context["field"], (isset($context["primaryKey"]) ? $context["primaryKey"] : null))) {
                // line 40
                if ($this->getAttribute((isset($context["keyFields"]) ? $context["keyFields"] : null), $context["field"], array(), "array")) {
                    // line 41
                    $context["fieldData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "columnData", array(0 => $context["field"], 1 => (isset($context["schema"]) ? $context["schema"] : null)), "method");
                    // line 42
                    if ($this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "null", array())) {
                        // line 43
                        echo "                <div class=\"input-field\">
                    <?= \$this->Form->control('";
                        // line 44
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["keyFields"]) ? $context["keyFields"] : null), $context["field"], array(), "array"), "html", null, true);
                        echo ", 'empty' => true]) ?>
                </div>";
                        // line 45
                        echo "
";
                    } else {
                        // line 47
                        echo "                <div class=\"input-field col s12\">
                    <?= \$this->Form->control('";
                        // line 48
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["keyFields"]) ? $context["keyFields"] : null), $context["field"], array(), "array"), "html", null, true);
                        echo "]) ?>
                </div>";
                        // line 49
                        echo "
";
                    }
                } elseif (!twig_in_filter(                // line 51
$context["field"], array(0 => "created", 1 => "modified", 2 => "updated"))) {
                    // line 52
                    $context["fieldData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "columnData", array(0 => $context["field"], 1 => (isset($context["schema"]) ? $context["schema"] : null)), "method");
                    // line 53
                    if ((twig_in_filter($this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "type", array()), array(0 => "date", 1 => "datetime", 2 => "time")) && $this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "null", array()))) {
                        // line 54
                        if (($this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "type", array()) == "date")) {
                            // line 55
                            echo "                <div class=\"input-field\">
                    <?= \$this->Form->control('";
                            // line 56
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>";
                            // line 57
                            echo "
";
                            echo "
";
                        } elseif (($this->getAttribute(                        // line 58
(isset($context["fieldData"]) ? $context["fieldData"] : null), "type", array()) == "time")) {
                            // line 59
                            echo "                <div class=\"input-field\">
                    <?= \$this->Form->control('";
                            // line 60
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "', ['type' => 'text', 'class' => 'timepicker']) ?>
                </div>";
                            // line 61
                            echo "
";
                        } else {
                            // line 63
                            echo "                <div class=\"col\">
                    <?= \$this->Form->control('";
                            // line 64
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "', ['empty' => true]) ?>
                </div>";
                            // line 65
                            echo "
";
                        }
                    } elseif (($this->getAttribute(                    // line 67
(isset($context["fieldData"]) ? $context["fieldData"] : null), "type", array()) == "boolean")) {
                        // line 68
                        echo "                <?= \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['type' => 'checkbox', 'class' => 'filled-in']) ?>";
                        echo "
";
                    } elseif (($this->getAttribute(                    // line 69
(isset($context["fieldData"]) ? $context["fieldData"] : null), "type", array()) == "text")) {
                        // line 70
                        echo "                <div class=\"row\">
                    <form class=\"col s12\">
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <?= \$this->Form->control('";
                        // line 74
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['class' => 'materialize-textarea']) ?>
                            </div>
                        </div>
                    </form>
                </div>";
                        // line 78
                        echo "
";
                    } else {
                        // line 80
                        if (($context["field"] == "email")) {
                            // line 81
                            echo "                <div class=\"input-field\">
                    <?= \$this->Form->control('";
                            // line 82
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "', ['type' => 'email', 'class' => 'validate']) ?>
                </div>";
                            // line 83
                            echo "
";
                        } else {
                            // line 85
                            echo "                <div class=\"input-field\">
                    <?= \$this->Form->control('";
                            // line 86
                            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                            echo "') ?>
                </div>";
                            // line 87
                            echo "
";
                        }
                    }
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        if ($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsToMany", array())) {
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsToMany", array()));
            foreach ($context['_seq'] as $context["assocName"] => $context["assocData"]) {
                // line 94
                echo "                <div class=\"input-field\">
                    <?= \$this->Form->control('";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "property", array()), "html", null, true);
                echo "._ids', ['options' => \$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "variable", array()), "html", null, true);
                echo "]) ?>";
                echo "
";
                echo "
                </div>";
                // line 96
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['assocName'], $context['assocData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 99
        echo "                <?= \$this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= \$this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Element\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 99,  280 => 96,  271 => 95,  268 => 94,  264 => 93,  262 => 92,  251 => 87,  247 => 86,  244 => 85,  240 => 83,  236 => 82,  233 => 81,  231 => 80,  227 => 78,  220 => 74,  214 => 70,  212 => 69,  206 => 68,  204 => 67,  200 => 65,  196 => 64,  193 => 63,  189 => 61,  185 => 60,  182 => 59,  180 => 58,  175 => 57,  171 => 56,  168 => 55,  166 => 54,  164 => 53,  162 => 52,  160 => 51,  156 => 49,  150 => 48,  147 => 47,  143 => 45,  137 => 44,  134 => 43,  132 => 42,  130 => 41,  128 => 40,  123 => 39,  114 => 38,  110 => 37,  101 => 30,  90 => 26,  83 => 25,  76 => 24,  74 => 23,  70 => 22,  66 => 21,  64 => 20,  58 => 19,  49 => 15,  43 => 14,  39 => 12,  37 => 11,  29 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hide\">
    <?= \$this->layout = \"Materialize.materialize\"; ?>
</div>
{% set fields = Bake.filterFields(fields, schema, modelObject) %}
<div class=\"row\">
    <div class=\"col s12 m3\">
        <div class=\"card darken-1\">
            <div class=\"card-content white-text\">
                <span class=\"card-title green-text\">Actions</span>
                <div class=\"card-action\">
{% if strpos(action, 'add') is same as(false) %}
                    <li class=\"padding-action\"><?= \$this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', \${{ singularVar }}->{{ primaryKey[0] }}],
                            ['confirm' => __('Are you sure you want to delete # {0}?', \${{ singularVar }}->{{ primaryKey[0] }})]
                            )
                            ?></li>
{% endif %}
                    <li class=\"padding-action\"><?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index']) ?></li>{{- \"\\n\" }}
{%- set done = [] %}
{% for type, data in associations %}
{%- for alias, details in data %}
{%- if details.controller is not same as(_view.name) and details.controller not in done %}
                    <li class=\"padding-action\"><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index']) ?></li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add']) ?></li>{{- \"\\n\" }}
{%- set done = done|merge([details.controller]) %}
{%- endif %}
{%- endfor %}
{% endfor %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"col s12 m9\">
        <div class=\"card darken-1\">
            <div class=\"card-content black-text\">
                <?= \$this->Form->create(\${{ singularVar }}) ?>
                <span class=\"card-title green-text\"><?= __('{{ action|humanize }} {{ singularHumanName }}') ?></span>{{- \"\\n\" }}
{% for field in fields if field not in primaryKey %}
{%- if keyFields[field] %}
{%- set fieldData = Bake.columnData(field, schema) %}
{%- if fieldData.null %}
                <div class=\"input-field\">
                    <?= \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}, 'empty' => true]) ?>
                </div>{{- \"\\n\" }}
{%- else %}
                <div class=\"input-field col s12\">
                    <?= \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}]) ?>
                </div>{{- \"\\n\" }}
{%- endif %}
{%- elseif field not in ['created', 'modified', 'updated'] %}
{%- set fieldData = Bake.columnData(field, schema) %}
{%- if fieldData.type in ['date', 'datetime', 'time'] and fieldData.null %}
{% if fieldData.type == 'date' %}
                <div class=\"input-field\">
                    <?= \$this->Form->control('{{ field }}', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>{{- \"\\n\" }}
{% elseif fieldData.type == 'time' %}
                <div class=\"input-field\">
                    <?= \$this->Form->control('{{ field }}', ['type' => 'text', 'class' => 'timepicker']) ?>
                </div>{{- \"\\n\" }}
{%- else %}
                <div class=\"col\">
                    <?= \$this->Form->control('{{ field }}', ['empty' => true]) ?>
                </div>{{- \"\\n\" }}
{%- endif %}
{%- elseif fieldData.type == 'boolean' %}
                <?= \$this->Form->control('{{ field }}', ['type' => 'checkbox', 'class' => 'filled-in']) ?>{{- \"\\n\" }}
{%- elseif fieldData.type == 'text' %}
                <div class=\"row\">
                    <form class=\"col s12\">
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <?= \$this->Form->control('{{ field }}', ['class' => 'materialize-textarea']) ?>
                            </div>
                        </div>
                    </form>
                </div>{{- \"\\n\" }}
{%- else %}
{% if field == 'email' %}
                <div class=\"input-field\">
                    <?= \$this->Form->control('{{ field }}', ['type' => 'email', 'class' => 'validate']) ?>
                </div>{{- \"\\n\" }}
{%- else %}
                <div class=\"input-field\">
                    <?= \$this->Form->control('{{ field }}') ?>
                </div>{{- \"\\n\" }}
{%- endif %}
{%- endif %}
{%- endif %}
{%- endfor %}
{%- if associations.BelongsToMany %}
{%- for assocName, assocData in associations.BelongsToMany %}
                <div class=\"input-field\">
                    <?= \$this->Form->control('{{ assocData.property }}._ids', ['options' => \${{ assocData.variable }}]) ?>{{- \"\\n\" }}
                </div>{{- \"\\n\" }}
{%- endfor %}
{% endif %}
                <?= \$this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= \$this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Element\\form.twig", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Element\\form.twig");
    }
}
