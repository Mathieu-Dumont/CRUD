<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php include "StructurePage/header.php"; ?>
    <div class="text-light fs-1 text fw-bold text-center mb-5 ">
        CRUD
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end mx-5">
    <button type="button" class="btn btn-danger mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <a href=formulaireUtilisateur.php?id=0 >Creer un user</a>
    </button>
    </div>

    <?php
        include 'function/function.php';
        include 'function/mesFunctionsTable.php';

        $headers = getHeaderTableUser();
        $users = getAllUsers();
        afficherTableauUser($users, $headers);

      include "StructurePage/footer.php"; ?>
  </body>
</html>
