<?php

namespace GaryClarke\Framework\Authentication;

interface AuthRepositoryInterface
{
    public function findByUsername($username): ?AuthUserInterface;
}