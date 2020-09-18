<?php


class UserManager
{
    /* @var $_db PDO */
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function userExist($userData) {
        $user = json_decode($userData);
        $sql = 'SELECT *
                    FROM user
                    WHERE LOWER(username) = LOWER(:username)';

        $user->username = strtolower($user->username);
        $userQuery = $this->_db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $userQuery->bindParam(':username', $user->username, PDO::PARAM_STR);
        $userQuery->execute();
        $userFetched = $userQuery->fetch(PDO::FETCH_ASSOC);

        return $userFetched ? true : false;
    }

    public function getUser($userData)
    {
        $user = json_decode($userData);
        $sql = 'SELECT *
                    FROM user
                    WHERE LOWER(username) = LOWER(:username)
                    AND password = :password';

        $user->username = strtolower($user->username);
        $userQuery = $this->_db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $userQuery->bindParam(':username', $user->username, PDO::PARAM_STR);
        $userQuery->bindParam(':password', $user->password, PDO::PARAM_STR);
        $userQuery->execute();
        $userFetched = $userQuery->fetch(PDO::FETCH_ASSOC);

        return $userFetched ? new User($userFetched) : false;
    }

    public function getUserAvecPersonnage($userData)
    {
        $user = $this->getUser($userData);

        if ($user) {
            if ($user->_idPersonnage) {
                $PersonnageManager = new PersonnageManager($this->_db);
                $personnage = $PersonnageManager->getPersonnage($user->_idPersonnage);
                $user = json_decode(json_encode($user));
                $user->personnage = $personnage;

            } else {
                $user->personnage = null;
            }
        }

        return $user;
    }

    public function getAllUser()
    {
        $userQuery = $this->_db->query('SELECT *
                                                    FROM user');

        $allUser = [];
        while($userFetched = $userQuery->fetch(PDO::FETCH_ASSOC)) {
            array_push($allUser, new User($userFetched));
        };

        return $allUser;
    }

    public function getAllUsersAvecPersonnage()
    {
        $userQuery = $this->_db->query('SELECT idUser
                                                    FROM user');

        $allUser = [];
        while($userFetched = $userQuery->fetch(PDO::FETCH_ASSOC)) {
            array_push($allUser, $this->getUserAvecPersonnage($userFetched['idUser']));
        };

        return $allUser;
    }

    public function addUser($userData, $idPersonnage): User
    {
        $user = json_decode($userData);

        $sql = "INSERT INTO `user` (`username`,`password`, `idPersonnage`, `isGameMaster`, `isAdmin`) 
                                        VALUES (:username, :password, :idPersonnage, false, false)";

        $commit = $this->_db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $commit->bindParam(':username', $user->User->username, PDO::PARAM_STR);
        $commit->bindParam(':password', $user->User->password, PDO::PARAM_STR);
        $commit->bindParam(':idPersonnage', $idPersonnage, PDO::PARAM_INT);
        $commit->execute();

        // $commit->debugDumpParams();

        $result = $this->getUser(json_encode(json_decode($userData)->User));

        return $result;
    }

    public function addUserWithPersonnage($userData): User
    {
        $user = json_decode($userData);
        $idPersonnage = null;
        if($user->Personnage->idPersonnage) {
            $idPersonnage = $user->Personnage->idPersonnage;
        } elseif ($user->Personnage->nom) {
            $PersonnageManager = new PersonnageManager($this->_db);
            $personnage = $PersonnageManager->addPersonnage(json_encode($user->Personnage));
            $idPersonnage = $personnage->_idPersonnage;
        }

        $result = $this->addUser($userData, $idPersonnage);

        return $result;
    }

    public function updateUserPassword($userData): User
    {
        $user = json_decode($userData);
        $sql = "UPDATE user 
                SET password = :password 
                WHERE idUser = :idUser";

        $commit = $this->_db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $commit->bindParam(':idUser',$user->idUser, PDO::PARAM_INT);
        $commit->bindParam(':password',$user->password, PDO::PARAM_STR);
        $commit->execute();

        $user = $this->getUser($user->idUser);

        return $user;
    }

    public function updateUserPersonnage($userData): User
    {
        $user = json_decode($userData);
        $sql = "UPDATE user 
                SET idPersonnage = :idPersonnage 
                WHERE idUser = :idUser";

        $commit = $this->_db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $commit->bindParam(':idUser',$user->idUser, PDO::PARAM_INT);
        $commit->bindParam(':idPersonnage',$user->idPersonnage, PDO::PARAM_INT);
        $commit->execute();

        $user = $this->getUser($user->idUser);

        return $user;
    }

    public function deleteUser($idUser)
    {
        $commit = $this->_db->prepare('DELETE FROM user WHERE idUser = :idUser');
        $commit->bindParam(':idUser',$idUser, PDO::PARAM_INT);
        $commit->execute();
        return $commit->rowCount();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}