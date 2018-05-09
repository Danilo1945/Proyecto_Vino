<?php

/* C:\xampp\htdocs\Proyecto_Vino\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\Template\Bake\Template\index.twig */
class __TwigTemplate_3f9c8f75a3b86d9820615d11f05a2a8656233a5807a3f8b9ea07252725e4d453 extends Twig_Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\index.twig"));

        // line 7
        echo "<?php
/**
 * @var \\";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\View\\AppView \$this
 * @var \\";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["entityClass"]) ? $context["entityClass"] : null), "html", null, true);
        echo "[]|\\Cake\\Collection\\CollectionInterface \$";
        echo twig_escape_filter($this->env, (isset($context["pluralVar"]) ? $context["pluralVar"] : null), "html", null, true);
        echo "
 */
?>
<div class=\"hide\">
    <?= \$this->layout = \"Materialize.materialize\"; ?>
</div>
";
        // line 16
        $context["fields"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "filterFields", array(0 => (isset($context["fields"]) ? $context["fields"] : null), 1 => (isset($context["schema"]) ? $context["schema"] : null), 2 => (isset($context["modelObject"]) ? $context["modelObject"] : null), 3 => (isset($context["indexColumns"]) ? $context["indexColumns"] : null), 4 => array(0 => "binary", 1 => "text")), "method");
        // line 17
        echo "<div class=\"row\">
    <div class=\"col s12 m3\">
        <div class=\"card darken-1\">
            <div class=\"card-content white-text\">
                <span class=\"card-title green-text\">Actions</span>
                <div class=\"card-action\">
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'add']) ?></li>
";
        // line 24
        $context["done"] = array();
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) ? $context["associations"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 27
                if ((($this->getAttribute($context["details"], "navLink", array()) &&  !($this->getAttribute($context["details"], "controller", array()) === $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "name", array()))) && !twig_in_filter($this->getAttribute($context["details"], "controller", array()), (isset($context["done"]) ? $context["done"] : null)))) {
                    // line 28
                    echo "                    <li class=\"padding-action\"><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'index']) ?></li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New ";
                    // line 29
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore(Cake\Utility\Inflector::singularize($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'add']) ?></li>
";
                    // line 30
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
        // line 34
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"col s12 m9\">
        <div class=\"card darken-1\">
            <div class=\"card-content black-text\">
                <span class=\"card-title green-text\"><?= __('";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["pluralHumanName"]) ? $context["pluralHumanName"] : null), "html", null, true);
        echo "') ?></span>
                <table class=\"responsive-table\">
                    <thead>
                        <tr>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 47
            echo "                            <th scope=\"col\"><?= \$this->Paginator->sort('";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "') ?></th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach (\$";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["pluralVar"]) ? $context["pluralVar"] : null), "html", null, true);
        echo " as \$";
        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
        echo "): ?>
                        <tr>
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 56
            $context["isKey"] = false;
            // line 57
            if ($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsTo", array())) {
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsTo", array()));
                foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                    if (($context["field"] == $this->getAttribute($context["details"], "foreignKey", array()))) {
                        // line 59
                        $context["isKey"] = true;
                        // line 60
                        echo "                            <td><?= \$";
                        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                        echo "->has('";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
                        echo "') ? \$this->Html->link(\$";
                        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "displayField", array()), "html", null, true);
                        echo ", ['controller' => '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                        echo "', 'action' => 'view', \$";
                        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details"], "primaryKey", array()), 0, array(), "array"), "html", null, true);
                        echo "]) : '' ?></td>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 63
            if ( !((isset($context["isKey"]) ? $context["isKey"] : null) === true)) {
                // line 64
                $context["columnData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "columnData", array(0 => $context["field"], 1 => (isset($context["schema"]) ? $context["schema"] : null)), "method");
                // line 65
                if (!twig_in_filter($this->getAttribute((isset($context["columnData"]) ? $context["columnData"] : null), "type", array()), array(0 => "integer", 1 => "float", 2 => "decimal", 3 => "biginteger", 4 => "smallinteger", 5 => "tinyinteger"))) {
                    // line 66
                    echo "                            <td><?= h(\$";
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                } else {
                    // line 68
                    echo "                            <td><?= \$this->Number->format(\$";
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        $context["pk"] = ((("\$" . (isset($context["singularVar"]) ? $context["singularVar"] : null)) . "->") . $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, array(), "array"));
        // line 73
        echo "                            <td>
                                <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('View') . '\" >zoom_in</i>', ['action' => 'view', ";
        // line 74
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "], ['escape' => false]) ?>
                                <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('Edit') . '\" >create</i>', ['action' => 'edit', ";
        // line 75
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "], ['escape' => false]) ?>
                                <?= \$this->Form->postLink('<i class=\"material-icons\" title=\"'. __('Delete') . '\" >delete</i>', ['action' => 'delete', ";
        // line 76
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo (isset($context["pk"]) ? $context["pk"] : null);
        echo "), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"center\">
            <ul class=\"pagination\">
                <?= \$this->Paginator->first('<i class=\"material-icons\">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= \$this->Paginator->prev('<i class=\"material-icons\">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= \$this->Paginator->numbers() ?>
                <?= \$this->Paginator->next('<i class=\"material-icons\">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= \$this->Paginator->last('<i class=\"material-icons\">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
            </ul>
        </div>

        <p class=\"right\"><?= \$this->Paginator->counter(['format' => __('Page ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, (isset($context["pages"]) ? $context["pages"] : null), "html", null, true);
        echo ", showing ";
        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : null), "html", null, true);
        echo " record(s) out of ";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo " total')]) ?></p>
    </div>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 94,  216 => 76,  212 => 75,  208 => 74,  205 => 73,  203 => 72,  190 => 68,  182 => 66,  180 => 65,  178 => 64,  176 => 63,  149 => 60,  147 => 59,  142 => 58,  140 => 57,  138 => 56,  134 => 55,  127 => 53,  121 => 49,  112 => 47,  108 => 46,  101 => 42,  91 => 34,  80 => 30,  74 => 29,  67 => 28,  65 => 27,  61 => 26,  57 => 25,  55 => 24,  51 => 23,  43 => 17,  41 => 16,  30 => 10,  26 => 9,  22 => 7,);
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
 * Created by Jefferson Vantuir
 * https://jeffersonbehling.github.io/
 * jefferson.behling@gmail.com
#}
<?php
/**
 * @var \\{{ namespace }}\\View\\AppView \$this
 * @var \\{{ entityClass }}[]|\\Cake\\Collection\\CollectionInterface \${{ pluralVar }}
 */
?>
<div class=\"hide\">
    <?= \$this->layout = \"Materialize.materialize\"; ?>
</div>
{% set fields = Bake.filterFields(fields, schema, modelObject, indexColumns, ['binary', 'text']) %}
<div class=\"row\">
    <div class=\"col s12 m3\">
        <div class=\"card darken-1\">
            <div class=\"card-content white-text\">
                <span class=\"card-title green-text\">Actions</span>
                <div class=\"card-action\">
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New {{ singularHumanName }}'), ['action' => 'add']) ?></li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.navLink and details.controller is not same as(_view.name) and details.controller not in done %}
                    <li class=\"padding-action\"><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index']) ?></li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add']) ?></li>
{% set done = done|merge([details.controller]) %}
{% endif %}
{% endfor %}
{% endfor %}
                </div>
            </div>
        </div>
    </div>

    <div class=\"col s12 m9\">
        <div class=\"card darken-1\">
            <div class=\"card-content black-text\">
                <span class=\"card-title green-text\"><?= __('{{ pluralHumanName }}') ?></span>
                <table class=\"responsive-table\">
                    <thead>
                        <tr>
{% for field in fields %}
                            <th scope=\"col\"><?= \$this->Paginator->sort('{{ field }}') ?></th>
{% endfor %}
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach (\${{ pluralVar }} as \${{ singularVar }}): ?>
                        <tr>
{% for field in fields %}
{% set isKey = false %}
{% if associations.BelongsTo %}
{% for alias, details in associations.BelongsTo if field == details.foreignKey %}
{% set isKey = true %}
                            <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
{% endfor %}
{% endif %}
{% if isKey is not same as(true) %}
{% set columnData = Bake.columnData(field, schema) %}
{% if columnData.type not in ['integer', 'float', 'decimal', 'biginteger', 'smallinteger', 'tinyinteger'] %}
                            <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
{% else %}
                            <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
{% endif %}
{% endif %}
{% endfor %}
{% set pk = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
                            <td>
                                <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('View') . '\" >zoom_in</i>', ['action' => 'view', {{ pk|raw }}], ['escape' => false]) ?>
                                <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('Edit') . '\" >create</i>', ['action' => 'edit', {{ pk|raw }}], ['escape' => false]) ?>
                                <?= \$this->Form->postLink('<i class=\"material-icons\" title=\"'. __('Delete') . '\" >delete</i>', ['action' => 'delete', {{ pk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pk|raw }}), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"center\">
            <ul class=\"pagination\">
                <?= \$this->Paginator->first('<i class=\"material-icons\">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= \$this->Paginator->prev('<i class=\"material-icons\">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= \$this->Paginator->numbers() ?>
                <?= \$this->Paginator->next('<i class=\"material-icons\">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= \$this->Paginator->last('<i class=\"material-icons\">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
            </ul>
        </div>

        <p class=\"right\"><?= \$this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\index.twig", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\index.twig");
    }
}
