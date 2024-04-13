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
            <?= $this->Html->link(__('Edit Carrinho De Compra'), ['action' => 'edit', $carrinhoDeCompra->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carrinho De Compra'), ['action' => 'delete', $carrinhoDeCompra->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $carrinhoDeCompra->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carrinho De Compras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carrinho De Compra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carrinhoDeCompras view content">
            <h3><?= h($carrinhoDeCompra->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($carrinhoDeCompra->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('IDUsuario') ?></th>
                    <td><?= $carrinhoDeCompra->IDUsuario === null ? '' : $this->Number->format($carrinhoDeCompra->IDUsuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IDProduto') ?></th>
                    <td><?= $carrinhoDeCompra->IDProduto === null ? '' : $this->Number->format($carrinhoDeCompra->IDProduto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $carrinhoDeCompra->Quantidade === null ? '' : $this->Number->format($carrinhoDeCompra->Quantidade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
