<?php /** @noinspection ALL */

class Users
{
    private ?string $username;
    private ?string $password;

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
}

function getUser(?Users $user): ?string
{
    return "Username : {$user->getUsername()}, Password : {$user->getPassword()}";
}

$user1 = new Users();
$user1?->setUsername(username: "Adi");
$user1?->setPassword(password: null);
echo getUser($user1) . PHP_EOL;
