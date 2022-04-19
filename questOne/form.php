<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <title>Homer Challenge</title>
</head>

<body>
  <header>


  </header>
  <main>
    <div class="permisDeConduire">
      <div class="ville">
        <h1>SPRINGFIELD, IL</h1>
      </div>
      <div class="numeroDePermis">
        <div class="infosPermis">
          <p>LICENSE#</p>
          <p>64209</p>
        </div>
        <div class="infosPermis">
          <p>BIRTH DATE</p>
          <p>4-24-56</p>
        </div>
        <div class="infosPermis">
          <p>EXPIRES</p>
          <p>4-24-2015</p>
        </div>
        <div class="infosPermis">
          <p>CLASS</p>
          <p>NONE</p>
        </div>
      </div>


      <div class="homerIdentite">
        <div class="photoIdentite">
          <?php
          //prevent timezone warnings
          date_default_timezone_set('America/New_York');

          //set the upload location
          $UPLOADDIR = "img/";

          //if the form has been submitted then save and display the image(s)
          if (isset($_POST['Submit'])) {
            //loop through the uploaded files
            foreach ($_FILES as $key => $value) {
              $image_tmp = $value['tmp_name'];
              $image = $value['name'];
              $image_file = "{$UPLOADDIR}{$image}";

              //move the file to the permanent location
              if (move_uploaded_file($image_tmp, $image_file)) {
                echo <<<HEREDOC
            <div style="float:left;margin-right:10px">
                <img src="{$image_file}" alt="file not found" /></br>
            </div>
            HEREDOC;
              } else {
                echo "<h1>image file upload failed, image too big after compression</h1>";
              }
            }
          } else {
          ?>
            <form name='newad' method='post' enctype='multipart/form-data' action=''>
              <table>
                <tr>
                  <td><input type='file' name='image'></td>
                </tr>
                <tr>
                  <td><input name='Submit' type='submit' value='Upload image'></td>
                </tr>
              </table>
            </form>
          <?php
          }
          ?>
        </div>
        <div class="detailCarte">
          <div class="titreDeCarte">
            <h2>DRIVERS LICENSE</h2>
          </div>
          <div class="identite">
            <p>HOMER SIMPSON</p>
            <p>69 OLD PLUMTREE VLVD</p>
            <p>SPRINGFIELD, IL 62701</p>
          </div>
          <div class="homerDescription">
            <div>
              <p>SEX</p>
              <p>OK</p>
            </div>
            <div>
              <p>HEIGHT</p>
              <p>MEDIUM</p>
            </div>
            <div>
              <p>WEIGHT</p>
              <p>239</p>
            </div>
            <div>
              <p>HAIR</p>
              <p>NONE</p>
            </div>
            <div>
              <p>EYES</p>
              <p>OVAL</p>
            </div>
          </div>
          <div class="signature">
            <h3>HOMER SIMPSON</h3>
          </div>
        </div>
      </div>
    </div>

  </main>
</body>

</html>