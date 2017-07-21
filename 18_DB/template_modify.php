				<form action="./process.php?mode=modify" method="POST"><input type="hidden" name="id" value="<?=$topic['id']?>" />
					<p>제목 : <input type="text" name="title" value="<?=htmlspecialchars($topic['title'])?>"></p>
					<p>본문 : <textarea name="description" id="" cols="30" rows="10"><?=htmlspecialchars($topic['description'])?></textarea></p>
					<input type="submit" />
				</form>
				<form action="./list.php" method="GET"><input type="hidden" name="id" value="<?=$topic['id']?>" />
					<input type="submit" value="취소" />
				</form>