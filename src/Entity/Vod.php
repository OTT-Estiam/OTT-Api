<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity

 * @ORM\Table(name="vod")

 */

class Vod
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @ORM\Column(type="string")
     */

    private $name;

    /**
     * @ORM\Column(type="string")
     */

    private $image;

    /**

     * @ORM\Column(type="string")
     */

    private $url;

    /**
     * @ORM\Column(type="string")
     */

    private $type;

    /**
     * @ORM\Column(type="string")
     */

    private $manifest;

    /**
     * @ORM\Column(type="boolean")
     */

    private $isReplay;

    /**
     * @ORM\Column(type="string")
     */

    private $duration;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * @param mixed $manifest
     */
    public function setManifest($manifest)
    {
        $this->manifest = $manifest;
    }

    /**
     * @return mixed
     */
    public function getisReplay()
    {
        return $this->isReplay;
    }

    /**
     * @param mixed $isReplay
     */
    public function setIsReplay($isReplay)
    {
        $this->isReplay = $isReplay;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

}