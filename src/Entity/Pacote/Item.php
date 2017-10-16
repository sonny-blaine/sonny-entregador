<?php


namespace App\Entity\Pacote;

use App\Entity\Pacote;
use App\Entity\Produto;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Item
 * @package App\Entity\Pacote
 * @ORM\Entity
 * @ORM\Table(name="pacote_item")
 */
class Item
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\JoinColumn(name="pacote_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="App\Entity\Pacote", inversedBy="itens")
     * @var Pacote
     */
    public $pacote;

    /**
     * @ORM\Column(name="descricao", length=100, nullable=true)
     * @var string
     */
    public $descricao;

}