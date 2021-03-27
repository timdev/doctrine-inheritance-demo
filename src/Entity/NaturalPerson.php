<?php
declare(strict_types=1);
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represents a natural person
 *
 * @ORM\Entity
 */
class NaturalPerson extends Partner
{
}
