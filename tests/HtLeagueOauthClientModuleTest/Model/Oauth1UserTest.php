<?php
namespace HtLeagueOauthClientModuleTest\Model;

use League\OAuth1\Client\Server\User;
use HtLeagueOauthClientModule\Model\Oauth1User;

class Oauth1UserTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $user = new User;
        $oauth1User = new Oauth1User($user);

        $user->uid = 139;
        $this->assertEquals(139, $oauth1User->getId());

        $user->nickname = 'johndoe';
        $this->assertEquals('johndoe', $oauth1User->getNickname());

        $user->name = 'John Doe';
        $this->assertEquals('John Doe', $oauth1User->getName());

        $user->firstName = 'John';
        $this->assertEquals('John', $oauth1User->getFirstName());

        $user->lastName = 'Doe';
        $this->assertEquals('Doe', $oauth1User->getLastName());

        $user->email = 'me@johndoe.com';
        $this->assertEquals('me@johndoe.com', $oauth1User->getEmail());

        $user->location = 'California, USA';
        $this->assertEquals('California, USA', $oauth1User->getLocation());

        $user->description = 'Passionate Web Developer';
        $this->assertEquals('Passionate Web Developer', $oauth1User->getDescription());

        $user->imageUrl = 'johndoe.com/avatar.png';
        $this->assertEquals('johndoe.com/avatar.png', $oauth1User->getImageUrl());

        $user->urls = ['johndoe.com/avatar.png', 'johndoe.com/avatar2.png'];
        $this->assertEquals(['johndoe.com/avatar.png', 'johndoe.com/avatar2.png'], $oauth1User->getUrls());
    }
}
