<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"kos:read"}}
 * )
 * @ORM\Entity
 */
class Greeting
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"kos:read"})
     */
    private $id;

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     * @Groups({"kos:read"})
     */
    public $name = '';

    public function getId(): int
    {
        return $this->id;
    }
}
