<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedore $vendedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendedore->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vendedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vendedores form content">
            <?= $this->Form->create($vendedore) ?>
            <fieldset>
                <legend><?= __('Edit Vendedor') ?></legend>
                <?php
                    echo $this->Form->control('Nome');
                    echo $this->Form->control('Turno');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
