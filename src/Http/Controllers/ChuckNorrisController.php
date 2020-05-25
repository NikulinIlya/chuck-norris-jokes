<?php

namespace Nikulinilya\ChuckNorrisJokes\Http\Controllers;

use Nikulinilya\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke', [
            'joke' => ChuckNorris::getRandomJoke(),
        ]);
    }
}
