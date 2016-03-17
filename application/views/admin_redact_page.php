<?
/** @var $contentModel Model_Content */
$contentModel = Model::factory('Content');
?>
<script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
<div class="row right-content">
	<div class="row">
		<form class="form-horizontal col-md-4">
			<label for="id">Страница:</label>
			<select class="form-control" name="id" id="id" onchange="$(this).parent('form').submit();">
				<option value="0">не выбрано</option>
				<?foreach ($contentModel->getPage(['editable' => true]) as $page) {?>
				<option value="<?=$page['slug'];?>" <?=(Arr::get($get, 'id') == $page['slug'] ? 'selected' : '');?>><?=mb_strtoupper($page['title']);?></option>
				<?}?>
			</select>
		</form>
	</div>
	<form class="form-horizontal col-md-12" method="post">
	<?if (Arr::get($get, 'id') == 'main') {?>
		<h2>Текст в блоках</h2>
		<div class="row form-group">
			<label for="scope1">
				<?=Arr::get(Arr::get($scopePages, 1, []), 'title');?>
			</label>
			<?=Form::textarea('scope1', Arr::get(Arr::get($scopePages, 1, []), 'description'), ['class' => 'form-control', 'id' => 'scope1', 'rows' => 5]);?>
		</div>
		<div class="row form-group">
			<label for="scope2">
				<?=Arr::get(Arr::get($scopePages, 2, []), 'title');?>
			</label>
			<?=Form::textarea('scope2', Arr::get(Arr::get($scopePages, 2, []), 'description'), ['class' => 'form-control', 'id' => 'scope2', 'rows' => 5]);?>
		</div>
		<div class="row form-group">
			<label for="scope3">
				<?=Arr::get(Arr::get($scopePages, 3, []), 'title');?>
			</label>
			<?=Form::textarea('scope3', Arr::get(Arr::get($scopePages, 3, []), 'description'), ['class' => 'form-control', 'id' => 'scope3', 'rows' => 5]);?>
		</div>
		<div class="row form-group">
			<label for="scope4">
				<?=Arr::get(Arr::get($scopePages, 4, []), 'title');?>
			</label>
			<?=Form::textarea('scope4', Arr::get(Arr::get($scopePages, 4, []), 'description'), ['class' => 'form-control', 'id' => 'scope4', 'rows' => 5]);?>
		</div>
	<?} else {?>
		<div class="row">
			<h3>Редактируем страницу</h3>
		</div>
		<div class="row form-group">
			<label for="redact_content_text">Текст страницы</label>
			<textarea id="redact_content_text" name="text" class="ckeditor"><?=Arr::get($pageData, 'content', '');?></textarea>
		</div>
	<?}?>
		<div class="row form-group">
			<button type="submit" class="btn btn-primary" name="redactpage" value="<?=Arr::get($get, 'id', 0);?>">Сохранить</button>
		</div>
	</form>
	<div class="row img-row col-md-12">
		<h4>Фото</h4>
		<div>
			<?foreach($pageImgsData as $img){?>
				<div class="img-link" data-toggle="tooltip" data-placement="left" data-html="true" title="<img class='tooltip-img' src='/public/img/original/<?=$img['src'];?>'>">
					<img src="/public/img/thumb/<?=$img['src'];?>" >
					<span class="pull-right glyphicon glyphicon-remove" title="удалить" onclick="$('#remove_img > #removeimg').val(<?=$img['id'];?>);$('#remove_img').submit();"></span>
				</div>
			<?}?>
			<button class="btn btn-success" onclick="$('#loadimg_modal').modal('toggle');">Добавить фото <span class="glyphicon glyphicon-plus"></span></button>
		</div>
	</div>
</div>
<div class="modal fade" id="loadimg_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Загрузка изображения</h4>
			</div>
			<div class="modal-body">
				<form role="form" method="post" enctype='multipart/form-data'>
					<div class="form-group">
						<label for="exampleInputFile">Выбор файла</label>
						<input type="file" name="imgname[]" id="exampleInputFile" multiple>
					</div>
					<input type="hidden" name="loadpageimg" value="<?=Arr::get($pageData, 'id', 0);?>">
					<button type="submit" class="btn btn-default">Загрузить</button>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<form id="remove_img" action="/admin/control_panel/redact_page?id=<?=Arr::get($get, 'id', 0);?>" method="post">
	<input type="hidden" id="removeimg" name="removeimg" value="0">
</form>