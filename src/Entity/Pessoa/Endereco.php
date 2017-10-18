<?php

namespace App\Entity\Pessoa;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Endereco
 * @package App\Entity\Pessoa
 * @ORM\Entity()
 * @ORM\Table(name="pessoa_endereco")
 */
class Endereco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $descricao;

    public function __toString()
    {
        return $this->id . ' ' . $this->descricao;
    }
}