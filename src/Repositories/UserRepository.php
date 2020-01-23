<?php


namespace Src\Repositories;

use PDO;
use Src\Models\User;
use Src\System\DBConnection;

class UserRepository
{
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getUser(string $email) : ?User {
        $stmt = $this->db->prepare('
            SELECT * FROM Users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['id']
        );
    }
}