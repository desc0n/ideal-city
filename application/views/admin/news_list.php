<div class="row right-content">
	<h4>Список новостей</h4>
	<div class="row">
		<table class="table table-bordered" id="dataTables-example">
			<thead>
				<tr>
					<td>Заголовок новости</td>
					<td>Действия</td>
				</tr>
			</thead>
			<tbody>
				<?foreach($pageNewsData as $news){?>
				<tr id="rowNews<?=$news['id'];?>" class="gradeA">
					<td class="text-center media-middle">
						<div class="img-link">
                            <a href="/admin/control_panel/redact_news/?id=<?=$news['id'];?>"><?=$news['title'];?></a>
						</div>
					</td>
					<td class="text-center">
						<div class="rowBtn1 btn-row">
							<?=($news['viewed'] == 1 ? sprintf('
							<button class="btn btn-warning" onclick="hideNews(%d);">
								<span class="glyphicon glyphicon-eye-close"></span> Скрыть новость
							</button>', $news['id']) : sprintf('
							<button class="btn btn-success" onclick="showNews(%d);">
								<span class="glyphicon glyphicon-eye-open"></span> Показать новость
							</button>', $news['id']));?>
						</div>
						<div class="rowBtn2 btn-row">
							<button class="btn btn-danger" onclick="removeNews(<?=$news['id'];?>);">
								<span class="glyphicon glyphicon-remove"></span> Удалить новость
							</button>
						</div>
					</td>
				</tr>
				<?}?>
			</tbody>
		</table>
	</div>
</div>
