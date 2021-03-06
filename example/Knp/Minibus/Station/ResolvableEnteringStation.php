<?php

namespace example\Knp\Minibus\Station;

use Knp\Minibus\Station;
use Knp\Minibus\Minibus;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Knp\Minibus\Expectation\ResolveEnteringPassengers;

class ResolvableEnteringStation implements Station, ResolveEnteringPassengers
{
    public function handle(Minibus $bus, array $configuration = [])
    {
        $bus->addPassenger('resolvable_entering', true);
    }

    public function setEnteringPassengers(OptionsResolver $resolver)
    {
        $resolver->setRequired('basic');
        $resolver->setAllowedTypes(['basic' => 'bool']);
    }
}
