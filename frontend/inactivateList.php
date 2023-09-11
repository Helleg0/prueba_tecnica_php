<?php require("../backend/session.php");?>
<!doctype hmtl>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel="stylesheet" href="css/styleCards.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body style="background: #F9F5EB;">
            <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">FANMARVEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Characters</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="comics.php">Comics</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="series.php">Series</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="inactivateList.php">Inactivate List</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-danger" type="button" onclick="redirectProfile();">Profile</button>
                </form>
                </div>
            </div>
        </nav>
            <!-- END NAVBAR -->

            <!-- CARDS -->
            <div class="container">
            <div class="row" id="marvel-row">
            <!-- END CARDS -->

            </div>
        </div>
       
    </body>
    <script src="../backend/js/redirect.js"></script>
    <script src="../backend/js/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>