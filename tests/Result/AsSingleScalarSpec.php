<?php

namespace tests\Happyr\DoctrineSpecification\Result;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\Query;
use Happyr\DoctrineSpecification\Result\AsSingleScalar;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin AsSingleScalar
 */
class AsSingleScalarSpec extends ObjectBehavior
{
    function it_is_a_result_modifier()
    {
        $this->shouldBeAnInstanceOf('Happyr\DoctrineSpecification\Result\ResultModifier');
    }

    function it_sets_hydration_mode_to_object(AbstractQuery $query)
    {
        $query->setHydrationMode(Query::HYDRATE_SINGLE_SCALAR)->shouldBeCalled();

        $this->modify($query);
    }
}
