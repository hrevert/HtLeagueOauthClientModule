<?php
namespace HtLeagueOauthClientModule\Model;

/**
 * Abstraction layer to oauth2 user entity and oauth1 user entity
 */
interface UserInterface
{
    public function getId();

    public function getNickname();

    public function getName();

    public function getFirstName();

    public function getLastName();

    public function getEmail();

    public function getLocation();

    public function getDescription();

    public function getImageUrl();

    public function getUrls();
}
