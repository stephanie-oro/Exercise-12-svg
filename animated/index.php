<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>The Cabin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style type="text/css">
      .sky{fill:#6aa4a5;}
      .smoke{fill:white;}
      .mountains{fill:white;}
      .trees{fill:#2f4240;}
      .roof{fill:white;}
      .lightbar{fill:#965138;}
      .darkbar{fill:#372f2a;}
      .pipe{fill:#372f2a;}
      .sideofdoor{fill:#965036;}
      .door{fill:#b96e54;}
      .waterlines{fill:white;}
      .water{fill:#6aa4a5;}
    
     

      /* Smoke */
      .smoke {
        transition: transform 5s linear infinite;
        
      }
     

      /* Water lines */
      .waterlines {
        transition: transform 2s linear infinite;
      }


      /* Sky */
      .sky {
        transition: fill 12s;
      }

      .sky.is-night {
        fill: black;
      }
    </style>
  </head>
  <body class="bg-faded">
    <main class="container py-4">
      <h1 class="pb-4 font-weight-bold text-center">The Cabin</h1>
      <?php include('../images/svg-cabin.php'); ?>
    </main>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script>
     $( ".sky" ).click(function() {
          $(this).toggleClass('is-night');
        });
    </script>
  </body>
</html>