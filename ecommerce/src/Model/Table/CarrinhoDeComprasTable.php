<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CarrinhoDeCompras Model
 *
 * @method \App\Model\Entity\CarrinhoDeCompra newEmptyEntity()
 * @method \App\Model\Entity\CarrinhoDeCompra newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CarrinhoDeCompra> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CarrinhoDeCompra findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CarrinhoDeCompra> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CarrinhoDeCompra saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CarrinhoDeCompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CarrinhoDeCompra>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CarrinhoDeCompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CarrinhoDeCompra> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CarrinhoDeCompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CarrinhoDeCompra>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CarrinhoDeCompra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CarrinhoDeCompra> deleteManyOrFail(iterable $entities, array $options = [])
 */
class CarrinhoDeComprasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carrinho_de_compras');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('IDUsuario')
            ->allowEmptyString('IDUsuario');

        $validator
            ->integer('IDProduto')
            ->allowEmptyString('IDProduto');

        $validator
            ->integer('Quantidade')
            ->allowEmptyString('Quantidade');

        return $validator;
    }
}
