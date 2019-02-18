<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/**
 * user
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class user
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
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstname;

    /**
     * @ORM\Column(name="size", type="integer", scale=3)
     */
    private $size;

    /**
     * @ORM\Column(name="birthday", type="datetime")
     */
    private $birthday;

    /**
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;

    /**
     * @ORM\Column(name="sport_per_week", type="boolean")
     */
    private $sport_per_week;

    /**
     * @ORM\Column(name="dumbbell", type="boolean")
     */
    private $dumbbell;

    /**
     * @ORM\Column(name="drawbar", type="boolean")
     */
    private $drawbar;

    /**
     * @ORM\Column(name="weightbar", type="boolean")
     */
    private $weightbar;

    /**
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @ORM\Column(name="pwd", type="string")
     */
    private $pwd;

    /**
     * @ORM\ManyToOne(targetEntity=here_for::class, inversedBy="user")
     */
    protected $here_for;

    /**
     * @ORM\OneToMany(targetEntity=step::class, mappedBy="user")
     */
    protected $step;

    /**
     * @ORM\OneToMany(targetEntity=exercise_has_user::class, mappedBy="user")
     */
    protected $exercise_has_user;

    /**
     * @ORM\OneToMany(targetEntity=objectifs_has_user::class, mappedBy="user")
     */
    protected $objectifs_has_user;

    /**
     * user constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getSportPerWeek()
    {
        return $this->sport_per_week;
    }

    /**
     * @param mixed $sport_per_week
     */
    public function setSportPerWeek($sport_per_week)
    {
        $this->sport_per_week = $sport_per_week;
    }

    /**
     * @return mixed
     */
    public function getDumbbell()
    {
        return $this->dumbbell;
    }

    /**
     * @param mixed $dumbbell
     */
    public function setDumbbell($dumbbell)
    {
        $this->dumbbell = $dumbbell;
    }

    /**
     * @return mixed
     */
    public function getDrawbar()
    {
        return $this->drawbar;
    }

    /**
     * @param mixed $drawbar
     */
    public function setDrawbar($drawbar)
    {
        $this->drawbar = $drawbar;
    }

    /**
     * @return mixed
     */
    public function getWeightbar()
    {
        return $this->weightbar;
    }

    /**
     * @param mixed $weightbar
     */
    public function setWeightbar($weightbar)
    {
        $this->weightbar = $weightbar;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * @return mixed
     */
    public function getHereFor()
    {
        return $this->here_for;
    }

    /**
     * @param mixed $here_for
     */
    public function setHereFor($here_for)
    {
        $this->here_for = $here_for;
    }

    /**
     * @return mixed
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param mixed $step
     */
    public function setStep($step)
    {
        $this->step = $step;
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

    /**
     * @return mixed
     */
    public function getObjectifsHasUser()
    {
        return $this->objectifs_has_user;
    }

    /**
     * @param mixed $objectifs_has_user
     */
    public function setObjectifsHasUser($objectifs_has_user)
    {
        $this->objectifs_has_user = $objectifs_has_user;
    }




}
