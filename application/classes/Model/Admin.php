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
		DB::update('pages__pages')
			->set(['content' => ':text'])
			->where('slug', '=', ':id')
			->parameters([
				':text' =>  Arr::get($params, 'text', ''),
				':id' => Arr::get($params, 'redactpage')
			])
			->execute()
		;
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

	/**
	 * @param array $params
	 * @return bool
	 */
	public function removeProjectImg($params = [])
	{
		DB::delete('portfolio__projects_imgs')->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function hideProjectImg($params = [])
	{
		DB::update('portfolio__projects_imgs')->set(['enabled' => 0])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function showProjectImg($params = [])
	{
		DB::update('portfolio__projects_imgs')->set(['enabled' => 1])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param $text string
	 *
	 * @return string
	 */
	public function slugify($text)
	{
		$text = strip_tags($text);
		// replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '_', $text);

		// trim
		$text = trim($text, '_');

		// transliterate
		$map = [
			'а' => 'a',   'б' => 'b',   'в' => 'v',  'г' => 'g',  'д' => 'd',  'е' => 'e',  'ж' => 'zh', 'з' => 'z',
			'и' => 'i',   'й' => 'y',   'к' => 'k',  'л' => 'l',  'м' => 'm',  'н' => 'n',  'о' => 'o',  'п' => 'p',
			'р' => 'r',   'с' => 's',   'т' => 't',  'у' => 'u',  'ф' => 'f',  'х' => 'h',  'ц' => 'ts', 'ч' => 'ch',
			'ш' => 'sh',  'щ' => 'sht', 'ъ' => 'y',  'ы' => 'y',  'ь' => 'y', 'ю' => 'yu', 'я' => 'ya', 'А' => 'A',
			'Б' => 'B',   'В' => 'V',   'Г' => 'G',  'Д' => 'D',  'Е' => 'E',  'Ж' => 'ZH', 'З' => 'Z',  'И' => 'I',
			'Й' => 'Y',   'К' => 'K',   'Л' => 'L',  'М' => 'M',  'Н' => 'N',  'О' => 'O',  'П' => 'P',  'Р' => 'R',
			'С' => 'S',   'Т' => 'T',   'У' => 'U',  'Ф' => 'F',  'Х' => 'H',  'Ц' => 'TS', 'Ч' => 'CH', 'Ш' => 'SH',
			'Щ' => 'SHT', 'Ъ' => 'Y',   'Ы' => 'y',  'Ь' => 'Y', 'Ю' => 'Yu', 'Я' => 'YA'
		];
		$text = strtr($text, $map);

		// lowercase
		$text = strtolower($text);

		// remove unwanted characters
		$text = preg_replace('~[^_\w]+~', '', $text);

		if (empty($text)) {
			$text = 'na';
		}

		return $text;
	}

	/**
	 * @param string $table
	 * @param null|int $id
	 * @param string $text
	 *
	 * @return void
	 */
	public function setPageContent($table = 'pages__pages', $id = null, $text = '')
	{
		$text = str_replace('><img ', ' data-gallery=""><img ', $text);

		DB::update($table)
			->set(['content' => ':text'])
			->where('id', '=', ':id')
			->parameters([
				':text' =>  $text,
				':id' => $id
			])
			->execute()
		;
	}

	/**
	 * @param string $table
	 * @param null|int $id
	 * @param string $title
	 *
	 * @return void
	 */
	public function setPageTitle($table = 'pages__pages', $id = null, $title = '')
	{
		DB::update($table)
			->set(['title' => ':title'])
			->where('id', '=', ':id')
			->parameters([
				':title' =>  $title,
				':id' => $id
			])
			->execute()
		;
	}

	/**
	 * @param int $page_id
	 * @param string $title
	 *
	 * @return int
	 *
	 * @throws Kohana_Exception
	 */
	public function addPortfolioProject($page_id, $title)
	{
		$slug = $this->slugify($title);

		$result = DB::insert('portfolio__projects')
			->columns(['page_id', 'title', 'slug'])
			->values([$page_id, $title, $slug])
			->execute()
		;

		return $result[0];
	}

	public function loadPortfolioPprojectImg($filesGlobal, $project_id)
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
			$res = DB::insert('portfolio__projects_imgs')->columns(['project_id'])->values([$project_id])->execute();

			$new_id = Arr::get($res, 0);

			$imageName = preg_replace("/[^0-9a-z.]+/i", "0", Arr::get($files,'name',''));
			$file_name = 'public/img/projects/original/'.$new_id.'_'.$imageName;

			if (copy($files['tmp_name'], $file_name))	{
				Image::factory($file_name)
					->resize(800, NULL)
					->save($file_name,100)
				;

				$thumb_file_name = 'public/img/projects/thumb/'.$new_id.'_'.$imageName;

				if (copy($files['tmp_name'], $thumb_file_name))	{
					Image::factory($thumb_file_name)
						->resize(150, NULL)
						->save($thumb_file_name,100)
					;

					DB::update('portfolio__projects_imgs')
						->set(['src' => sprintf('%s_%s', $new_id, $imageName), 'enabled' => 1])
						->where('id', '=', ':id')
						->param(':id', $new_id)
						->execute()
					;
				}
			}
		}
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function removeNews($params = [])
	{
		DB::delete('news')->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function hideNews($params = [])
	{
		DB::update('news')->set(['viewed' => 0])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function showNews($params = [])
	{
		DB::update('news')->set(['viewed' => 1])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function hideListNews($params = [])
	{
		DB::update('news')->set(['list_viewed' => 0])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 * @return bool
	 */
	public function showListNews($params = [])
	{
		DB::update('news')->set(['list_viewed' => 1])->where('id', '=',  Arr::get($params,'id'))->execute();

		return true;
	}

	/**
	 * @param array $params
	 *
	 * @return void
	 */
	public function setNews($params = [])
	{
		DB::update('news')
			->set([
				'title' => Arr::get($params, 'title', ''),
				'content' => Arr::get($params, 'content', '')
			])
			->where('id', '=', Arr::get($params, 'redactnews'))
			->execute()
		;
	}

	/**
	 * @param array $params
	 *
	 * @return bool
	 */
	public function changeProjectLink($params = [])
	{
		DB::update('pages__imgs')
			->set([
				'project_link' => Arr::get($params, 'link', ''),
			])
			->where('id', '=', Arr::get($params, 'id'))
			->execute()
		;

		return true;
	}
}
?>