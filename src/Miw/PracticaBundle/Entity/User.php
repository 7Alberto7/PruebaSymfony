<?php
// src/Acme/UserBundle/Entity/User.php

namespace Miw\PracticaBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
