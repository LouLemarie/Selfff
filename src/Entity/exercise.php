<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="exercise")
 */
class exercise
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="video_url", type="string")
     */
    private $video_url;

    /**
     * @ORM\Column(name="difficulties", type="integer")
     */
    private $difficulties;

    /**
     * @ORM\OneToMany(targetEntity=exercise_has_user::class, mappedBy="exercise")
     */
    protected $exercise_has_user;

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
    public function getVideoUrl()
    {
        return $this->video_url;
    }

    /**
     * @param mixed $video_url
     */
    public function setVideoUrl($video_url)
    {
        $this->video_url = $video_url;
    }

    /**
     * @return mixed
     */
    public function getDifficulties()
    {
        return $this->difficulties;
    }

    /**
     * @param mixed $difficulties
     */
    public function setDifficulties($difficulties)
    {
        $this->difficulties = $difficulties;
    }

    /**
     * @return mixed
     */
    public function getExerciseHasUser()
    {
        return $this->exercise_has_user;
    }

    /**
     * @param mixed $exercise_has_user
     */
    public function setExerciseHasUser($exercise_has_user)
    {
        $this->exercise_has_user = $exercise_has_user;
    }

}
