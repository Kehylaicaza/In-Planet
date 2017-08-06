<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typeofemployee $typeofemployee
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typeofemployee'), ['action' => 'edit', $typeofemployee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typeofemployee'), ['action' => 'delete', $typeofemployee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeofemployee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typeofemployees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeofemployee'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeofemployees view large-9 medium-8 columns content">
    <h3><?= h($typeofemployee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($typeofemployee->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeofemployee->id) ?></td>
        </tr>
    </table>
</div>
