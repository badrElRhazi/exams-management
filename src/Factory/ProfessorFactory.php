<?php

namespace App\Factory;

use App\Entity\Professor;
use App\Repository\ProfessorRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Professor>
 *
 * @method        Professor|Proxy create(array|callable $attributes = [])
 * @method static Professor|Proxy createOne(array $attributes = [])
 * @method static Professor|Proxy find(object|array|mixed $criteria)
 * @method static Professor|Proxy findOrCreate(array $attributes)
 * @method static Professor|Proxy first(string $sortedField = 'id')
 * @method static Professor|Proxy last(string $sortedField = 'id')
 * @method static Professor|Proxy random(array $attributes = [])
 * @method static Professor|Proxy randomOrCreate(array $attributes = [])
 * @method static ProfessorRepository|RepositoryProxy repository()
 * @method static Professor[]|Proxy[] all()
 * @method static Professor[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Professor[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Professor[]|Proxy[] findBy(array $attributes)
 * @method static Professor[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Professor[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ProfessorFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'CIN' => self::faker()->text(20),
            'nom' => self::faker()->text(50),
            'prenom' => self::faker()->text(50),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Professor $professor): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Professor::class;
    }
}
