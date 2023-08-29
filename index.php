<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Home </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  </head>

  <body>

    <h1> Form Pembayaran </h1>

    <div class="container">
      
      <form action="proses.php" method="POST">
          
          <label> Nama </label>
          <input type="text" name="nama">
          <br>
          <label> Email </label>
          <input type="email" name="email">
          <br>
          <label> Alamat </label>
          <textarea placeholder="Alamat" name="alamat"></textarea>
          <br>
          <button type="submit" class="btn btn-primary"> Send </button>

      </form>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  </body>
</html>