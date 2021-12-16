<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/community_view.css">
        <title>SMU VPS - Community</title>
    </head>

    <body>
        <?php include "header.php"; ?>
        <?php
            if (isset($_GET["number"])) {
                $num = $_GET["number"];
            } else {
                $num = 1;
            }
            $sql = "select * from community where num=$num";
            $result = mysqli_query($con, $sql);
	        $total_record = mysqli_num_rows($result); // 전체 글 수 (검색된 레코드 수)

            $row = mysqli_fetch_array($result); //이동된 위치의 레코드 1개의 값들을 배열로 저장
            // 하나의 레코드 가져오기
            $num = $row["num"];
            $topic = $row["topic"];
            $words = $row["words"];
            $auther = $row["auther"];
            $date = $row["date"];
            $view = $row["view"];

            $n_view = $view + 1;

            $sql = "update community set view=$n_view where num=$num";
            $result = mysqli_query($con, $sql);

            mysqli_close($con);

        ?>

        <div class="first-discription">
            <div class="notice-text">
                <span style="font-size: 40px;">Community</span>
            </div>
            <!-- Borad -->
            <div class="board-list">
                <div class="title"><?=$topic?></div>
                <div class="auther"><?=$auther?></div>
                <div class="date"><?=$date?></div>
                <div class="words"><?=$words?></div>
            </div>

            <!-- Number -->
            <div class="number-list-box">
                <div class="number-list">
                    <table class="number-table">
                        <tr>
                            <td class="enabled border-left border-right" onClick="location.href='community.php'">Back</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>