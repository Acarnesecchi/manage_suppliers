<?php

namespace App\Entity;

enum SupplierType: string
{
    case Hotel = "HOTEL";
    case Pista = "PISTA";
    case Complemento = "COMPLEMENTO";
}

use App\Repository\SupplierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierRepository::class)]
class Supplier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\Column(length: 255)]
    private string $mail;

    #[ORM\Column(length: 32)]
    private string $number;

    #[ORM\Column(type: 'boolean')]
    private bool $active;

    #[ORM\Column(type: 'string', enumType: SupplierType::class)]
    private string $supplierType;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $updatedAt;
}
