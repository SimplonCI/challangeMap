
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">
    <style>
        .row {
            margin:15px 0;
        }
        label {
            margin-bottom: 0;
            margin-left: 1px;
        }
    </style>
    <title>Ajouter une agence</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h3>FORMULAIRE D’ENREGISTREMENT</h3>
        <form action="create.php" method="post" class="form-inline">
          <div class="row">
            <div class="form-group">
              <label for="ville">Ville</label> <br>
                <select name="ville" id="ville" class="form-control" style="width: 100%">
                    <option value="">Choisir une ville</option>
                    <?php while($ville = mysqli_fetch_assoc($resultatVille)) :?>
                        <option value="<?php echo $ville['ville'];?>"><?php echo $ville['ville'];?></option>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="form-group">
              <label for="description">Description de l'agence</label> <br>
              <input type="text" class="form-control" id="description" name="description" placeholder="agence de yopland Tel :+20000">
            </div>
            <div class="form-group">
                <br>
                <input type="submit" value="Enregister" name='enregister' class="btn btn-primary">
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <script>
      // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#ville').select2();
    });
  </script>
</body>
</html>