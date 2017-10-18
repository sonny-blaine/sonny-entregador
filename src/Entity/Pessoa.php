<?php

namespace App\Entity;

use App\Entity\Pessoa\Endereco;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Pessoa
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="pessoa")
 */
class Pessoa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $documento;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pessoa\Endereco")
     * @var Endereco
     */
    private $endereco;

    public function __toString()
    {
        return $this->id . ' ' . $this->nome . ' ' . $this->documento;
    }
}