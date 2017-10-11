<?php


namespace App\Entity\Pacote;

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
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    public $descricao;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="App\Entity\Pacote")
     */
    public $pacote;

}