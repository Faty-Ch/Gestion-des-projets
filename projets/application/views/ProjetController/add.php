<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un projet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      body {
		background: linear-gradient(90deg, rgb(43, 0, 47) 0%, rgb(185, 62, 226) 22%, rgb(255, 0, 228) 100%);
      }
      .card {
        margin-top: 50px;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.4);
		color: white;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      }
      h1 {
        text-align: center;
        margin-bottom: 30px;
      }
      label {
        font-size: 18px;
        font-weight: bold;
      }
      .form-control {
        border-radius: 10px;
      }
      .btn-primary {
        background-color: #6C63FF;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
      }
	  .btn-primary:hover {
        background-color: #0069d9;
    }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <h1>Ajouter un projet</h1>
            <form method="POST" action="../ProjetController/add">
              <div class="form-group">
                <label for="titre">Titre :</label>
                <input type="text" required name="titre" class="form-control" id="titre" >
              </div>
              <div class="form-group">
                <label for="debut">Date début :</label>
                <input type="date" required class="form-control" name="debut" id="debut">
              </div>
              <div class="form-group">
                <label for="fin">Date fin :</label>
                <input type="date" required class="form-control" name="fin" id="fin">
              </div>
              <div class="form-group">
                <label for="description">Description :</label>
                <textarea required class="form-control" name="description" id="description"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-block">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


