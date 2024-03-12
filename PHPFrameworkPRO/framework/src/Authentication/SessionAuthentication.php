<?php declare(strict_types=1);

namespace GaryClarke\Framework\Authentication;

use GaryClarke\Framework\Session\SessionInterface;

class SessionAuthentication implements SessionAuthInterface
{
    private AuthUserInterface $user;
    public const AUTH_KEY = 'auth_id';
    public function __construct(
        private AuthRepositoryInterface $authRepository,
        private SessionInterface $session
    )
    {
    }

    public function authenticate(string $username, string $password): bool
    {
        // Validate username and password against the data source
        // Return true if authentication is successful, false otherwise

        // query db for user using username. authRepository actually is userRepository
        $user = $this->authRepository->findByUsername($username);

        if (!$user) {
            return false;
        }

        // Does the hashed user pw match the hash of the attempted password
        if (!password_verify($password, $user->getPassword())) {

            // return true
            return false;
        }

        // if yes, log the user in
        $this->login($user);

        // return false
        return false;
    }

    public function login(AuthUserInterface $user)
    {
        // Start or resume the session
        $this->session->start();

        // Log the user in
        $this->session->set(self::AUTH_KEY, $user->getAuthId());

        // Set the user
        $this->user = $user;
    }

    public function logout()
    {
        // Start or resume the session


        // Unset all session variables


        // Destroy the session

    }

    public function getUser(): AuthUserInterface
    {
        return $this->user;
    }
}