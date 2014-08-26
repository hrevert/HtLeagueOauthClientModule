<?php
namespace HtLeagueOauthClientModuleTest\Model;

use League\OAuth2\Client\Provider\User;
use HtLeagueOauthClientModule\Model\Oauth2User;

class Oauth2UserTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $user = new User;
        $oauth2User = new Oauth2User($user);

        $user->uid = 139;
        $this->assertEquals(139, $oauth2User->getId());

        $user->nickname = 'johndoe';
        $this->assertEquals('johndoe', $oauth2User->getNickname());

        $user->name = 'John Doe';
        $this->assertEquals('John Doe', $oauth2User->getName());

        $user->firstName = 'John';
        $this->assertEquals('John', $oauth2User->getFirstName());

        $user->lastName = 'Doe';
        $this->assertEquals('Doe', $oauth2User->getLastName());

        $user->email = 'me@johndoe.com';
        $this->assertEquals('me@johndoe.com', $oauth2User->getEmail());

        $user->location = 'California, USA';
        $this->assertEquals('California, USA', $oauth2User->getLocation());

        $user->description = 'Passionate Web Developer';
        $this->assertEquals('Passionate Web Developer', $oauth2User->getDescription());

        $user->imageUrl = 'johndoe.com/avatar.png';
        $this->assertEquals('johndoe.com/avatar.png', $oauth2User->getImageUrl());

        $user->urls = ['johndoe.com/avatar.png', 'johndoe.com/avatar2.png'];
        $this->assertEquals(['johndoe.com/avatar.png', 'johndoe.com/avatar2.png'], $oauth2User->getUrls());
    }
}
