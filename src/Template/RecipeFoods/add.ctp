<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['controller' => 'Recipes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe'), ['controller' => 'Recipes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipeFoods form large-9 medium-8 columns content">
    <?= $this->Form->create($recipeFood) ?>
    <fieldset>
        <legend><?= __('Add Recipe Food') ?></legend>
        <?php
            echo $this->Form->input('recipe_id', ['options' => $recipes]);
            echo $this->Form->input('food_id', ['options' => $foods]);
            echo $this->Form->input('amount');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
