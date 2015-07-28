<?php
namespace BaseDomainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class BaseDomainObject
{
    /**
    * @ORM\Column(name="id", type="bigint")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $ID;
    
    /**
    * @ORM\Column(type="datetime")
    */ 
    protected $CREATED_DATE;
    
    /**
    * @ORM\Column(type="string", length=45)
    */
    protected $CREATED_BY; 
    
    /**
    * @ORM\Column(type="datetime", nullable=true)
    */
    protected $UPDATED_DATE;
    
    /**
    * @ORM\Column(type="string", length=45, nullable=true)
    */
    protected $UPDATED_BY;

    /**
    * @ORM\Column(type="integer", length=1, nullable=true)
    */
    protected $IS_DELETED;
    
    /**
    * @ORM\Column(type="integer", length=10)
    */
    protected $VERSION;

    /**
     * Get ID
     *
     * @return integer 
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set CREATED_DATE
     *
     * @param \DateTime $cREATEDDATE
     * @return BaseDomainObject
     */
    public function setCREATEDDATE($cREATEDDATE)
    {
        $this->CREATED_DATE = $cREATEDDATE;

        return $this;
    }

    /**
     * Get CREATED_DATE
     *
     * @return \DateTime 
     */
    public function getCREATEDDATE()
    {
        return $this->CREATED_DATE;
    }

    /**
     * Set CREATED_BY
     *
     * @param string $cREATEDBY
     * @return BaseDomainObject
     */
    public function setCREATEDBY($cREATEDBY)
    {
        $this->CREATED_BY = $cREATEDBY;

        return $this;
    }

    /**
     * Get CREATED_BY
     *
     * @return string 
     */
    public function getCREATEDBY()
    {
        return $this->CREATED_BY;
    }

    /**
     * Set UPDATED_DATE
     *
     * @param \DateTime $uPDATEDDATE
     * @return BaseDomainObject
     */
    public function setUPDATEDDATE($uPDATEDDATE)
    {
        $this->UPDATED_DATE = $uPDATEDDATE;

        return $this;
    }

    /**
     * Get UPDATED_DATE
     *
     * @return \DateTime 
     */
    public function getUPDATEDDATE()
    {
        return $this->UPDATED_DATE;
    }

    /**
     * Set UPDATED_BY
     *
     * @param string $uPDATEDBY
     * @return BaseDomainObject
     */
    public function setUPDATEDBY($uPDATEDBY)
    {
        $this->UPDATED_BY = $uPDATEDBY;

        return $this;
    }

    /**
     * Get UPDATED_BY
     *
     * @return string 
     */
    public function getUPDATEDBY()
    {
        return $this->UPDATED_BY;
    }

    /**
     * Set IS_DELETED
     *
     * @param integer $iSDELETED
     * @return BaseDomainObject
     */
    public function setISDELETED($iSDELETED)
    {
        $this->IS_DELETED = $iSDELETED;

        return $this;
    }

    /**
     * Get IS_DELETED
     *
     * @return integer 
     */
    public function getISDELETED()
    {
        return $this->IS_DELETED;
    }

    /**
     * Set VERSION
     *
     * @param integer $vERSION
     * @return BaseDomainObject
     */
    public function setVERSION($vERSION)
    {
        $this->VERSION = $vERSION;

        return $this;
    }

    /**
     * Get VERSION
     *
     * @return integer 
     */
    public function getVERSION()
    {
        return $this->VERSION;
    }
}
