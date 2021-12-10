<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
    /** TODO : Final Function and cannot be inherit to sub class */
    final public function login
    (?string $username, ?string $password): bool
    {
        return true;
    }
}

/**   TODO : Error because class facebook is final
 *          and cannot be inherit again
 */
/* class FakeFacebook extends Facebook { } */