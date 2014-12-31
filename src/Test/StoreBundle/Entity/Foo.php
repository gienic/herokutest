<?php

namespace Test\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foo
 */
class Foo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $foo;

    /**
     * @var integer
     */
    private $foo2;
    
    /**
     * @var integer
     */
     private $foo3;

     /**
     * @var integer
     */
     private $foo4;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set foo
     *
     * @param string $foo
     * @return Foo
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * Get foo
     *
     * @return string 
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * Set foo2
     *
     * @param integer $foo2
     * @return Foo
     */
    public function setFoo2($foo2)
    {
        $this->foo2 = $foo2;

        return $this;
    }

    /**
     * Get foo2
     *
     * @return integer 
     */
    public function getFoo2()
    {
        return $this->foo2;
    }

    /**
     * Set foo3
     *
     * @param integer $foo3
     * @return Foo
     */
    public function setFoo3($foo3)
    {
        $this->foo3 = $foo3;

        return $this;
    }

    /**
     * Get foo3
     *
     * @return integer
     */
    public function getFoo3()
    {
     	return $this->foo3;
    }
    
   /**
     * Set foo4
     *
     * @param string $foo4
     * @return Foo4
     */
    public function setFoo4($foo4)
    {
        $this->foo4 = $foo4;

        return $this;
    }

    /**
     * Get foo4
     *
     * @return integer
     */
    public function getfoo4()
    {
        return $this->foo4;
    }

}
