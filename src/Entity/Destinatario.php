<?php
/**
 * Created by PhpStorm.
 * User: miller
 * Date: 11/10/17
 * Time: 17:24
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Destinatario
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="destinatario")
 */
class Destinatario
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
    public $nome;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    public $documento;

    public function __toString()
    {
        return $this->id . ' ' . $this->nome;
    }
}