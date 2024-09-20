<?php

$nombre = '';
$fecha_nacimiento = '';
$ocupacion = '';
$telefono = '';
$email = '';
$nacionalidad = '';
$nivel_ingles = '';
$lenguajes_programacion = [];
$aptitudes = '';
$habilidades = [];
$perfil = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'N/A';
  $fecha_nacimiento = isset($_POST['nacimiento']) ? $_POST['nacimiento'] : 'N/A';
  $ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : 'N/A';
  $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : 'N/A';
  $email = isset($_POST['email']) ? $_POST['email'] : 'N/A';
  $nacionalidad = isset($_POST['nacionalidad']) ? $_POST['nacionalidad'] : 'N/A';
  $nivel_ingles = isset($_POST['ingles']) ? $_POST['ingles'] : 'N/A';
  $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? $_POST['lenguajes_programacion'] : [];
  $aptitudes = isset($_POST['aptitudes']) ? $_POST['aptitudes'] : 'N/A';
  $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
  $perfil = isset($_POST['perfil']) ? $_POST['perfil'] : 'N/A';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>CV</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="formulario">
    <h1>Formulario para CV</h1>
    <form action="#" method="post" class="">
      <div class="flex-field">
        <div>
          <label for="nombre" class="field">Nombre y Apellidos</label>
          <input type="text" name="nombre" class="text-input">
        </div>
        <div>
          <label for="nacimiento"  class="field">Fecha de Nacimiento</label>
          <input type="date" name="nacimiento" class="text-input">
        </div>
      </div>

      <div class="flex-field">
        <div>
          <label for="ocupacion"  class="field">Ocupación</label>
          <input type="text" name="ocupacion" class="text-input">
        </div>
        <div>
          <label for="telefono"  class="field">Teléfono</label>
          <input type="text" name="telefono" class="text-input">
        </div>
      </div>
      
      <div class="flex-field">
        <div>
          <label for="email"  class="field">Correo electrónico</label>
          <input type="email" name="email" class="text-input">
        </div>
        <div>
          <label for="nacionalidad"  class="field">Nacionalidad</label>
          <select name="nacionalidad" id="" class="text-input">
            <option value="Perú">Perú</option>
            <option value="Chile">Chile</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Brasil">Brasil</option>
            <option value="Ecuador" >Ecuador</option>
            <option value="Colombia">Colombia</option>
            <option value="Argentina">Argentina</option>
          </select>
        </div>
      </div>

      <label for="ingles" class="field">Nivel de Inglés</label>
      <input type="radio" name="ingles" id="basico" value="Básico">
      <label for="basico">Básico</label>
      <input type="radio" name="ingles" id="intermedio" value="Intermedio">
      <label for="intermedio">Intermedio</label>
      <input type="radio" name="ingles" id="avanzado" value="Avanzado">
      <label for="avanzado">Avanzado</label>
      <input type="radio" name="ingles" id="fluido" value="Fluido">
      <label for="fluido">Fluido</label>

      <label for="lang-program" class="field" >Lenguajes de programación</label>
      <input type="checkbox" id="javascript" name="lenguajes_programacion[]" value="JavaScript">
      <label id="javascript">Javascript</label>
      <input type="checkbox" id="python" name="lenguajes_programacion[]" value="Python">
      <label id="python">Python</label>
      <input type="checkbox" id="php" name="lenguajes_programacion[]" value="PHP">
      <label id="php">PHP</label>

      <label  class="field">Aptitudes</label>
      <input list="lista_aptitudes" name="aptitudes" id="aptitudes" class="text-input">
      <datalist id="lista_aptitudes">
        <option value="Inteligencia Emocional">Inteligencia Emocional</option>
        <option value="Espíritu Crítico">Espíritu Crítico</option>
        <option value="Trabajo en Equipo">Trabajo en Equipo</option>
        <option value="Habilidades Físicas">Habilidades Físicas</option>
        <option value="Organización">Organización</option>
        <option value="Pensamiento crítico">Pensamiento crítico</option>
      </datalist>

      <span for="lang-program"  class="field">Habilidades</span>
      <input type="checkbox" id="emocional" name="habilidades[]" value="Inteligencia Emocional">
      <label id="emocional">Inteligencia Emocional</label>
      <input type="checkbox" id="critico" name="habilidades[]" value="Espíritu Crítico">
      <label id="critico">Espíritu Crítico</label>
      <input type="checkbox" id="equipo" name="habilidades[]" value="Trabajo en Equipo">
      <label id="equipo">Trabajo en Equipo</label>

      <label  class="field">Perfil</label>
      <textarea rows="10" cols="50" name="perfil"></textarea>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <div class="cv">
  <header>
    <div class="image">
      <img src="./user.jpg" alt="user-img">
    </div>
    <div class="nombre">
      <h2><?php  echo $nombre; ?></h2>
      <span><?php  echo $ocupacion; ?></span>
    </div>
  </header>

  <section>
    <nav>
      <div>
        <h3>CONTACTO</h3>
        <hr />
        <p class="contacto">
          <img src="./ring-phone.png" alt="asd" style="width: 25px;">
          <?php  echo $telefono; ?>
        </p>
        <p class="contacto">
          <img src="./correo-electronico.png" alt="asd" style="width: 22px;">
          <?php  echo $email; ?>
        </p>
        <p class="contacto">
          <img src="./mapa.png" alt="asd" style="width: 22px;">
          <?php  echo $nacionalidad; ?>
        </p>
      </div>
      <div>
        <h3>IDIOMAS</h3>
        <hr />
        <ul class="idiomas-list">
          <li>Inglés: <?php  echo $nivel_ingles; ?></li>
        </ul>
      </div>
      <div>
        <h3>APTITUDES</h3>
        <hr />
        <ul>
          <li><?php echo $aptitudes ?></li>
          <!-- <li>Inteligencia Emocional</li>
          <li>Espíritu crítico</li>
          <li>Trabajo en equipo</li>
          <li>Capacidad analítica</li>
          <li>Habilidades físicas</li> -->
        </ul>
      </div>
      <div>
        <h3>HABILIDADES</h3>
        <hr />
        <ul>
        <?php 
          foreach ($habilidades as &$habilidad) {
            echo "<li>". $habilidad ."</li>";
        }
        ?>
          <!-- <li>Inteligencia Emocional</li>
          <li>Espíritu crítico</li>
          <li>Trabajo en equipo</li>
          <li>Capacidad analítica</li>
          <li>Habilidades físicas</li> -->
        </ul>
      </div>
      <div>
        <h3>Lenguajes de Programación</h3>
        <hr />
        <ul>
          <?php 
            foreach ($lenguajes_programacion as &$lenguaje) {
              echo "<li>". $lenguaje ."</li>";
          }
          ?>
        </ul>
    </nav>

    <article >
      <h3>PERFIL</h3>
      <hr />
      <p>
        <?php echo $perfil ?>
      </p>
      <!-- <h3>EXPERIENCIA LABORAL</h3>
      <hr />
      <div>
        <h4>Trabajador Social</h4>
        <span class="article-lugar">México DF, </span>
        <span class="article-rango-fechas">| 2022 - Actualmente</span>
        <ul class="experiencia-list">
          <li>Coordinador y mediador entre los equipos de ayuda psicológica a jóvenes y niños en exclusión social</li>
          <li>Velar por la salu mental del equipo y de miembros involucrados en proyecto</li>
          <li>Mepeo de necesidades entretegicas y lógicas para las diferentes áreas</li>
          <li>Monitor de ejercicios físicos para adolescentes</li>
        </ul>
      </div>
      <div>
        <h4>Trabajador Social</h4>
        <span class="article-lugar">México DF, </span>
        <span class="article-rango-fechas">| 2022 - Actualmente</span>
        <ul class="experiencia-list">
          <li>Coordinador y mediador entre los equipos de ayuda psicológica a jóvenes y niños en exclusión social</li>
          <li>Velar por la salu mental del equipo y de miembros involucrados en proyecto</li>
          <li>Mepeo de necesidades entretegicas y lógicas para las diferentes áreas</li>
          <li>Monitor de ejercicios físicos para adolescentes</li>
        </ul>
      </div>
      <h3>FORMACIÓN</h3>
      <hr />
      <div>
        <h4>Trabajador Social</h4>
        <span class="article-lugar">ESMA, Madrid</span>
        <span class="article-rango-fechas">| 2012 – 2015</span>
        <h4>Licenciatura Profesional</h4>
        <span class="article-lugar">Universidad de La Frontera, México DF</span>
        <span class="article-rango-fechas">| 2011 – 2012</span>
      </div> -->
    </article>
  </section>
</div>
</body>

</html>