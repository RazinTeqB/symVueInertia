<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;

class BaseController extends AbstractInertiaController
{
    protected function getCurrentUserAccount()
    {
        /** @var ?User $currentUser */
        $currentUser = $this->getUser();

        if ($currentUser === null) {
            throw new \RuntimeException('There is no currently logged in user.');
        }

        return $currentUser;
    }
}
