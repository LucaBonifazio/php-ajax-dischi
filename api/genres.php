
<?php
// restituire l'array con i nomi dei generi senza doppioni

include __DIR__ . '/../db/data.php';

$arr_genres = [];

foreach ($arr_albums as $album) {
	if (!in_array($album['genre'], $arr_genres)) {
		$arr_genres[] = $album['genre'];
	}
}

header('Content-Type: application/json');

echo json_encode($arr_genres);