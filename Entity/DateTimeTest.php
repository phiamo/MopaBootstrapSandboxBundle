<?php

namespace Mopa\Bundle\BootstrapSandboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="transmission")
 * @ORM\Entity(repositoryClass="Foo\BarBundle\Entity\TransmissionRepository")
 */
class DateTimeTest
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var datetime $start
     *
     * @ORM\Column(name="start", type="datetime")
     */
    private $start;

    /**
     * @var datetime $end
     *
     * @ORM\Column(name="end", type="datetime")
     */
    private $end;


    public function __construct()
    {
        $this->start = new \DateTime('now');
        $this->end = new \DateTime('+1 hour');
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Transmission
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set start
     *
     * @param datetime $start
     * @return Transmission
     */
    public function setStart($start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Get start
     *
     * @return datetime
     */
    public function getStart()
    {
        return $this->start;
    }

    public function getBegin()
    {
        return $this->getStart();
    }

    /**
     * Set end
     *
     * @param datetime $end
     * @return Transmission
     */
    public function setEnd($end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Get end
     *
     * @return datetime
     */
    public function getEnd()
    {
        return $this->end;
    }
}