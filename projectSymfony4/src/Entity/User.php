<?php
namespace App\Entity;



use phpDocumentor\Reflection\Types\Boolean;
use Serializable;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity
 * @UniqueEntity("email",message="email exist")
 * @UniqueEntity("username",message="user exist")
 */
class User implements UserInterface, Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string|null
     * @Assert\NotBlank
     * @Assert\Email(message="email invalide")
     * @ORM\Column(name="email", type="string", unique=true, length=150, nullable=true)
     */
    private $email;
    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=45, nullable=true)
     */
    private $firstname;
    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    private $lastname;
    /**
     * @var string|null
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    /**
     * @Assert\NotBlank(message="enter pwd")
     */
    private $plainPassword;
    /**
     * @var string|null
     * @Assert\NotBlank(message="enter username")
     * @ORM\Column(name="username", type="string", unique=true, length=150)
     */
    private $username;
    /**
     * @var string|null
     * @ORM\Column(name="token", type="string", length=255, nullable=true)
     * */
    private $token;
    /**
     * @var Boolean|null
     * @ORM\Column(name="enable", type="boolean")
     * */
    private $enable = false;

    /**
     * @ORM\Column(name="roles", type="array", length=150, nullable=true)
     *
     */
    private $roles;

 public function getRoles()
    {
        return $this->roles;
    }
    public function setRoles($roles)
    {
        $this->roles  = $roles ;
    }
    public function addRole($role){
        $roles = $this->getRoles();
        $roles[] = $role;
        $this->setRoles($roles);
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    public function eraseCredentials()
    {
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function getLastname(): ?string
    {
        return $this->lastname;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->password,
            $this->username
        ));
    }
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->password,
            $this->username
            ) = unserialize($serialized);
    }
    public function __toString()
    {
        return (string)$this->firstname . " " . $this->lastname;
    }
    public function getToken(): ?string
    {
        return $this->token;
    }
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    public function getEnable()
    {
        return $this->enable;
    }
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }
    public function getSalt(){
    }

    }