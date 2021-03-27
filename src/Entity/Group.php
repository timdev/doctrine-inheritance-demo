<?php
declare(strict_types=1);
namespace Application\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Group
{
    /**
     *
     * @ORM\Id @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue
     */
    protected int $id;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\Partner")
     * @var Collection<Partner>
     */
    protected Collection $members;

    public function __construct()
    {
        $this->members = new ArrayCollection();
    }
}
