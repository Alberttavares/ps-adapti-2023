<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use App\Models\Curso;
use App\Models\Aluno;


class SiteController extends Controller
{
	private $cursos;
	private $alunos;

	public function __construct(Curso $curso, Aluno $aluno)
	{
		$this->alunos = $aluno;
		$this->cursos = $curso;
	}

	public function index()
	{
		$cursos = $this->cursos->all();
		$alunos = $this->alunos->all();

		return view('site.index', compact('cursos', 'alunos'));
	}


	public function create()
	{
	}


	public function store(Request $request)
	{
	}


	public function show($id)
	{
	}


	public function edit($id)
	{
	}


	public function update(Request $request, $id)
	{
	}

	public function destroy($id)
	{
	}

	public function search(SiteRequest $request)
	{
		$pesquisar = $request['search'];
		$alunos = $this->alunos
			->where('nome', 'like', "%$pesquisar%")
			->orWhereHas('cursos', function ($query) use ($pesquisar) {
				$query->where('curso', 'like', "%$pesquisar%");
			})->get();
		$cursos = $this->cursos->all();
		return view('site.index', compact('alunos', 'cursos'));
	}
}
