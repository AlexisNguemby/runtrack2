
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['style'] == "style1") {
            echo '<link href="style1.css" rel="stylesheet">';
        } elseif ($_POST['style'] == 'style2') {
            echo '<link href="style2.css" rel="stylesheet">';
        } elseif ($_POST['style'] == 'style3') {
            echo '<link href="style3.css" rel="stylesheet">>';
        }
    }
    ?>

    <form action="index.php" method="post">
        <select name="style">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <button type="submit" name="submit">Send</button>
    </form>


