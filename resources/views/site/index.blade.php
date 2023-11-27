<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OW Recruitment</title>
</head>

<body>
	<header id="cabecalho">
		<img src="{{asset('site/img/LOGO_SF2.png')}}" alt="LOGO OW">
		<div id="pesquisar">
			<form action="" method="">
				<input type="text" placeholder="Pesquisar" name="nome">
			</form>
		</div>

		<nav id="botoes-acesso">
			<ul>
				<li><a href="#">SOBRE NÓS</a></li>
				<li><a href="#">CONTATOS</a></li>
				<li><a href="#">SERVIÇOS</a></li>


			</ul>
		</nav>
	</header>
	<main id="principal">
		<div id="conteiner-card">
			@foreach($alunos as $aluno)
			<div id="card-principal" class="card">
				<img src="{{ url($aluno->imagem) }}" class="" alt="">
				<div class="titulo-card">Nome: {{$aluno->nome}}</div>
				@foreach($cursos as $curso)
				@if($aluno->curso_id == $curso -> id)
				<div class="titulo-card">Curso: {{$curso->curso}}</div>
				@endif
				@endforeach
				<div class="titulo-card">Formado: {{$aluno->formado ? 'Sim' : 'Não'}}</div>
				<div class="titulo-card">Descrição: {{$aluno->descricao}}</div>
				<div class="botao-card">
					@if($aluno->estaContratado)
					<!-- <p class="event-type">CONTRATADO</p> -->
					@else
					<form class="form-card" action="{{ route('aluno.contratar', $aluno) }}" method="post">
						@csrf

						<button class="botaoContratar">{{$aluno->contratado ? 'CONTRATADO!' : 'CONTRATAR'}}</button>

					</form>
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</main>

	<script src=" {{ asset('site/js/scripts.js') }}"></script>
</body>

</html>