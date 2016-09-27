<?php
class Controller_Admin_Applicants extends Controller_Admin
{

	public function action_index()
	{

		// table records count
		$number_of_articles = Model_Applicant::query()->count();

		// config of pagination
		$config = array(
			'total_items' => $number_of_articles,
			'per_page' => 20,
			'uri_segment' => 'page',
			'num_links' => 5,
		    'show_first' => true,
		    'show_last' => true,
		);

 		$pagination = Pagination::forge('mypagination', $config);


		// Applicants テーブルと entrycategory テーブルを join し、データ取得
		// rows_・・・で pagination 設定
	    $data['Applicants'] = Model_Applicant::query()
		    ->related('entrycategory_id')
		    ->order_by('t0.id', 'desc')
		    ->rows_limit($pagination->per_page)
        	->rows_offset($pagination->offset)
		    ->get();

		$this->template->title = '応募者一覧';
		$this->template->content = View::forge('admin/applicants/index', $data);

	}

	public function action_view($id = null)
	{
		//$data['Applicant'] = Model_Applicant::find($id);
		$data['Applicant'] = Model_Applicant::find(
					$id ,
					array('related' => array('entrycategory_id'))
				);

		$this->template->title = "応募者詳細";
		$this->template->content = View::forge('admin/applicants/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Applicant::validate('create');

			if ($val->run())
			{
				$Applicant = Model_Applicant::forge(array(
					'entrycategory' => Input::post('entrycategory'),
					'entrydate' => Input::post('entrydate'),
					'occupation' => Input::post('occupation'),
					'applicant' => Input::post('applicant'),
					'sex' => Input::post('sex'),
					'age' => Input::post('age'),
				));

				if ($Applicant and $Applicant->save())
				{
					Session::set_flash('success', e('Added Applicant #'.$Applicant->id.'.'));

					Response::redirect('admin/applicants');
				}

				else
				{
					Session::set_flash('error', e('Could not save Applicant.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Applicants";
		$this->template->content = View::forge('admin/applicants/create');

	}

	public function action_edit($id = null)
	{
		$Applicant = Model_Applicant::find($id);
		$val = Model_Applicant::validate('edit');

		if ($val->run())
		{
			$Applicant->entrycategory = Input::post('entrycategory');
			$Applicant->entrydate = Input::post('entrydate');
			$Applicant->occupation = Input::post('occupation');
			$Applicant->applicant = Input::post('applicant');
			$Applicant->sex = Input::post('sex');
			$Applicant->age = Input::post('age');

			if ($Applicant->save())
			{
				Session::set_flash('success', e('Updated Applicant #' . $id));

				Response::redirect('admin/applicants');
			}

			else
			{
				Session::set_flash('error', e('Could not update Applicant #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$Applicant->entrycategory = $val->validated('entrycategory');
				$Applicant->entrydate = $val->validated('entrydate');
				$Applicant->occupation = $val->validated('occupation');
				$Applicant->applicant = $val->validated('applicant');
				$Applicant->sex = $val->validated('sex');
				$Applicant->age = $val->validated('age');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('Applicant', $Applicant, false);
		}

		$this->template->title = "Applicants";
		$this->template->content = View::forge('admin/applicants/edit');

	}

	public function action_delete($id = null)
	{
		if ($Applicant = Model_Applicant::find($id))
		{
			$Applicant->delete();

			Session::set_flash('success', e('Deleted Applicant #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete Applicant #'.$id));
		}

		Response::redirect('admin/applicants');

	}

}
