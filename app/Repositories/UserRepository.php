<?php


namespace App\Repositories;

use App\Models\User;

class UserRepository extends AbstractRepository
{

    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function store($id, $firstName, $lastName, $userName)
    {
        return $this->entity->create([
            'chat_id' => $id,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'username' => $userName,
        ]);

    }

}
