<?php
// servicios/moviesService.php

function getNowPlaying() {
    $bearerToken = "Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIxZjExZjljOTAyZTcxNmI5OWE1NDM0NWVhY2MyZjA1OCIsInN1YiI6IjY1N2VhYzY2OGYyNmJjMzIzMjc1MThjZiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.V0gvQo1ukw4kK7jCObNTq0btQ_WjUHhwyfR8kOvYEsA";
    $url = "https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Accept: application/json",
        "Authorization: " . $bearerToken
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if(curl_errno($ch)){
        $error_msg = curl_error($ch);
        curl_close($ch);
        throw new Exception('Error en la consulta: ' . $error_msg);
    }
    curl_close($ch);

    $json = json_decode($response, true);
    $movies = isset($json['results']) ? $json['results'] : [];
    $top10Movies = array_slice($movies, 0, 10);
    
    $result = [];
    foreach ($top10Movies as $movie) {
        $result[] = [
            'id'           => $movie['id'],
            'title'        => $movie['title'],
            'release_date' => $movie['release_date'],
            'poster_path'  => $movie['poster_path']
        ];
    }
    return $result;
}
?>
