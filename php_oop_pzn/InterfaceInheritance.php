<?php

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

/** TODO: interface inheritance and
 *        Multiple Interface Inheritance
 * */
interface FerrariCar extends IsMaintenance, HasBrand
{

}

