<?php

namespace mb24dev\AmoCRM\Session;

use mb24dev\AmoCRM\AmoCRMException;
use mb24dev\AmoCRM\User\UserInterface;

/**
 * Class AmoCRMSessionDoesNotExistException
 *
 * @package mb24dev\AmoCRM\Session
 */
class SessionDoesNotExistException extends AmoCRMException
{
    /**
     * @var UserInterface
     */
    private $user;

    /**
     * AmoCRMSessionDoesNotExistException constructor.
     *
     * @param UserInterface $user
     */
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }
}
