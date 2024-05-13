<?= $this->extend('template/mainEstudiante'); ?>

<?= $this->section('content'); ?>
<style>
    h1 {
        text-align: center;
        margin: 0 auto 30px; /* Ajusta el margen inferior según sea necesario */
        padding: 0; 
    }
    h2 {
        margin-left: 15%;
        text-align: left;
        font-size: 20px;
    }

    .info-box {
        overflow-y: scroll;
        max-height: 500px; 
        border: 1px solid #ccc;
        padding: 10px;
        margin: 0 auto 80px;
        text-align: justify;
        width: 150%;
        margin-left: 3%;
    }

    .btn-group {
        margin-bottom: 20px;
        padding: 15px; 
    }

    .img {
        display: block; /* Para que el margen automático funcione */
        margin: 20px auto; /* Margen automático para centrar horizontalmente */
    }

    .progress-container {
        width: 100%; /* Ancho completo */
        text-align: center;
        margin-top: 30px; /* Margen superior */
    }

    progress {
        width: 70%; /* Ancho de la barra de progreso */
        height: 20px; /* Altura de la barra de progreso */
    }

</style>
<div class="progress-container">
    <h2>Progreso</h2>
    <progress value="10" max="80"></progress> <!-- Cambia el valor "30" según tu progreso -->
</div>
<div class="text-center mb-4">
<div class="btn-group" role="group" aria-label="Botones de acción">
        <a href="<?= base_url('estudiante/misCursos') ?>" class="btn btn-primary">Introducción</a>
        <a href="<?= base_url('estudiante/misCursos/subtema1') ?>" class="btn btn-primary">Subtema 1</a>
        <a href="<?= base_url('estudiante/misCursos/subtema2') ?>" class="btn btn-primary">Subtema 2</a>
        <a href="<?= base_url('estudiante/misCursos/subtema3') ?>" class="btn btn-primary">Subtema 3</a>
        <a href="<?= base_url('estudiante/misCursos/subtema4') ?>" class="btn btn-primary">Subtema 4</a>
        <a href="<?= base_url('estudiante/misCursos/evaluacion') ?>" class="btn btn-primary">Evaluación</a>
 </div>
</div>
<h1>Inglés</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="info-box">
                <h1>Introducción</h1>
                <p>1. Ulysses, James Joyce. Esta novela, la obra maestra de Joyce, es una de las joyas de la literatura universal y qué mejor que leerlo en su idioma original. Considerado por muchos como la novela más importante del siglo XXI, Ulises es un libro que ofrece mucho a sus lectores. Más que una larga novela pareciera ser una compilación de muchas historias conectadas entre sí, llenas de simbolismo, aventura y humor, a pesar de ser un libro que parece desafiante. Leerlo no representará una tarea titánica pues es un libro fluido, ameno y emocionante, es uno de los libros más leídos en el mundo entero.</p>

                <p>2. Animal Farm, George Orwell. Esta alegoría a la Rusia comunista que hizo Orwell es una de las lecturas básicas más populares para cualquier estudiante universitario. Además de ser un libro entretenido y reflexivo, es una lectura ideal para practicar tu inglés. Orwell fue un escritor conocido por su claridad y simpleza de estilo, nunca usaba palabras de más por lo que sus textos son directos, concisos y claros sin dejar de ser interesantes y de un alto nivel intelectual. A pesar de que Rebelión en la granja puede en ocasiones confundirse con un libro para niños por su sencillez y tintes de fábula, es un libro más que serio, tanto así que numerosas editoriales británicas intentaron censurarlo antes de su salida a la luz. Por eso y más, Rebelión en la granja es un libro que no puede faltar en tu lista de lecturas en inglés.</p>

                <p>3. The Giver, Lois Lowry. The Giver es una lectura emocionante que atrapará tu atención desde su inicio. Este libro habla de una misteriosa comunidad que vive siguiendo reglas estrictas, hasta que un joven de la misma comienza a conocer algunos de los secretos de sus pobladores y le da un giro inesperado a la vida de la comunidad. Una lectura llena de metáforas y misterio, además de una gramática sencilla y fácil de comprender. El libro está escrito de forma concisa sin oraciones largas, con un lenguaje sencillo y un manejo de los tiempos fácil de comprender para un estudiante de inglés. A pesar de ser una lectura larga, es tan fluida que terminarás de leerla en menos de lo que esperabas.</p>

                <p>4. The Lord Of The Flies, William Golding. Esta historia sobre un grupo de jóvenes perdidos en una isla se convirtió en un clásico de la literatura moderna. Esta lectura ofrece una historia cautivante y misteriosa que hará que no puedas esperar para pasar a la siguiente página. El libro narra las aventuras y desgracias de un grupo de jóvenes, su vida como náufragos y enfrentamiento con el lado más oscuro de ellos mismos en el aislamiento. Considerada como una alegoría de la sociedad, la historia de Golding sigue siendo tan provocadora actualmente como lo fue cuando se publicó por primera vez en 1954. Sin duda una lectura entretenida e interesante que te mantendrá motivado en todo momento para continuar leyendo.</p>

                <p>5. Tuesdays With Morrie, Mitch Albom. Cuando Mitch Albom se reencuentra con su antigua maestra de universidad, Morrie Schwartz, aprendió algunas de las lecciones más importantes de su vida. Estas las comparte con sus lecturas en este valioso libro lleno de la sabiduría y sensibilidad de una mujer viviendo los últimos meses de su vida. Además de su valor como lectura, este libro ofrece una valiosa herramienta para leer un estilo de escritura conversacional y práctico, sin dejar de ser profundo y entretenido.</p>

                <img class="img" src="https://img.freepik.com/vector-gratis/fondo-libro-ingles-dibujado-mano_23-2149483338.jpg" alt="Descripción de la imagen">  
                    <a href="<?= base_url('estudiante/misCursos/subtema2') ?>" class="btn btn-primary" style="margin-left: 1000px;">Siguiente</a>
            </div>
        </div>
    </div>
</div>
 
<?= $this->endSection(); ?>
