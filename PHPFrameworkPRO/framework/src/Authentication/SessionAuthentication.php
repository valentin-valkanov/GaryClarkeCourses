<?php declare(strict_types=1);

namespace GaryClarke\Framework\Authentication;

class SessionAuthentication implements SessionAuthInterface
{
    public function __construct(private AuthRepositoryInterface $authRepository)
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
        if (password_verify($password, $user->getPassword())) {
            dd($user);
            // if yes, log the user in
            $this->login($user);

            // return true
            return true;
        }

        // return false
        return false;
    }

    public function login(AuthUserInterface $user)
    {
        // Start or resume the session

        // Store user information in the session

        // Additional user information can be stored if needed

    }

    public function logout()
    {
        // Start or resume the session


        // Unset all session variables


        // Destroy the session

    }

    public function getUser(): AuthUserInterface
    {
        // Start or resume the session


        // Retrieve user information from the session

        // Retrieve user information from the data source based on the user ID
        // Return an instance of AuthUserInterface representing the authenticated user
    }
}