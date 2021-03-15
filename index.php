<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>
  <body>
 <?php include "StructurePage/header.php"; ?>
    <div class="text-light fs-1 text fw-bold text-center mb-5 ">
        CRUD
    </div>

    <!-- Button trigger modal -->
    <div class="d-flex justify-content-center mx-5">
    <button type="button" class="btn btn-danger mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href=Organization.php?id=0 >Organisation</a>
    </button>
    </div>

    <div class="d-flex justify-content-center mx-5">
    <button type="button" class="btn btn-danger mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href=User.php?id=0 >Utilisateurs</a>
    </button>
    </div>

      <?php include "StructurePage/footer.php"; ?>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>
