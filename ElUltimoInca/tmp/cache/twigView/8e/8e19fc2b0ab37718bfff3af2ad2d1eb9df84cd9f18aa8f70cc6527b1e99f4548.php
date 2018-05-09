<?php

/* C:\xampp\htdocs\Proyecto_Vino\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\Template\Bake\Template\view.twig */
class __TwigTemplate_d1d79dfaddf6b4b091815d9ad776d45b098ec48c248287fd2e36118e44c72170 extends Twig_Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\view.twig"));

        // line 16
        echo "<?php
/**
* @var \\";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["namespace"]) ? $context["namespace"] : null), "html", null, true);
        echo "\\View\\AppView \$this
* @var \\";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["entityClass"]) ? $context["entityClass"] : null), "html", null, true);
        echo " \$";
        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
        echo "
*/
?>
<div class=\"hide\">
    <?= \$this->layout = \"Materialize.materialize\"; ?>
</div>
";
        // line 25
        $context["associations"] = twig_array_merge(array("BelongsTo" => array(), "HasOne" => array(), "HasMany" => array(), "BelongsToMany" => array()), (isset($context["associations"]) ? $context["associations"] : null));
        // line 26
        $context["fieldsData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "getViewFieldsData", array(0 => (isset($context["fields"]) ? $context["fields"] : null), 1 => (isset($context["schema"]) ? $context["schema"] : null), 2 => (isset($context["associations"]) ? $context["associations"] : null)), "method");
        // line 27
        $context["associationFields"] = $this->getAttribute((isset($context["fieldsData"]) ? $context["fieldsData"] : null), "associationFields", array());
        // line 28
        $context["groupedFields"] = $this->getAttribute((isset($context["fieldsData"]) ? $context["fieldsData"] : null), "groupedFields", array());
        // line 29
        $context["pK"] = ((("\$" . (isset($context["singularVar"]) ? $context["singularVar"] : null)) . "->") . $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, array(), "array"));
        // line 30
        echo "<div class=\"row\">
    <div class=\"col s12 m3\">
        <div class=\"card darken-1\">
            <div class=\"card-content white-text\">
                <span class=\"card-title green-text\"><?= __('Actions') ?></span>
                <div class=\"card-action\">
                    <li class=\"padding-action\"><?= \$this->Html->link(__('Edit ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'edit', ";
        echo (isset($context["pK"]) ? $context["pK"] : null);
        echo "]) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Form->postLink(__('Delete ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'delete', ";
        echo (isset($context["pK"]) ? $context["pK"] : null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo (isset($context["pK"]) ? $context["pK"] : null);
        echo ")]) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('List ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["pluralHumanName"]) ? $context["pluralHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'index']) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'add']) ?> </li>
";
        // line 40
        $context["done"] = array();
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) ? $context["associations"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 43
                if (( !($this->getAttribute($context["details"], "controller", array()) === $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "name", array())) && !twig_in_filter($this->getAttribute($context["details"], "controller", array()), (isset($context["done"]) ? $context["done"] : null)))) {
                    // line 44
                    echo "                    <li class=\"padding-action\"><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'index']) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New ";
                    // line 45
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'add']) ?> </li>
";
                    // line 46
                    $context["done"] = twig_array_merge((isset($context["done"]) ? $context["done"] : null), array(0 => "controller"));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"col s12 m9\">
        <div class=\"card darken-1\">
            <div class=\"card-content black-text\">
                <ul class=\"collection with-header\">
                    <li class=\"collection-header\">
                        <h4><?= h(\$";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
        echo "->";
        echo twig_escape_filter($this->env, (isset($context["displayField"]) ? $context["displayField"] : null), "html", null, true);
        echo ") ?></h4>
                    </li>
";
        // line 61
        if ($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "string", array(), "array")) {
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "string", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 63
                if ($this->getAttribute((isset($context["associationFields"]) ? $context["associationFields"] : null), $context["field"], array(), "array")) {
                    // line 64
                    $context["details"] = $this->getAttribute((isset($context["associationFields"]) ? $context["associationFields"] : null), $context["field"], array(), "array");
                    // line 65
                    echo "                    <li class=\"collection-item\">
                        <?= __('";
                    // line 66
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                    echo "') ?>
                        <div class=\"secondary-content\">
                            <?= \$";
                    // line 68
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->has('";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "property", array()), "html", null, true);
                    echo "') ? \$this->Html->link(\$";
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "property", array()), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "displayField", array()), "html", null, true);
                    echo ", ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "controller", array()), "html", null, true);
                    echo "', 'action' => 'view', \$";
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : null), "property", array()), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["details"]) ? $context["details"] : null), "primaryKey", array()), 0, array(), "array"), "html", null, true);
                    echo "]) : '' ?>
                        </div>
                    </li>
";
                } else {
                    // line 72
                    echo "                    <li class=\"collection-item\">
                        <?= __('";
                    // line 73
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                    echo "') ?>
                        <div class=\"secondary-content\">
                            <?= h(\$";
                    // line 75
                    echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?>
                        </div>
                    </li>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 81
        if ($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "HasOne", array())) {
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "HasOne", array()));
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 83
                echo "                    <li class=\"collection-item\">
                        <?= __('";
                // line 84
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                echo "') ?>
                        <div class=\"secondary-content\">
                            <?= \$";
                // line 86
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
                echo "]) : '' ?>
                        </div>
                    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 91
        if ($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "number", array())) {
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "number", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 93
                echo "                    <li class=\"collection-item\">
                        <?= __('";
                // line 94
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?>
                        <div class=\"secondary-content\">
                            <?= \$this->Number->format(\$";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?>
                        </div>
                    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 101
        if ($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "date", array())) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "date", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 103
                echo "                    <li class=\"collection-item\">
                        <?= __('";
                // line 104
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?>
                        <div class=\"secondary-content\">
                            <?= h(\$";
                // line 106
                echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?>
                        </div>
                    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 111
        if ($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "boolean", array())) {
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "boolean", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 113
                echo "                    <li class=\"collection-item\">
                        <?= __('";
                // line 114
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?>
                        <div class=\"secondary-content\">
                            <?= \$";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo " ? '<i class=\"material-icons\" title=\"'. __(\"Yes\") . '\">check</i>'  : '<i class=\"material-icons\" title=\"'. __(\"No\") . '\">close</i>'; ?>
                        </div>
                    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 121
        if ($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "text", array())) {
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupedFields"]) ? $context["groupedFields"] : null), "text", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 123
                echo "                    <li class=\"collection-item\">
                        <?= __('";
                // line 124
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?>
                        <div class=\"secondary-content\">
                            <?= \$this->Text->autoParagraph(h(\$";
                // line 126
                echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ")); ?>
                        </div>
                    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 131
        echo "                </ul>
";
        // line 132
        $context["relations"] = twig_array_merge($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsToMany", array()), $this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "HasMany", array()));
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relations"]) ? $context["relations"] : null));
        foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
            // line 134
            $context["otherSingularVar"] = Cake\Utility\Inflector::variable($context["alias"]);
            // line 135
            $context["otherPluralHumanName"] = Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($this->getAttribute($context["details"], "controller", array())));
            // line 136
            echo "                <div class=\"card-content black-text\">
                    <div class=\"green-text\"><h5><?= __('Related ";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["otherPluralHumanName"]) ? $context["otherPluralHumanName"] : null), "html", null, true);
            echo "') ?></h5></div>
                    <div class=\"collapsible-header\"></div>
                    <?php if (!empty(\$";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
            echo ")): ?>
                    <table class=\"striped responsive-table\">
                        <thead>
                            <tr>
";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 144
                echo "                                <th scope=\"col\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach (\$";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", array()), "html", null, true);
            echo " as \$";
            echo twig_escape_filter($this->env, (isset($context["otherSingularVar"]) ? $context["otherSingularVar"] : null), "html", null, true);
            echo "): ?>
                            <tr>
";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 153
                echo "                                <td><?= h(\$";
                echo twig_escape_filter($this->env, (isset($context["otherSingularVar"]) ? $context["otherSingularVar"] : null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            $context["otherPk"] = ((("\$" . (isset($context["otherSingularVar"]) ? $context["otherSingularVar"] : null)) . "->") . $this->getAttribute($this->getAttribute($context["details"], "primaryKey", array()), 0, array(), "array"));
            // line 156
            echo "                                <td><?= \$product->has('category') ? \$this->Html->link(\$product->category->name, ['controller' => 'Categories', 'action' => 'view', \$product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('View') . '\" >zoom_in</i>', ['controller' => '";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
            echo "', 'action' => 'view', ";
            echo (isset($context["otherPk"]) ? $context["otherPk"] : null);
            echo "]) ?>
                                    <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('Edit') . '\" >create</i>', ['controller' => '";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
            echo "', 'action' => 'edit', ";
            echo (isset($context["otherPk"]) ? $context["otherPk"] : null);
            echo "]) ?>
                                    <?= \$this->Form->postLink('<i class=\"material-icons\" title=\"'. __('Delete') . '\" >delete</i>', 'action' => 'delete', ";
            // line 161
            echo (isset($context["otherPk"]) ? $context["otherPk"] : null);
            echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
            echo (isset($context["otherPk"]) ? $context["otherPk"] : null);
            echo ")]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        </div>
    </div>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 170,  439 => 161,  433 => 160,  427 => 159,  422 => 156,  420 => 155,  409 => 153,  405 => 152,  396 => 150,  390 => 146,  381 => 144,  377 => 143,  368 => 139,  363 => 137,  360 => 136,  358 => 135,  356 => 134,  352 => 133,  350 => 132,  347 => 131,  334 => 126,  329 => 124,  326 => 123,  322 => 122,  320 => 121,  307 => 116,  302 => 114,  299 => 113,  295 => 112,  293 => 111,  280 => 106,  275 => 104,  272 => 103,  268 => 102,  266 => 101,  253 => 96,  248 => 94,  245 => 93,  241 => 92,  239 => 91,  212 => 86,  207 => 84,  204 => 83,  200 => 82,  198 => 81,  184 => 75,  179 => 73,  176 => 72,  153 => 68,  148 => 66,  145 => 65,  143 => 64,  141 => 63,  137 => 62,  135 => 61,  128 => 59,  117 => 50,  106 => 46,  100 => 45,  93 => 44,  91 => 43,  87 => 42,  83 => 41,  81 => 40,  77 => 39,  73 => 38,  65 => 37,  59 => 36,  51 => 30,  49 => 29,  47 => 28,  45 => 27,  43 => 26,  41 => 25,  30 => 19,  26 => 18,  22 => 16,);
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
/**
* @var \\{{ namespace }}\\View\\AppView \$this
* @var \\{{ entityClass }} \${{ singularVar }}
*/
?>
<div class=\"hide\">
    <?= \$this->layout = \"Materialize.materialize\"; ?>
</div>
{% set associations = {'BelongsTo': [], 'HasOne': [], 'HasMany': [], 'BelongsToMany': []}|merge(associations) %}
{% set fieldsData = Bake.getViewFieldsData(fields, schema, associations) %}
{% set associationFields = fieldsData.associationFields %}
{% set groupedFields = fieldsData.groupedFields %}
{% set pK = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
<div class=\"row\">
    <div class=\"col s12 m3\">
        <div class=\"card darken-1\">
            <div class=\"card-content white-text\">
                <span class=\"card-title green-text\"><?= __('Actions') ?></span>
                <div class=\"card-action\">
                    <li class=\"padding-action\"><?= \$this->Html->link(__('Edit {{ singularHumanName }}'), ['action' => 'edit', {{ pK|raw }}]) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Form->postLink(__('Delete {{ singularHumanName }}'), ['action' => 'delete', {{ pK|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pK|raw }})]) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index']) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New {{ singularHumanName }}'), ['action' => 'add']) ?> </li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.controller is not same as(_view.name) and details.controller not in done %}
                    <li class=\"padding-action\"><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index']) ?> </li>
                    <li class=\"padding-action\"><?= \$this->Html->link(__('New {{ alias|underscore|singularize|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add']) ?> </li>
{% set done = done|merge(['controller']) %}
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
                <ul class=\"collection with-header\">
                    <li class=\"collection-header\">
                        <h4><?= h(\${{ singularVar }}->{{ displayField }}) ?></h4>
                    </li>
{% if groupedFields['string'] %}
{% for field in groupedFields['string'] %}
{% if associationFields[field] %}
{% set details = associationFields[field] %}
                    <li class=\"collection-item\">
                        <?= __('{{ field|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?>
                        </div>
                    </li>
{% else %}
                    <li class=\"collection-item\">
                        <?= __('{{ field|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= h(\${{ singularVar }}->{{ field }}) ?>
                        </div>
                    </li>
{% endif %}
{% endfor %}
{% endif %}
{% if associations.HasOne %}
{% for alias, details in associations.HasOne %}
                    <li class=\"collection-item\">
                        <?= __('{{ alias|underscore|singularize|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?>
                        </div>
                    </li>
{% endfor %}
{% endif %}
{% if groupedFields.number %}
{% for field in groupedFields.number %}
                    <li class=\"collection-item\">
                        <?= __('{{ field|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?>
                        </div>
                    </li>
{% endfor %}
{% endif %}
{% if groupedFields.date %}
{% for field in groupedFields.date %}
                    <li class=\"collection-item\">
                        <?= __('{{ field|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= h(\${{ singularVar }}->{{ field }}) ?>
                        </div>
                    </li>
{% endfor %}
{% endif %}
{% if groupedFields.boolean %}
{% for field in groupedFields.boolean %}
                    <li class=\"collection-item\">
                        <?= __('{{ field|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= \${{ singularVar }}->{{ field }} ? '<i class=\"material-icons\" title=\"'. __(\"Yes\") . '\">check</i>'  : '<i class=\"material-icons\" title=\"'. __(\"No\") . '\">close</i>'; ?>
                        </div>
                    </li>
{% endfor %}
{% endif %}
{% if groupedFields.text %}
{% for field in groupedFields.text %}
                    <li class=\"collection-item\">
                        <?= __('{{ field|humanize }}') ?>
                        <div class=\"secondary-content\">
                            <?= \$this->Text->autoParagraph(h(\${{ singularVar }}->{{ field }})); ?>
                        </div>
                    </li>
{% endfor %}
{% endif %}
                </ul>
{% set relations = associations.BelongsToMany|merge(associations.HasMany) %}
{% for alias, details in relations %}
{% set otherSingularVar = alias|variable %}
{% set otherPluralHumanName = details.controller|underscore|humanize %}
                <div class=\"card-content black-text\">
                    <div class=\"green-text\"><h5><?= __('Related {{ otherPluralHumanName }}') ?></h5></div>
                    <div class=\"collapsible-header\"></div>
                    <?php if (!empty(\${{ singularVar }}->{{ details.property }})): ?>
                    <table class=\"striped responsive-table\">
                        <thead>
                            <tr>
{% for field in details.fields %}
                                <th scope=\"col\"><?= __('{{ field|humanize }}') ?></th>
{% endfor %}
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach (\${{ singularVar }}->{{ details.property }} as \${{ otherSingularVar }}): ?>
                            <tr>
{% for field in details.fields %}
                                <td><?= h(\${{ otherSingularVar }}->{{ field }}) ?></td>
{% endfor %}
{% set otherPk = '\$' ~ otherSingularVar ~ '->' ~ details.primaryKey[0] %}
                                <td><?= \$product->has('category') ? \$this->Html->link(\$product->category->name, ['controller' => 'Categories', 'action' => 'view', \$product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('View') . '\" >zoom_in</i>', ['controller' => '{{ details.controller }}', 'action' => 'view', {{ otherPk|raw }}]) ?>
                                    <?= \$this->Html->link('<i class=\"material-icons\" title=\"'. __('Edit') . '\" >create</i>', ['controller' => '{{ details.controller }}', 'action' => 'edit', {{ otherPk|raw }}]) ?>
                                    <?= \$this->Form->postLink('<i class=\"material-icons\" title=\"'. __('Delete') . '\" >delete</i>', 'action' => 'delete', {{ otherPk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ otherPk|raw }})]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
{% endfor %}
        </div>
    </div>
</div>
", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\view.twig", "C:\\xampp\\htdocs\\Proyecto_Vino\\ElUltimoInca/vendor/jeffersonbehling/materialize-theme-cakephp/src\\Template\\Bake\\Template\\view.twig");
    }
}
