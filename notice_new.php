<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/notice_new.css">
        <title>SMU VPS - Notice</title>

        <script>
            function submit() {
                document.community_topic_form.submit();
            }
        </script>
    </head>

    <body>
        <?php include "header.php";
            if($logined_email == ""){
                echo "
                    <script>
                        alert('Please login before write new topic.');
                        history.go(-1);
                    </script>
                ";
            } else if($_SESSION["logined_admin"] != 1) {
                echo "
                    <script>
                        alert('Only admin can write the notice!');
                        history.go(-1);
                    </script>
                ";
            }
            else {
        ?>

        <div class="first-discription">
            <div class="notice-text">
                <span style="font-size: 40px;">New Topic</span>
            </div>


            <!-- Board -->
            <div class="board-list">
                <form name="community_topic_form" method="POST" action="/phponly/notice_new_server.php">
                    <div>
                        <label>Topic :</label>
                        <input name="topic" class="topic-input" type=text placeholder="Write your topic here"></input>
                    </div>
                    <div>
                        <label>Write something :</label>
                        <textarea name="write" class="write-sth"></textarea>
                    </div>
                </form>
            </div>

            <!-- Number -->
            <div class="number-list-box">
                <div class="number-list">
                    <table class="number-table">
                        <tr>
                            <td class="enabled border-left border-right" onclick="submit()">Save</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php } include "footer.php"; ?>

    </body>
</html>