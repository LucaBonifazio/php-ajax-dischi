<?php
include_once __DIR__ . '/db/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax Dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" defer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    <!-- my style -->
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer></script>
</head>
<body>
    <div id="app">
        <header>
            <div class="top_bar d-flex justify-content-between align-items-center px-4">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png"
                alt="logo"
                class="img-fluid"
              >
              <div>
                <label for="select-genres">
                  <select
                    id="select-genres"
                    v-model="genreFilter"
                    name="genre"
                    @change="genreChange"
                  >
                    <option value="all">
                      All
                    </option>
                      <?php foreach ($arrAlbums as $key => $value) {?>
                        <option value=""><?= $key = $value['genre'] ?></option>
                    <?  } ?>
                      <?= $value['genre'] ?>
                    </option>
                  </select>
                </label>
              </div>
            </div>
        </header>
        <main class="d-flex p-1">
            <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 container">
            <?php foreach ($arrAlbums as $value) { ?>
                <div class="col">
                    <div class="artist_card text-center">
                        <img
                        src="<?= $value['poster'] ?>"
                        alt="<?= $value['title'] ?>"
                        class="img-fluid rounded p-2"
                        >
                        <h2 class="title p-2">
                            <?= $value['title'] ?>
                        </h2>
                        <div class="author">
                        <?= $value['author'] ?>
                        </div>
                        <div class="year">
                        <?= $value['year'] ?>
                        </div>
                    </div>
                </div>
            <?} ?>
            </div>
        </main>
    </div>
</body>
</html>