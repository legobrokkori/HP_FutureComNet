<?php

class Controller_Admin extends Controller_Base
{
	public $template = 'admin/template';

	public function before()
	{
		parent::before();

		if (Request::active()->controller !== 'Controller_Admin' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
				$admin_group_id = Config::get('auth.driver', 'Simpleauth') == 'Ormauth' ? 6 : 100;
				if ( ! Auth::member($admin_group_id))
				{
					Session::set_flash('error', e('You don\'t have access to the admin panel'));
					Response::redirect('/');
				}
			}
			else
			{
				// リクエストをセッションにセット
				Session::set('req',Uri::main());
				Response::redirect('admin/login');
			}
		}
	}

	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('admin');

		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val->add('email', 'ユーザ名')
			    ->add_rule('required');
			$val->add('password', 'パスワード')
			    ->add_rule('required');

			if ($val->run())
			{
				if ( ! Auth::check())
				{
					if (Auth::login(Input::post('email'), Input::post('password')))
					{

						$req = Session::get('req');
						// assign the user id that lasted updated this record
						foreach (\Auth::verified() as $driver)
						{
							if (($id = $driver->get_user_id()) !== false)
							{
								// credentials ok, go right in
								$current_user = Model\Auth_User::find($id[1]);
								//Session::set_flash('success', e('Welcome, '.$current_user->username));
								//Response::redirect('admin');

								// ログイン後にリクエスト先へ遷移
								Response::redirect($req);
							}
						}
					}
					else
					{
						$this->template->set_global('login_error', 'ログイン処理に失敗しました');
					}
				}
				else
				{
					$this->template->set_global('login_error', '既にログイン済みです');
				}
			}
		}

		$this->template->title = 'ログイン';
		$this->template->content = View::forge('admin/login', array('val' => $val), false);
	}

	/**
	 * The logout action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('admin');
	}

	/**
	 * The index action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		//$this->template->title = 'Dashboard';
		//$this->template->content = View::forge('admin/dashboard');
		$this->template = Request::forge('admin/applicants')->execute();
	}

}

/* End of file admin.php */
