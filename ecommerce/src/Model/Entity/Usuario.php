<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $ID
 * @property string|null $Nome
 * @property string|null $Email
 * @property string|null $Senha
 * @property string|null $Endereco
 * @property string|null $InformacoesPagamento
 */
class Usuario extends Entity
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
        'Email' => true,
        'Senha' => true,
        'Endereco' => true,
        'InformacoesPagamento' => true,
    ];
}
