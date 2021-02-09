<?php namespace Lecturize\Taxonomies\Contracts;

/**
 * Interface TaxableInterface
 * @deprecated Use CanHaveCategories interface instead.
 * @package Lecturize\Taxonomies\Contracts
 */
interface TaxableInterface
{
    /** @return mixed */
    public function taxonomies();
}