<?php

namespace Nikulinilya\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [];

    public function __construct(array $jokes)
    {
        $this->jokes = $jokes;
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}