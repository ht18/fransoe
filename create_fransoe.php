<?php require_once('header.php'); ?>

<section class="container">
    <h1 id="absolute">Create your own Fransoé</h1>
    <div id="toolbar">
        <label class="label" for="stroke">Stroke</label>
        <input id="stroke" name='stroke' type="color">
        <label class="label" for="lineWidth">Line Width</label>
        <input id="lineWidth" name='lineWidth' type="number" value="5">
        <button id="clear">Clear</button>
    </div>
    <div class="drawing-board">
        <canvas id="drawing-board"></canvas>
    </div>
    <img id="img1" src="./assets/sock.png" />
    <img id="img2" src="./assets/sock.png" />
    <img id="img3" src="./assets/long_sleeve.png" />
    <img id="img4" src="./assets/tong.png" />
    <img id="img5" src="./assets/tong.png" />
    <img id="img6" src="./assets/hat.png" />
</section>

<script src="js/canvas2.js"></script>

<script src="js/moves.js"></script>

</body>

</html>