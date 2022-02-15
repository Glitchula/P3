<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>

  <!-- Banner -->
    <main>
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./banner.php"); ?>
          </div>
        </div>
      </div>
    </main>
  <!-- Banner end -->

  <!-- navbar -->
    <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./navbar.php"); ?>
          </div>
        </div>
    </div>
  <!--navbar end -->

  <!-- Content -->
    <div class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./content.php");?>
          </div>
        </div>
    </div>
  <!-- Content end -->

  <!-- footer -->
    <div class="container-fluid fixed-bottom">
        <div class="row">
          <div class="col-12 px-0">
            <?php include("./footer.php"); ?>
          </div>
        </div>
    </div>
  <!-- footer end -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
