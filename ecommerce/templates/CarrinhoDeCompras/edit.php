<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarrinhoDeCompra $carrinhoDeCompra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carrinhoDeCompra->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrinhoDeCompra->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carrinho De Compras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carrinhoDeCompras form content">
            <?= $this->Form->create($carrinhoDeCompra) ?>
            <fieldset>
                <legend><?= __('Edit Carrinho De Compra') ?></legend>
                <?php
                    echo $this->Form->control('IDUsuario');
                    echo $this->Form->control('IDProduto');
                    echo $this->Form->control('Quantidade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
