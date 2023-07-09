<?php

$projects_data_path = __DIR__ . "/projects/projects.json";
$base_project_images_path = "/projects/images/";

$projects_data = json_decode(file_get_contents($projects_data_path), true);
// for ($i = 0; $i < count($projects_data); $i++) {
//     $projects_data[$i]["images"]["logo"] = $base_project_images_path . $projects_data[$i]["images"]["logo"];
//     $projects_data[$i]["images"]["banner"] = $base_project_images_path . $projects_data[$i]["images"]["banner"];
// }


$showcase_project = $projects_data["projects"][$projects_data["showcase_project"]];
// $showcase_project = array(
//     "name" => "Test showcase",
//     "description" => array(
//         "This is a test showcase project line 1",
//         "This is a test showcase project line 2",
//         "This is a test showcase project line 3",
//     ),
//     "url" => "https://nyanyagames.com",
//     "images" => array(
//         "logo" => "minecat_logo.png",
//         "banner" => "minecat_banner.png"
//     )
// );

?>

<html lang="en" data-bs-theme="dark">

<head>
    <script src="/vendor/bootstrap/js/color-modes.js"></script>

    <title>NyaNya Games</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="NyaNya Games">

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (dark)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#moon-stars-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text" style="">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark" aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4>About</h4>
                        <p class="text-body-secondary">Welcome to NyaNyaGames, an indie game studio fueled by passion, creativity, and a love for all things gaming!</p>
                        <p class="text-body-secondary">We cherish the freedom to explore unconventional ideas and take risks, ensuring that each game we create is a unique and unforgettable experience.</p>
                        <p class="text-body-secondary">Thank you for being a part of our vibrant gaming community. Together, let's create magic, one game at a time!</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4>Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Nothing here yet</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img alt="" src="/images/logo_small.webp" width="48" height="48" />
                    <strong>NyaNya Games</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="py-5 text-center container">
            <div class="card no-bg py-lg-5">
                <div class="card-body">
                    <?php if (strlen($showcase_project["images"]["banner"]) > 0) { ?>
                        <div class="showcase" style="background-image: url(<?php print(str_starts_with($showcase_project["images"]["banner"], "/") ? $showcase_project["images"]["banner"] : $base_project_images_path . $showcase_project["images"]["banner"]); ?>);"></div>
                    <?php } ?>
                    <?php if (strlen($showcase_project["images"]["logo"]) > 0) { ?>
                        <img alt="" src="<?php print(str_starts_with($showcase_project["images"]["logo"], "/") ? $showcase_project["images"]["logo"] : $base_project_images_path . $showcase_project["images"]["logo"]); ?>" />
                    <?php } ?>

                    <h1 class="fw-light text-body-primary"><?php print($showcase_project["name"]); ?></h1>
                    <?php foreach ($showcase_project["description"] as $line) { ?>
                        <p class="lead text-body-secondary"><?php print($line); ?></p>
                    <?php } ?>
                    <p>
                        <a href="<?php print($showcase_project["url"]); ?>" class="btn btn-primary my-2" target="_blank">More info</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($projects_data["projects"] as $project) { ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <?php if (strlen($project["images"]["banner"]) > 0) { ?>
                                    <img alt="" src="<?php print(str_starts_with($project["images"]["banner"], "/") ? $project["images"]["banner"] : $base_project_images_path . $project["images"]["banner"]); ?>" />
                                <?php } ?>
                                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg> -->
                                <div class="card-body">
                                    <?php if (strlen($project["images"]["logo"]) > 0) { ?>
                                        <img class="m-h-50" alt="" src="<?php print(str_starts_with($project["images"]["logo"], "/") ? $project["images"]["logo"] : $base_project_images_path . $project["images"]["logo"]); ?>" />
                                    <?php } ?>
                                    <p class="card-title"><?php print($project["name"]); ?></p>
                                    <?php foreach ($project["description"] as $line) { ?>
                                        <p class="card-text"><?php print($line); ?></p>
                                    <?php } ?>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="<?php print($project["url"]); ?>" class="btn btn-sm btn-outline-secondary" target="_blank">More info</a>
                                        <small class="text-body-secondary text-muted"><?php print($project["tag"]); ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">nyanyagames.com &copy; <span class="currentdate"></span></p>
            <p class="mb-0">MEOW!</p>
        </div>
    </footer>

    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll(".currentdate").forEach(function(element) {
            element.innerHTML = new Date().getFullYear();
        });
    </script>
</body>

</html>