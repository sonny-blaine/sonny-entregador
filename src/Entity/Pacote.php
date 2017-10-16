<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection as Itens;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Entrega
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="pacote")
 */
class Pacote
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Destinatario")
     * @ORM\JoinColumn(name="destinatario_id", referencedColumnName="id")
     * @var Destinatario
     */
    public $destinatario;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    public $destino;

    /**
     * @var Itens
     * @ORM\OneToMany(targetEntity="App\Entity\Pacote\Item", mappedBy="pacote")
     */
    public $itens;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Carga", inversedBy="pacotes")
     * @var Carga
     */
    public $carga;
}