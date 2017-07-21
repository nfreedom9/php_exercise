				<form action="./process.php?mode=insert" method="POST">
					<p>제목 : <input type="text" name="title"></p>
					<p>본문 : <textarea name="description" id="" cols="30" rows="10"></textarea></p>
					<input type="submit" value="저장" />
				</form>
				<form action="./list.php" method="GET">
					<input type="submit" value="취소" />
				</form>