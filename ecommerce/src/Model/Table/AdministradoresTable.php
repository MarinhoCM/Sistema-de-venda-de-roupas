<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administradores Model
 *
 * @method \App\Model\Entity\Administradore newEmptyEntity()
 * @method \App\Model\Entity\Administradore newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Administradore> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administradore get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Administradore findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Administradore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Administradore> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administradore|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Administradore saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Administradore>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administradore>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Administradore>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administradore> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Administradore>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administradore>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Administradore>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administradore> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AdministradoresTable extends Table
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

        $this->setTable('administradores');
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
            ->scalar('Nome')
            ->maxLength('Nome', 255)
            ->requirePresence('Nome', 'create')
            ->notEmptyString('Nome');

        $validator
            ->scalar('Cargo')
            ->maxLength('Cargo', 100)
            ->requirePresence('Cargo', 'create')
            ->notEmptyString('Cargo');

        return $validator;
    }
}
