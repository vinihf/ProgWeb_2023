<?php
require __DIR__ . '/vendor/autoload.php';

db()->connect('127.0.0.1', 'memesdb', 'root', '');

app()->get('/memes', function () {
    // fetch all notes from the database
    $notes = db()->select('meme')->all();
    // output notes as JSON
    response()->json([
        'status' => 'success',
        'data' => $notes,
      ]);
  });
  
// don't forget to call `run`
app()->run();