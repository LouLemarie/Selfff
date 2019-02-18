<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="exercise_has_user")
 */
class exercise_has_user
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(name="chrono", type="integer")
     */
    private $chrono;

    /**
     * @return mixed
     */
    public function getChrono()
    {
        return $this->chrono;
    }

    /**
     * @param mixed $chrono
     */
    public function setChrono($chrono): void
    {
        $this->chrono = $chrono;
    }


    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="exercise_has_user")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity=exercise::class, inversedBy="exercise_has_user")
     */
    protected $exercise;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getExercise()
    {
        return $this->exercise;
    }

    /**
     * @param mixed $exercise
     */
    public function setExercise($exercise)
    {
        $this->exercise = $exercise;
    }

}
