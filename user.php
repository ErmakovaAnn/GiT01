<?php
class User
{
    private ?string $middlename = null;

    public function __construct(private string $name, private string $surname, private string $data) {
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function getSurname() : string
    {
        return $this->surname;
    }
    public function getDate() : Date
    {
        return $this->data;
    }
    public function getMiddleName() : ?string
    {
        return $this->middlename;
    }
    public function setMiddleName(string $middlename) : void
    {
        $this->middlename = $middlename;
    }
}

$user1 = new User(surname: 'Волонкова', data: '2000', name: ' Мария ');
$user2 = new User('Вася', 'Пупкин', '2000-01-01');
$user3 = new User('Мария', 'Шашура', '2003-08-21');

echo $user1->getSurname();
echo $user1->getName();
$user1->setMiddleName('Егоровна');
echo $user1->getMiddleName();
