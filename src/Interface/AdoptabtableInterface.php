<?php

namespace App\Interface;

interface AdoptabtableInterface
{
    public function canBeAdopted(): bool;
}