<?php
namespace HtLeagueOauthClientModule\Model;

use League\OAuth2\Client\Provider\User;

class Oauth2User implements UserInterface
{
    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getId()
    {
        return $this->user->uid;
    }

    public function getNickname()
    {
        return $this->user->nickname;
    }

    public function getName()
    {
        return $this->user->name;
    }

    public function getFirstName()
    {
        return $this->user->firstName;
    }

    public function getLastName()
    {
        return $this->user->lastName;
    }

    public function getEmail()
    {
        return $this->user->email;
    }

    public function getLocation()
    {
        return $this->user->location;
    }

    public function getDescription()
    {
        return $this->user->description;
    }

    public function getImageUrl()
    {
        return $this->user->imageUrl;
    }

    public function getUrls()
    {
        return $this->user->urls;
    }
}
