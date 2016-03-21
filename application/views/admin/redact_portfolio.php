<?
/** @var $contentModel Model_Content */
$contentModel = Model::factory('Content');
?>
<script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
<div class="row right-content">
	<div class="row">
		<form class="form-horizontal col-md-4">
			<label for="id">Раздел:</label>
			<select class="form-control" name="id" id="id" onchange="$(this).parent('form').submit();">
				<option value="0">не выбрано</option>
				<?foreach ($portfolioPages as $portfolioPage) {?>
				<option value="<?=$portfolioPage['id'];?>" <?=(Arr::get($get, 'id') == $portfolioPage['id'] ? 'selected' : '');?>><?=mb_strtoupper($portfolioPage['title']);?></option>
				<?}?>
			</select>
			<input type="hidden" name="slug" value="<?=Arr::get($get, 'slug');?>">
		</form>
	</div>
	<form class="form-horizontal col-md-12" method="post">
		<div class="row">
			<h3>Редактируем раздел</h3>
		</div>
		<div class="row form-group">
			<label for="redact_content_text">Текст раздела</label>
			<textarea id="redact_content_text" name="text" class="ckeditor"><?=Arr::get($pageData, 'content', '');?></textarea>
		</div>
		<div class="row form-group">
			<button type="submit" class="btn btn-primary" name="redactpage" value="<?=Arr::get($get, 'id', 0);?>">Сохранить</button>
		</div>
		<input type="hidden" name="slug" value="<?=Arr::get($get, 'slug');?>">
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
					<input type="hidden" name="id" value="<?=Arr::get($get, 'id');?>">
					<input type="hidden" name="slug" value="<?=Arr::get($get, 'slug');?>">
					<button type="submit" class="btn btn-default">Загрузить</button>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<form id="remove_img" method="post">
	<input type="hidden" id="removeimg" name="removeimg" value="0">
	<input type="hidden" name="id" value="<?=Arr::get($get, 'id', 0);?>">
	<input type="hidden" name="slug" value="<?=Arr::get($get, 'slug');?>">
</form>