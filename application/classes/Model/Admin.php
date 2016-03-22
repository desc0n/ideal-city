<?php
class Model_Admin extends Kohana_Model
{

	private $user_id;

	public function __construct()
	{
		if (Auth::instance()->logged_in()) {
			$this->user_id = Auth::instance()->get_user()->id;
		} else {
			$this->user_id = 0;
		}
		DB::query(Database::UPDATE, "SET time_zone = '+10:00'")->execute();
	}

	public function loadPageImg($filesGlobal, $page_id)
	{
		$filesData = [];
		foreach ($filesGlobal['imgname']['name'] as $key => $data) {
			$filesData[$key]['name'] = $filesGlobal['imgname']['name'][$key];
			$filesData[$key]['type'] = $filesGlobal['imgname']['type'][$key];
			$filesData[$key]['tmp_name'] = $filesGlobal['imgname']['tmp_name'][$key];
			$filesData[$key]['error'] = $filesGlobal['imgname']['error'][$key];
			$filesData[$key]['size'] = $filesGlobal['imgname']['size'][$key];
		}
		foreach ($filesData as $files) {
			$sql = "insert into `pages__imgs` (`page_id`) values (:id)";
            $res = DB::query(Database::INSERT,$sql)
                ->param(':id', $page_id)
                ->execute();

			$new_id = Arr::get($res, 0);

			$imageName = preg_replace("/[^0-9a-z.]+/i", "0", Arr::get($files,'name',''));
			$file_name = 'public/img/original/'.$new_id.'_'.$imageName;
			if (copy($files['tmp_name'], $file_name))	{
				$image=Image::factory($file_name);
				$image->resize(800, NULL);
				$image->save($file_name,100);
				$thumb_file_name = 'public/img/thumb/'.$new_id.'_'.$imageName;
				if (copy($files['tmp_name'], $thumb_file_name))	{
					$thumb_image=Image::factory($thumb_file_name);
					$thumb_image->resize(150, NULL);
					$thumb_image->save($thumb_file_name,100);
					$sql = "update `pages__imgs` set `src` = :src,`enabled` = 1 where `id` = :id";
					$query=DB::query(Database::UPDATE,$sql);
					$query->param(':id', $new_id);
					$query->param(':src', $new_id.'_'.$imageName);
					$query->execute();
				}
			}
		}
	}

	public function setPage($params = [])
	{
		$id = Arr::get($params, 'redactpage', 0);

		DB::query(Database::UPDATE, "update `pages__pages` set `content` = :text where `slug` = :id")
			->param(':id', $id)
			->param(':text', Arr::get($params, 'text', ''))
			->execute();
	}

	public function setScopePageDescription($params = [])
	{
		foreach ($params as $key => $val) {
			$id = str_replace('scope', '', $key);

			DB::query(Database::UPDATE, "update `scope__pages` set `description` = :text where `id` = :id")
				->param(':id', $id)
				->param(':text', $val)
				->execute();
		}
	}


	public function setPortfolioPage($params = [])
	{
		$id = Arr::get($params, 'redactpage');

		DB::query(Database::UPDATE, "update `portfolio__pages` set `content` = :text where `id` = :id")
			->param(':id', $id)
			->param(':text', Arr::get($params, 'text', ''))
			->execute();
	}


	public function loadPortfolioPageImg($filesGlobal, $page_id)
	{
		$filesData = [];
		foreach ($filesGlobal['imgname']['name'] as $key => $data) {
			$filesData[$key]['name'] = $filesGlobal['imgname']['name'][$key];
			$filesData[$key]['type'] = $filesGlobal['imgname']['type'][$key];
			$filesData[$key]['tmp_name'] = $filesGlobal['imgname']['tmp_name'][$key];
			$filesData[$key]['error'] = $filesGlobal['imgname']['error'][$key];
			$filesData[$key]['size'] = $filesGlobal['imgname']['size'][$key];
		}
		foreach ($filesData as $files) {
			$res = DB::query(Database::INSERT, 'insert into `portfolio__imgs` (`page_id`) values (:id)')
				->param(':id', $page_id)
				->execute();

			$new_id = Arr::get($res, 0);

			$imageName = preg_replace("/[^0-9a-z.]+/i", "0", Arr::get($files,'name',''));
			$file_name = 'public/img/original/'.$new_id.'_'.$imageName;
			if (copy($files['tmp_name'], $file_name))	{
				Image::factory($file_name)
					->resize(800, NULL)
					->save($file_name,100)
				;

				$thumb_file_name = 'public/img/thumb/'.$new_id.'_'.$imageName;

				if (copy($files['tmp_name'], $thumb_file_name))	{
					Image::factory($thumb_file_name)
						->resize(150, NULL)
						->save($thumb_file_name,100)
					;

					DB::update('portfolio__imgs')
						->set(['src' => sprintf('%s_%s', $new_id, $imageName), 'enabled' => 1])
						->where('id', '=', ':id')
						->param(':id', $new_id)
						->execute()
					;
				}
			}
		}
	}


	public function removePortfolioPageImg($params = [])
	{
		DB::update('portfolio__imgs')
			->set(['enabled' => 0])
			->where('id', '=', ':id')
			->param(':id', Arr::get($params,'removeimg'))
			->execute()
		;

	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function removeImg($params = [])
	{
		DB::delete('pages__imgs')->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function hideImg($params = [])
	{
		DB::update('pages__imgs')->set(['enabled' => 0])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function showImg($params = [])
	{
		DB::update('pages__imgs')->set(['enabled' => 1])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}
}
?>