<?php

namespace Pgi\AchatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="DEMANDE", indexes={@ORM\Index(name="IDX_19D129BFBA32D9F5", columns={"IMAGEID"}), @ORM\Index(name="IDX_19D129BF9351833", columns={"PERSONNELID"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var string
     *
     * @ORM\Column(name="DATEDEMANDE", type="string", length=30, nullable=true)
     */
    private $datedemande;

    /**
     * @var string
     *
     * @ORM\Column(name="DATEDISPOSOUH", type="string", length=30, nullable=true)
     */
    private $datedisposouh;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEMANDEID", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="SEQ_DEMANDE", allocationSize=1, initialValue=1)
     */
    private $demandeid;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="REFERENCE", type="string", length=20, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT", type="string", length=20, nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=20, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="UPDATE_DATE", type="string", length=30, nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="UPDATE_USER", type="string", length=30, nullable=true)
     */
    private $updateUser;

    /**
     * @var \Image
     *
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IMAGEID", referencedColumnName="IMAGEID")
     * })
     */
    private $image;

    /**
     * @var \Personnel
     *
     * @ORM\ManyToOne(targetEntity="Personnel", inversedBy="listDemandes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PERSONNELID", referencedColumnName="PERSONNELID")
     * })
     */
    private $personnel;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="Demandeligne", mappedBy="demande")
     */
    private $listDemandelignes;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listDemandelignes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set datedemande
     *
     * @param string $datedemande
     * @return Demande
     */
    public function setDatedemande($datedemande)
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    /**
     * Get datedemande
     *
     * @return string 
     */
    public function getDatedemande()
    {
        return $this->datedemande;
    }

    /**
     * Set datedisposouh
     *
     * @param string $datedisposouh
     * @return Demande
     */
    public function setDatedisposouh($datedisposouh)
    {
        $this->datedisposouh = $datedisposouh;

        return $this;
    }

    /**
     * Get datedisposouh
     *
     * @return string 
     */
    public function getDatedisposouh()
    {
        return $this->datedisposouh;
    }

    /**
     * Get demandeid
     *
     * @return integer 
     */
    public function getDemandeid()
    {
        return $this->demandeid;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Demande
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Demande
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Demande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Demande
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set updateDate
     *
     * @param string $updateDate
     * @return Demande
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateUser
     *
     * @param string $updateUser
     * @return Demande
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return string 
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * Set image
     *
     * @param \Pgi\AchatBundle\Entity\Image $image
     * @return Demande
     */
    public function setImage(\Pgi\AchatBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Pgi\AchatBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set personnel
     *
     * @param \Pgi\AchatBundle\Entity\Personnel $personnel
     * @return Demande
     */
    public function setPersonnel(\Pgi\AchatBundle\Entity\Personnel $personnel = null)
    {
        $this->personnel = $personnel;

        return $this;
    }

    /**
     * Get personnel
     *
     * @return \Pgi\AchatBundle\Entity\Personnel 
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }

    /**
     * Add listDemandelignes
     *
     * @param \Pgi\AchatBundle\Entity\Demandeligne $listDemandelignes
     * @return Demande
     */
    public function addListDemandeligne(\Pgi\AchatBundle\Entity\Demandeligne $listDemandelignes)
    {
        $this->listDemandelignes[] = $listDemandelignes;

        return $this;
    }

    /**
     * Remove listDemandelignes
     *
     * @param \Pgi\AchatBundle\Entity\Demandeligne $listDemandelignes
     */
    public function removeListDemandeligne(\Pgi\AchatBundle\Entity\Demandeligne $listDemandelignes)
    {
        $this->listDemandelignes->removeElement($listDemandelignes);
    }

    /**
     * Get listDemandelignes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListDemandelignes()
    {
        return $this->listDemandelignes;
    }
}
