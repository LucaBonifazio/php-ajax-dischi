<?php
// restituisce l'array con i dischi da stampare in pagina (array filtrato per genere se c'e' il parametro
// nell'url altrimenti restituisce l'array originale)

// isset: variabile esiste e non e' NULL
// empty: variabile esiste e non e' falsy (no NULL, '', [], 0)

$genre = empty($_GET['genre']) ? 'all' : strtolower($_GET['genre']);

include __DIR__ . '/../db/data.php';


if ($genre == 'all') {
	$arr_filtered = $arr_albums;
} else {
	$arr_filtered = array_filter($arr_albums, function ($album) use ($genre) {
		return strtolower($album['genre']) == $genre;
	});
}

header('Content-Type: application/json');

echo json_encode($arr_filtered);