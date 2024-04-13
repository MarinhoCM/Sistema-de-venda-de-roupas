<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administradore $administradore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administradore->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Administradores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="administradores form content">
            <?= $this->Form->create($administradore) ?>
            <fieldset>
                <legend><?= __('Edit Administradore') ?></legend>
                <?php
                    echo $this->Form->control('Nome');
                    echo $this->Form->control('Cargo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
