<?php if(!empty($topic)) { ?>
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