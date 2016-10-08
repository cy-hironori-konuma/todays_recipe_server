<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['controller' => 'RecipeFoods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['controller' => 'RecipeFoods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foods form large-9 medium-8 columns content">
    <?= $this->Form->create($food) ?>
    <fieldset>
        <legend><?= __('Add Food') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('unit');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
