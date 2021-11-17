<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="recup.php">
    <div class="form-group">
        <legend><b>Vos coordonnées</b></legend>
        <label for="">Nom : </label>
        <input type="text" name="nom" size="40" value=""><br/>
        <label for="">Prénom</label>
        <input type="text" name="prenom" size="40" value=""><br/>
        <label for="">Mail : </label>
        <input type="text" name="mail" size="40" value="" placeholder="Votre Email">
        <div>
            <input type="reset" value="reset">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
