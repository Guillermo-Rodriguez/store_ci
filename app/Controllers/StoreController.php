<?php 

namespace App\Controllers;

use App\Models\Store;

class StoreController extends BaseController
{
	public function index()
	{
		$model = new Store();
		$data = $model->findAll();
		return view('store/index', ['data'=>$data]);
	}

	public function new()
	{
		return view('store/create');
	}

	public function create()
	{
		$model = new Store();
		if($this->request->getMethod() == 'post'){
			$req = $this->request->getPost();
			$model->save([
				'nombre' => $req['nombre'],
				'marca' => $req['marca'],
				'descripcion' => $req['descripcion'],
				'precio' => $req['precio'],
				'fecha_ingreso' => date('Y-m-d H:i:s')
			]);
			return redirect('/');
		}
	}

	public function view($id = null)
	{
		$model = new Store();
		$model = $model->find($id);
		return view('store/view', ['model'=>$model]);
	}

	public function edit($id = null)
	{
		$model = new Store();
		$model = $model->find($id);
		return view('store/update', ['model'=>$model]);
	}

	public function update($id = null)
	{
		if($this->request->getMethod() == 'post'){
			$req = $this->request->getPost();
			$model = new Store();
			$model->update($id, $req);
			return redirect('/');
		}
	}

	public function delete($id = null){
		$model = new Store();
		$model->delete($id);
		return redirect('/');
	}




}
