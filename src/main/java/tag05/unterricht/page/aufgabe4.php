<?php

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geburtstagskalender</title>
    <link rel="stylesheet" href="../css/style.css?t=<?php echo time(); ?>">
</head>

<body>
    <header>
        <h1>Geburtstagskalender</h1>
        <p> </p>
    </header>

    <main>
        <section class="calendar-container">
            <table class="calendar">
                <thead>
                    <tr>
                        <th>Mo</th>
                        <th>Di</th>
                        <th>Mi</th>
                        <th>Do</th>
                        <th>Fr</th>
                        <th>Sa</th>
                        <th>So</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                        ?>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <!-- Jahr aus datum extrahieren -->
        <p>von uns für euch  :-) <?php echo date('Y');?> &copy; by Carola & Micha </p>
    </footer>
</body>

</html>

<!--
Quellenangaben für fopen:
https://www.php.net/manual/function.fopen.php
-->
