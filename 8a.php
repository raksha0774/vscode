<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 30px);
            grid-template-rows: repeat(8, 30px);
            width: 240px;
            height: 240px;
        }
        .cell {
            width: 30px;
            height: 30px;
        }
        .white { background: #f0d9b5; }
        .black { background: #b58863; }
    </style>
</head>
<body>
    <h2>Chessboard</h2>
    <div class="chessboard">
        <?php
        for ($i = 0; $i < 64; $i++) {
            $color = ($i + floor($i / 8)) % 2 == 0 ? 'black' : 'white';
            echo "<div class='cell $color'></div>";
        }
        ?>
    </div>
</body>
</html>
