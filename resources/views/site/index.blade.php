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
		<img src="{{asset('site/img/logo.png')}}" alt="LOGO OW">
		<nav>
			<ul>
				<li><a href="#">SOBRE NÓS</a></li>
				<li><a href="#">CONTATOS</a></li>
				<li><a href="#">SERVIÇOS</a></li>
				<li><a href="#">PORTIFÓLIO</a></li>

			</ul>
		</nav>
		<div>
			LKSNBDALJABADSBNJ
		</div>
	</header>
	<main id="principal">
		<div id="conteiner-card">
			@foreach($alunos as $aluno)
			<div id="card-principal" class="card">
				<img src="{{ url($aluno->imagem) }}" class="" alt="">
				<div class="titulo-card">{{$aluno->nome}}</div>
				@foreach($cursos as $curso)
				@if($aluno->curso_id == $curso -> id)
				<div class="titulo-card">Engenharia da Computação</div>
				@endif
				@endforeach
				<div class="titulo-card">{{$aluno->descricao}}</div>
				<button class="botaoContratar">CONTRATAR</button>
			</div>
			@endforeach
		</div>
	</main>





	<script src=" {{ asset('site/js/scripts.js') }}"></script>
</body>

</html>