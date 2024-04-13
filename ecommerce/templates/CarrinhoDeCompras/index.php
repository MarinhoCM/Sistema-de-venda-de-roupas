<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CarrinhoDeCompra> $carrinhoDeCompras
 */
?>
<div class="carrinhoDeCompras index content">
    <?= $this->Html->link(__('New Carrinho De Compra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carrinho De Compras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('IDUsuario') ?></th>
                    <th><?= $this->Paginator->sort('IDProduto') ?></th>
                    <th><?= $this->Paginator->sort('Quantidade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carrinhoDeCompras as $carrinhoDeCompra): ?>
                <tr>
                    <td><?= $this->Number->format($carrinhoDeCompra->ID) ?></td>
                    <td><?= $carrinhoDeCompra->IDUsuario === null ? '' : $this->Number->format($carrinhoDeCompra->IDUsuario) ?></td>
                    <td><?= $carrinhoDeCompra->IDProduto === null ? '' : $this->Number->format($carrinhoDeCompra->IDProduto) ?></td>
                    <td><?= $carrinhoDeCompra->Quantidade === null ? '' : $this->Number->format($carrinhoDeCompra->Quantidade) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carrinhoDeCompra->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrinhoDeCompra->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrinhoDeCompra->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $carrinhoDeCompra->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
