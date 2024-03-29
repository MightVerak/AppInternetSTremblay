<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Ampps\www\Tp1\vendor\cakephp\bake\src\Template\Bake\Element\form.twig */
class __TwigTemplate_c2bc9d2f921aedc4b1484a91073e4b901a337beac4ab8e482147e9f08e504443 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        $context["fields"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "filterFields", [0 => (isset($context["fields"]) ? $context["fields"] : null), 1 => (isset($context["schema"]) ? $context["schema"] : null), 2 => (isset($context["modelObject"]) ? $context["modelObject"] : null)], "method");
        // line 17
        echo "<nav class=\"large-3 medium-4 columns\" id=\"actions-sidebar\">
    <ul class=\"side-nav\">
        <li class=\"heading\"><?= __('Actions') ?></li>
";
        // line 20
        if ((strpos((isset($context["action"]) ? $context["action"] : null), "add") === false)) {
            // line 21
            echo "        <li><?= \$this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', \$";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, [], "array"), "html", null, true);
            echo "],
                ['confirm' => __('Are you sure you want to delete # {0}?', \$";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["primaryKey"]) ? $context["primaryKey"] : null), 0, [], "array"), "html", null, true);
            echo ")]
            )
        ?></li>
";
        }
        // line 28
        echo "        <li><?= \$this->Html->link(__('List ";
        echo twig_escape_filter($this->env, (isset($context["pluralHumanName"]) ? $context["pluralHumanName"] : null), "html", null, true);
        echo "'), ['action' => 'index']) ?></li>";
        // line 29
        echo "
";
        // line 30
        $context["done"] = [];
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) ? $context["associations"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 33
                if (( !($this->getAttribute($context["details"], "controller", []) === $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "name", [])) && !twig_in_filter($this->getAttribute($context["details"], "controller", []), (isset($context["done"]) ? $context["done"] : null)))) {
                    // line 34
                    echo "        <li><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'index']) ?></li>
        <li><?= \$this->Html->link(__('New ";
                    // line 35
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore(Cake\Utility\Inflector::singularize($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'add']) ?></li>";
                    // line 36
                    echo "
";
                    // line 37
                    $context["done"] = twig_array_merge((isset($context["done"]) ? $context["done"] : null), [0 => $this->getAttribute($context["details"], "controller", [])]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </ul>
</nav>
<div class=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["pluralVar"]) ? $context["pluralVar"] : null), "html", null, true);
        echo " form large-9 medium-8 columns content\">
    <?= \$this->Form->create(\$";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["singularVar"]) ? $context["singularVar"] : null), "html", null, true);
        echo ") ?>
    <fieldset>
        <legend><?= __('";
        // line 46
        echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize((isset($context["action"]) ? $context["action"] : null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null), "html", null, true);
        echo "') ?></legend>
        <?php
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter($context["field"], (isset($context["primaryKey"]) ? $context["primaryKey"] : null))) {
                // line 49
                if ($this->getAttribute((isset($context["keyFields"]) ? $context["keyFields"] : null), $context["field"], [], "array")) {
                    // line 50
                    $context["fieldData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "columnData", [0 => $context["field"], 1 => (isset($context["schema"]) ? $context["schema"] : null)], "method");
                    // line 51
                    if ($this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "null", [])) {
                        // line 52
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["keyFields"]) ? $context["keyFields"] : null), $context["field"], [], "array"), "html", null, true);
                        echo ", 'empty' => true]);";
                        // line 53
                        echo "
";
                    } else {
                        // line 55
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["keyFields"]) ? $context["keyFields"] : null), $context["field"], [], "array"), "html", null, true);
                        echo "]);";
                        // line 56
                        echo "
";
                    }
                } elseif (!twig_in_filter(                // line 58
$context["field"], [0 => "created", 1 => "modified", 2 => "updated"])) {
                    // line 59
                    $context["fieldData"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "columnData", [0 => $context["field"], 1 => (isset($context["schema"]) ? $context["schema"] : null)], "method");
                    // line 60
                    if ((twig_in_filter($this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "type", []), [0 => "date", 1 => "datetime", 2 => "time"]) && $this->getAttribute((isset($context["fieldData"]) ? $context["fieldData"] : null), "null", []))) {
                        // line 61
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['empty' => true]);";
                        // line 62
                        echo "
";
                    } else {
                        // line 64
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "');";
                        // line 65
                        echo "
";
                    }
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        if ($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsToMany", [])) {
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associations"]) ? $context["associations"] : null), "BelongsToMany", []));
            foreach ($context['_seq'] as $context["assocName"] => $context["assocData"]) {
                // line 72
                echo "            echo \$this->Form->control('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "property", []), "html", null, true);
                echo "._ids', ['options' => \$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "variable", []), "html", null, true);
                echo "]);";
                // line 73
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['assocName'], $context['assocData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 76
        echo "        ?>
    </fieldset>
    <?= \$this->Form->button(__('Submit')) ?>
    <?= \$this->Form->end() ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\Ampps\\www\\Tp1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  194 => 73,  188 => 72,  184 => 71,  182 => 70,  172 => 65,  168 => 64,  164 => 62,  160 => 61,  158 => 60,  156 => 59,  154 => 58,  150 => 56,  144 => 55,  140 => 53,  134 => 52,  132 => 51,  130 => 50,  128 => 49,  123 => 48,  116 => 46,  111 => 44,  107 => 43,  103 => 41,  92 => 37,  89 => 36,  84 => 35,  77 => 34,  75 => 33,  71 => 32,  67 => 31,  65 => 30,  62 => 29,  58 => 28,  49 => 24,  43 => 23,  39 => 21,  37 => 20,  32 => 17,  30 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
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
{% set fields = Bake.filterFields(fields, schema, modelObject) %}
<nav class=\"large-3 medium-4 columns\" id=\"actions-sidebar\">
    <ul class=\"side-nav\">
        <li class=\"heading\"><?= __('Actions') ?></li>
{% if strpos(action, 'add') is same as(false) %}
        <li><?= \$this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', \${{ singularVar }}->{{ primaryKey[0] }}],
                ['confirm' => __('Are you sure you want to delete # {0}?', \${{ singularVar }}->{{ primaryKey[0] }})]
            )
        ?></li>
{% endif %}
        <li><?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index']) ?></li>
        {{- \"\\n\" }}
{%- set done = [] %}
{% for type, data in associations %}
    {%- for alias, details in data %}
        {%- if details.controller is not same as(_view.name) and details.controller not in done %}
        <li><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index']) ?></li>
        <li><?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add']) ?></li>
        {{- \"\\n\" }}
        {%- set done = done|merge([details.controller]) %}
        {%- endif %}
    {%- endfor %}
{% endfor %}
    </ul>
</nav>
<div class=\"{{ pluralVar }} form large-9 medium-8 columns content\">
    <?= \$this->Form->create(\${{ singularVar }}) ?>
    <fieldset>
        <legend><?= __('{{ action|humanize }} {{ singularHumanName }}') ?></legend>
        <?php
{% for field in fields if field not in primaryKey %}
    {%- if keyFields[field] %}
        {%- set fieldData = Bake.columnData(field, schema) %}
        {%- if fieldData.null %}
            echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}, 'empty' => true]);
            {{- \"\\n\" }}
        {%- else %}
            echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}]);
            {{- \"\\n\" }}
        {%- endif %}
    {%- elseif field not in ['created', 'modified', 'updated'] %}
        {%- set fieldData = Bake.columnData(field, schema) %}
        {%- if fieldData.type in ['date', 'datetime', 'time'] and fieldData.null %}
            echo \$this->Form->control('{{ field }}', ['empty' => true]);
            {{- \"\\n\" }}
        {%- else %}
            echo \$this->Form->control('{{ field }}');
    {{- \"\\n\" }}
        {%- endif %}
    {%- endif %}
{%- endfor %}

{%- if associations.BelongsToMany %}
    {%- for assocName, assocData in associations.BelongsToMany %}
            echo \$this->Form->control('{{ assocData.property }}._ids', ['options' => \${{ assocData.variable }}]);
    {{- \"\\n\" }}
    {%- endfor %}
{% endif %}
        ?>
    </fieldset>
    <?= \$this->Form->button(__('Submit')) ?>
    <?= \$this->Form->end() ?>
</div>
", "C:\\Ampps\\www\\Tp1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\form.twig", "C:\\Ampps\\www\\Tp1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\form.twig");
    }
}
