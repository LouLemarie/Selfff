<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="recipe")
 */
class recipe
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="uri", type="string")
     */
    private $uri;

    /**
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="portions", type="integer")
     */
    private $portions;

    /**
     * @ORM\Column(name="kcal", type="integer")
     */
    private $kcal;

    /**
     * @ORM\Column(name="ingredients_count", type="integer")
     */
    private $ingredients_count;

    /**
     * @ORM\Column(name="picture_url", type="string")
     */
    private $picture_url;

//    /**
//     * @ORM\Column(name="time.total", type="string")
//     */
//    private $timetotal;

//    /**
//     * @ORM\Column(name="tags.meals", type="string")
//     */
//    private $tagsmeals;

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
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
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
    public function getPortions()
    {
        return $this->portions;
    }

    /**
     * @param mixed $portions
     */
    public function setPortions($portions)
    {
        $this->portions = $portions;
    }

    /**
     * @return mixed
     */
    public function getKcal()
    {
        return $this->kcal;
    }

    /**
     * @param mixed $kcal
     */
    public function setKcal($kcal)
    {
        $this->kcal = $kcal;
    }

    /**
     * @return mixed
     */
    public function getIngredientsCount()
    {
        return $this->ingredients_count;
    }

    /**
     * @param mixed $ingredients_count
     */
    public function setIngredientsCount($ingredients_count)
    {
        $this->ingredients_count = $ingredients_count;
    }

    /**
     * @return mixed
     */
    public function getPictureUrl()
    {
        return $this->picture_url;
    }

    /**
     * @param mixed $picture_url
     */
    public function setPictureUrl($picture_url)
    {
        $this->picture_url = $picture_url;
    }


    // NE FONCTIONNE PAS LORS DE L'UPDATE A CAUSE DU TERME TIME ET TAGS.






//    /**
//     * @return mixed
//     */
//    public function getTimetotal()
//    {
//        return $this->timetotal;
//    }
//
//    /**
//     * @param mixed $timetotal
//     */
//    public function setTimetotal($timetotal)
//    {
//        $this->timetotal = $timetotal;
//    }

//    /**
//     * @return mixed
//     */
//    public function getTagsmeals()
//    {
//        return $this->tagsmeals;
//    }
//
//    /**
//     * @param mixed $tagsmeals
//     */
//    public function setTagsmeals($tagsmeals)
//    {
//        $this->tagsmeals = $tagsmeals;
//    }
}
