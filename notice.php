<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/notice.css">
        <title>SMU VPS - Notice</title>
    </head>

    <body>
        <?php include "header.php"; ?>
        <?php
            if (isset($_GET["page"])) {
                $page = $_GET["page"];
            } else {
                $page = 1;
            }
            $sql = "select * from notice order by num desc";
            $result = mysqli_query($con, $sql);
	        $total_record = mysqli_num_rows($result); // 전체 글 수 (검색된 레코드 수)

            $scale = 10;
            // 전체 페이지 수($total_page) 계산 
            if ($total_record % $scale == 0) {
                $total_page = floor($total_record / $scale);
            } else {
                $total_page = floor($total_record / $scale) + 1; 
            }

            $start = ($page - 1) * $scale;

            $number = $total_record - $start;

        ?>

        <div class="first-discription">
            <div class="notice-text">
                <span style="font-size: 40px;">Notice</span>
                <?php
                    if($_SESSION["logined_admin"] == 1) {
                ?>
                <a href="notice_new.php"><div class="newbutton">New</div></a>
                <?php } ?>
            </div>
            <!-- Borad -->
            <div class="board-list">
                <table class="board-table">
                    <colgroup>
                        <col style="width: 5%">
                        <col style="width: 50%">
                        <col style="width: 17%">
                        <col style="width: 20%">
                        <col style="width: 8%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="th-c1">#</th>
                            <th class="th-c2">Topic</th>
                            <th class="th-c3">Auther</th>
                            <th class="th-c4">Date</th>
                            <th class="th-c5">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                            {
                                mysqli_data_seek($result, $i); //mysqli_data_seek(쿼리 결과, 인덱스(0부터 시작));
                                // 가져올 레코드로 위치(포인터) 이동
                                $row = mysqli_fetch_array($result); //이동된 위치의 레코드 1개의 값들을 배열로 저장
                                // 하나의 레코드 가져오기
                                $num = $row["num"];
                                $topic = $row["topic"];
                                $auther = $row["auther"];
                                $date = $row["date"];
                                $view = $row["view"];
                        ?>
                        <tr>
                            <td class="td-c1"><?= $num ?></td>
                            <td class="td-c2"><a href="/notice_view.php?number=<?= $num ?>"><?= $topic ?></a></td>
                            <td class="td-c3"><?= $auther ?></td>
                            <td class="td-c4"><?= $date ?></td>
                            <td class="td-c5"><?= $view ?></td>
                        </tr>
                        <?php
                                $number--;
                            }
                            mysqli_close($con);
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Number -->
            <div class="number-list-box">
                <div class="number-list">
                    <table class="number-table">
                        <tr>
                            <?php
                                if ($total_page>=2 && $page >= 2)	
                                {
                                    $new_page = $page-1;
                                    ?>
                                    <td class="enabled border-left" onClick="location.href='notice.php?page=<?= $new_page ?>'">Previous</td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="disabled">Previous</td>
                                    <?php
                                }
                                for ($i=1; $i<=$total_page; $i++)
                                    {
                                        if ($page == $i)     // 현재 페이지 번호 링크 안함
                                        {
                                            ?>
                                            <td class="number selected"><?= $i ?></td>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <td class="number unselected" onClick="location.href='notice.php?page=<?= $i ?>'"><?= $i ?></td>
                                            <?php
                                        }
                                    }
                                if ($total_page>=2 && $page != $total_page)	
                                {
                                    $new_page = $page+1;
                                    ?>
                                    <td class="enabled border-right" onClick="location.href='notice.php?page=<?= $new_page ?>'">Next</td>
                                    <?php
                                } else {
                                    ?>
                                    <td class="disabled">Next</td>
                                    <?php
                                }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </body>
</html>