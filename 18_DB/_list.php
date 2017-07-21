<?php
# PDO 생성
$dbh = new PDO('mysql:host=localhost;dbname=opentutorials', 'root', '10689460');
# 쿼리 준비
$stmt = $dbh->prepare('SELECT id, title FROM topic');

#echo var_dump($stmt)."\n<hr />\n\n";

# 실행 및 $list 셋
$stmt->execute();
$list = $stmt->fetchAll();

#echo var_dump($list)."\n<hr />\n\n";

if(!empty($_GET['id'])) {
	# 쿼리 준비
	$stmt = $dbh->prepare('SELECT id, title, description, created FROM topic WHERE id = :id');
	$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);

	#echo var_dump($stmt)."\n<hr />\n\n";

	# 실행 및 $topic 셋
	$stmt->execute();
	$topic = $stmt->fetch();

	#echo var_dump($topic)."\n<hr />\n\n";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style type="text/css">
			body {
				font-size: 0.8em;
				font-family: dotum;
				line-height: 1.6em;
			}
			header {
				border-bottom: 1px solid #ccc;
				padding: 20px 0;
			}
			nav {
				float: left;
				margin-right: 20px;
				min-height: 1000px;
				min-width:150px;
				border-right: 1px solid #ccc;
			}
			nav ul {
				list-style: none;
				padding-left: 0;
				padding-right: 20px;
			}
			article {
				float: left;
			}
			.description{
				width:500px;
			}
		</style>
	</head>
	<body id="body">
		<div>
			<nav>
				<ul>
					<li>list by php echo</li>
<?php foreach($list as $row) {
echo "					<li>- <a href=\"list.php?id={$row['id']}\">".htmlspecialchars($row['title'])."</a></li>\n";
} ?>
				</ul>

				<ul>
					<li>list by php + html</li>
<?php foreach($list as $row) { ?>
					<li>- <a href="list.php?id=<?=$row['id']?>"><?=htmlspecialchars($row['title'])?></a></li>
<?php } ?>
				</ul>
				<ul>
					<li><a href="input.php">추가</a></li>
				</ul>
			</nav>

			<article>
<?php if(!empty($topic)){ ?>
				<h2><?=htmlspecialchars($topic['title'])?></h2>
				<div class="created"><?=htmlspecialchars($topic['created'])?></div>
				<div class="description"><?=htmlspecialchars($topic['description'])?></div>
				<div>
					<form method="GET" action="modify.php">
						<input type="hidden" name="id" value="<?=$topic['id']?>" />
						<input type="submit" value="수정" />
					</form>
					<form method="POST" action="process.php?mode=delete">
						<input type="hidden" name="id" value="<?=$topic['id']?>" />
						<input type="submit" value="삭제" />
					</form>
				</div>
<?php } ?>
			</article>
		</div>
	</body>
</html>