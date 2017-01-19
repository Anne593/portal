<%
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
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$associations += ['BelongsTo' => [], 'HasOne' => [], 'HasMany' => [], 'BelongsToMany' => []];
$immediateAssociations = $associations['BelongsTo'] + $associations['HasOne'];
$associationFields = collection($fields)
    ->map(function($field) use ($immediateAssociations) {
        foreach ($immediateAssociations as $alias => $details) {
            if ($field === $details['foreignKey']) {
                return [$field => $details];
            }
        }
    })
    ->filter()
    ->reduce(function($fields, $value) {
        return $fields + $value;
    }, []);

$groupedFields = collection($fields)
    ->filter(function($field) use ($schema) {
        return $schema->columnType($field) !== 'binary';
    })
    ->groupBy(function($field) use ($schema, $associationFields) {
        $type = $schema->columnType($field);
        if (isset($associationFields[$field])) {
            return 'string';
        }
        if (in_array($type, ['integer', 'float', 'decimal', 'biginteger'])) {
            return 'number';
        }
        if (in_array($type, ['date', 'time', 'datetime', 'timestamp'])) {
            return 'date';
        }
        return in_array($type, ['text', 'boolean']) ? $type : 'string';
    })
    ->toArray();

$groupedFields += ['number' => [], 'string' => [], 'boolean' => [], 'date' => [], 'text' => []];
$pk = "\$$singularVar->{$primaryKey[0]}";
%>
<?php
$this->assign('title', __('<%= Inflector::underscore($pluralVar) %>.view.title'));
?>

<h1 class="page-header">
    <?= __('<%= Inflector::underscore($pluralVar) %>.view.title') ?>
    <div class="pull-right">
        <?= $this->CkTools->editButton($<%= $singularVar %>) ?>
        <?= $this->ListFilter->backToListButton() ?>
    </div>
</h1>

<div class="<%= Inflector::dasherize($pluralVar) %> view">
    <dl class="dl dl-horizontal">
<% if ($groupedFields['string']) : %>
<%      foreach ($groupedFields['string'] as $field) : %>
<%          if (isset($associationFields[$field])) :
                $details = $associationFields[$field];
%>

        <dt><?= __('<%= $details['property'] %>') ?></dt>
        <dd><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></dd>
<%          else : %>

        <dt><?= __('<%= Inflector::underscore($singularVar) %>.<%= $field %>') ?></dt>
        <dd><?= h($<%= $singularVar %>-><%= $field %>) ?></dd>
<%          endif; %>
<%      endforeach; %>
<% endif; %>
<% if ($groupedFields['number']) : %>
<%      foreach ($groupedFields['number'] as $field) : %>

        <dt><?= __('<%= Inflector::underscore($singularVar) %>.<%= $field %>') ?></dt>
        <dd><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></dd>
<%      endforeach; %>
<% endif; %>
<% if ($groupedFields['date']) : %>
<%      foreach ($groupedFields['date'] as $field) : %>

        <dt><?= __('<%= (($field == 'created' || $field == 'modified') ? $field : Inflector::underscore($singularVar) . '.' . $field) %>') ?></dt>
        <dd><?= h($<%= $singularVar %>-><%= $field %>) ?></dd>
<%      endforeach; %>
<% endif; %>
<% if ($groupedFields['boolean']) : %>
<%      foreach ($groupedFields['boolean'] as $field) : %>

        <dt><?= __('<%= Inflector::underscore($singularVar) %>.<%= $field %>') ?></dt>
        <dd><?= $<%= $singularVar %>-><%= $field %> ? __('yes') : __('no'); ?></dd>
<%      endforeach; %>
<% endif; %>
<% if ($groupedFields['text']) : %>
<%      foreach ($groupedFields['text'] as $field) : %>

        <dt><?= __('<%= Inflector::underscore($singularVar) %>.<%= $field %>') ?></dt>
        <dd><?= $this->Text->autoParagraph(h($<%= $singularVar %>-><%= $field %>)); ?></dd>
<%      endforeach; %>
<% endif; %>
    </dl>
</div>

<%
$relations = $associations['HasMany'] + $associations['BelongsToMany'];
foreach ($relations as $alias => $details):
    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize($details['controller']);
%>
<div class="related">
    <h4 class="subheader"><?= __('<%= Inflector::underscore($details['controller']) %>') ?></h4>
    <?php if (!empty($<%= $singularVar %>-><%= $details['property'] %>)): ?>
    <div class="table-responsive">
        <table class="table">
            <tr>
<% foreach ($details['fields'] as $field): %>
                <th><?= __('<%= Inflector::singularize($otherSingularVar) %>.<%= $field %>') ?></th>
<% endforeach; %>
                <th class="actions"><?= __('lists.actions') ?></th>
            </tr>
            <?php foreach ($<%= $singularVar %>-><%= $details['property'] %> as $<%= $otherSingularVar %>): ?>
            <tr>
<% foreach ($details['fields'] as $field): %>
                <td><?= h($<%= $otherSingularVar %>-><%= $field %>) ?></td>
<% endforeach; %>
<% $otherPk = "\${$otherSingularVar}->{$details['primaryKey'][0]}"; %>
                <td class="actions">
                    <?= $this->CkTools->viewButton($<%= $otherSingularVar %>) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<% endforeach; %>
