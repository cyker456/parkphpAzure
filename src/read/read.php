<?php include '../config/db.php' ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/read_style.css"/>
    <link href="../../icon.ico" rel="shortcut icon" type="image/x-icon">
    <title>글 읽기 페이지</title>
</head>
<body>
    <?php
        $bno = $_GET['idx']; // url로 받아오는 값은 반드시 get(http method)이며 받을 때도 get으로 받아야함.
        $hit = mysqli_fetch_array(mq("select * from board where idx = '".$bno."'"));
        $hit = $hit['hit'] + 1;
        $fet = mq("update board set hit '".$hit."'");
        $sql = mq("select * from board where idx='".$bno."'");
        $board = $sql->fetch_array(); 
    ?>
    <!-- 글 불러오기 -->
    <div id="board_read">
        <h2><?php echo $board['title']; ?></h2>
        <div id="user_info">
            <?php echo $board['name']; ?> <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
			<div id="bo_line"></div>
        </div>
        <div id="bo_content">
			<?php echo nl2br("$board[content]"); ?>
			</div>
    </div>
    <!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="/board">[목록으로]</a></li>
			<li><a href="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
			<li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
		</ul>
	</div>
</body>
</html>