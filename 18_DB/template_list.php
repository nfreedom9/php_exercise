<?php if(!empty($topic)) { ?>
				<p>제목 : <input type="text" name="title" value="<?=htmlspecialchars($topic['title'])?>" readonly></p>
                <p>본문 : <textarea name="description" id="" cols="30" rows="10" readonly><?=htmlspecialchars($topic['description'])?></textarea></p>
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