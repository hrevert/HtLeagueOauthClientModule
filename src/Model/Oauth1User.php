<?php
namespace HtLeagueOauthClientModule\Model;

use League\OAuth1\Client\Server\User;

class Oauth1User extends Oauth2User
{
    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }    
}
