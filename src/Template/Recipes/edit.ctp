<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recipes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Recipe Foods'), ['controller' => 'RecipeFoods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipe Food'), ['controller' => 'RecipeFoods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recipes form large-9 medium-8 columns content">
    <?= $this->Form->create($recipe) ?>
    <fieldset>
        <legend><?= __('Edit Recipe') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('amount');
            echo $this->Form->input('order');
            echo $this->Form->input('created_at');
            echo $this->Form->input('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
