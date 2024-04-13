<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $ID
 * @property string $Nome
 * @property string|null $Descricao
 * @property string $Preco
 * @property string $Categoria
 * @property int $QuantidadeEstoque
 * @property int $IDVendedor
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Nome' => true,
        'Descricao' => true,
        'Preco' => true,
        'Categoria' => true,
        'QuantidadeEstoque' => true,
        'IDVendedor' => true,
        '*' => false,
    ];
}
