<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CarrinhoDeCompra Entity
 *
 * @property int $ID
 * @property int|null $IDUsuario
 * @property int|null $IDProduto
 * @property int|null $Quantidade
 */
class CarrinhoDeCompra extends Entity
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
        'IDUsuario' => true,
        'IDProduto' => true,
        'Quantidade' => true,
    ];
}
