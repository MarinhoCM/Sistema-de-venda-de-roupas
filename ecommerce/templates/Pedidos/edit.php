<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pedido->IDPedido],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->IDPedido), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pedidos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pedidos form content">
            <?= $this->Form->create($pedido) ?>
            <fieldset>
                <legend><?= __('Edit Pedido') ?></legend>
                <?php
                    echo $this->Form->control('IDUsuario');
                    echo $this->Form->control('DataPedido', ['empty' => true]);
                    echo $this->Form->control('StatusPedido');
                    echo $this->Form->control('Total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
