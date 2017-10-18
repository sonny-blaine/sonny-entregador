<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Pessoa as Remetente;
use App\Entity\Pessoa as Destinatario;

/**
 * Class Entrega
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="volume")
 */
class Volume
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pessoa")
     * @ORM\JoinColumn(name="remetente_pessoa_id", referencedColumnName="id")
     * @var Remetente
     */
    private $remetente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pessoa")
     * @ORM\JoinColumn(name="destinatario_pessoa_id", referencedColumnName="id")
     * @var Destinatario
     */
    private $destinatario;

    /**
     * @ORM\Column(name="valor_postagem", type="float")
     * @var float
     */
    private $valorPostagem;

    /**
     * @ORM\Embedded(class="App\Entity\Dimensoes", columnPrefix = false)
     * @var Dimensoes
     */
    private $dimensoes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Carga", inversedBy="volume")
     * @var Carga
     */
    private $carga;

}