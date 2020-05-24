<?php


namespace Nikulinilya\ChuckNorrisJokes\Http\Controllers;


use Nikulinilya\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}