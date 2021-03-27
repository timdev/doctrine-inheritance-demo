<?php
declare(strict_types=1);
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represents a legal person (companies)
 *
 * @ORM\Entity
 */
class LegalPerson extends Partner
{
}
