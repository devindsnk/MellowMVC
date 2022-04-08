<?php
class UserModel extends Model
{
    public function storeData($fName, $lName, $age)
    {
        $results = $this->insert(
            "userdata",
            [
                "fName" => $fName,
                "lName" => $lName,
                "age" => $age
            ]
        );

        return $results;
    }

    public function getUserData()
    {
        $results = $this->getResultSet("userData", '*');

        return $results;
    }
}
