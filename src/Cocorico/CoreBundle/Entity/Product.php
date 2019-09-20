<?php

namespace Cocorico\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Cocorico\CoreBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=400)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100)
     */
    private $image;

    /**
     * Many products have one category, this is owning side->contained inverseBy 
     * @ORM\ManyToOne(targetEntity="Cocorico\CoreBundle\Entity\CategoryProduct", inversedBy="products")
     */
    private $categoryproduct;

    /**
     * Many products have one user, this is owning side -> contain inversedBy
     * @ORM\ManyToOne(targetEntity="Cocorico\UserBundle\Entity\User", inversedBy="products")
     * 
     */
    private $user;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set categoryproduct.
     *
     * @param \Cocorico\CoreBundle\Entity\CategoryProduct|null $categoryproduct
     *
     * @return Product
     */
    public function setCategoryproduct(\Cocorico\CoreBundle\Entity\CategoryProduct $categoryproduct = null)
    {
        $this->categoryproduct = $categoryproduct;

        return $this;
    }

    /**
     * Get categoryproduct.
     *
     * @return \Cocorico\CoreBundle\Entity\CategoryProduct|null
     */
    public function getCategoryproduct()
    {
        return $this->categoryproduct;
    }

    /**
     * Set user.
     *
     * @param \Cocorico\UserBundle\Entity\User|null $user
     *
     * @return Product
     */
    public function setUser(\Cocorico\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \Cocorico\UserBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
