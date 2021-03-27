<?php
declare(strict_types=1);
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn("discr")
 * @ORM\DiscriminatorMap({"natural" = "NaturalPerson", "legal" = "LegalPerson"})
 */
abstract class Partner
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue
     */
    protected int $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected string $name = '';
}
