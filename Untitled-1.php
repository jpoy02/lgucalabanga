<?php

$sql_ann = "SELECT `id`, `thumbnail`, `title`, `date` FROM announcement LIMIT 6";
$result = mysqli_query($conn, $sql_ann) or die();
$result_check = mysqli_num_rows($result);


if ($result_check > 0) {

    $i = 0;

    foreach ($result as $row) {

        $created_at = new DateTime($row['date']);

        if ($i % 2 == 0) {
            echo '<div class="col-md-4">';
        }

        echo '
                <div class="ann-item">
                    <div class="ann-desc">
                        <div class="ann-title"><a href="/announcement.php?annid=' . $row['id'] . '">' . $row["title"] . '</a>
                        </div>
                        <div class="ann-date">' . $date = date_format($created_at, "F, Y") . '</div>
                    </div>
                    <a href="/announcement.php?annid=' . $row['id'] . '"><img src="' . $row['thumbnail'] . '" alt=""></a>
                </div>';

        if ($i % 2 == 1) {
            echo '</div>';
        }

        $i++;
    }
}

?>