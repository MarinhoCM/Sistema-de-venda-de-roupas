<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Produto> $produtos
 * @var iterable<\App\Model\Entity\Vendedore> $vendedor
 */
?>
<div class="produtos index content">
    <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Preco') ?></th>
                    <th><?= $this->Paginator->sort('Categoria') ?></th>
                    <th><?= $this->Paginator->sort('QuantidadeEstoque') ?></th>
                    <th><?= $this->Paginator->sort('Vendedor Responsável') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $this->Number->format($produto->ID) ?></td>
                        <td><?= h($produto->Nome) ?></td>
                        <td><?= $this->Number->format($produto->Preco) ?></td>
                        <td><?= h($produto->Categoria) ?></td>
                        <td><?= $this->Number->format($produto->QuantidadeEstoque) ?></td>
                        <?php if ($produto->IDVendedor === null): ?>
                            <td>Sem vendedor responsável, verifique o cadastro.</td>
                        <?php else: ?>
                            <?php $vendedorEncontrado = false; ?>
                            <?php foreach ($vendedores as $vendedor): ?>
                                <?php if ($vendedor->ID === $produto->IDVendedor) :?>
                                    <td><?= h($vendedor->Nome) ?></td>
                                    <?php $vendedorEncontrado = true; ?>
                                    <?php break; ?>
                                <?php endif;?>
                            <?php endforeach; ?>
                            <?php if (!$vendedorEncontrado): ?>
                                <td><em>Vendedor não encontrado</em></td>
                            <?php endif; ?>
                        <?php endif; ?>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $produto->ID]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->ID]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->ID)]) ?>
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
