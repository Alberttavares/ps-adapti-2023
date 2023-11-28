<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OW Recruitment</title>
</head>

<body class="ligth-mode">
	<header id="cabecalho">
		<a class="home" href="/">
			<img src="{{asset('site/img/LOGO_SF2.png')}}" alt="LOGO OW">

		</a>
		<div class="lupa-pesquisar">
			<button class="b-pesquisar"><span class="material-icons">search</span></button>
			<div id="pesquisar">
				<form action="{{ url('/search')}}" method="GET">
					<input id="interior-pesquisa" type="text" placeholder="Pesquisar" name="search">
				</form>
			</div>
		</div>

		<nav id="botoes-acesso">
			<ul>
				<li><a id="b1" href="#b-sobre-nos">SOBRE NÓS</a></li>
				<li><a id="b2" href="#ctt">CONTATOS</a></li>
				<li><a id="b3" href="#b-servicos">SERVIÇOS</a></li>
				<div id="icons">
					<button class="b-darkmode"><span class="material-icons">contrast</span></button>
					<button class="b-perfil" id="perfil-bt"><span class="material-icons">account_circle</span></button>
				</div>
			</ul>
		</nav>
	</header>
	<main id="principal">
		<div id="conteiner-card">
			@foreach($alunos as $aluno)
			<div id="card-principal" class="card">
				<img src="{{ url($aluno->imagem) }}" class="" alt="">
				<div class="titulo-card">NOME: {{$aluno->nome}}</div>
				@foreach($cursos as $curso)
				@if($aluno->curso_id == $curso -> id)
				<div class="titulo-card">CURSO: {{$curso->curso}}</div>
				@endif
				@endforeach
				<div class="titulo-card">FORMADO(A): {{$aluno->formado ? 'Sim' : 'Não'}}</div>
				<div class="titulo-card">DESCRIÇÃO: {{$aluno->descricao}}</div>
				<div class="botao-card">
					@if($aluno->estaContratado)
					<!-- <p class="event-type">CONTRATADO</p> -->
					@else
					<form class="form-card" action="{{ route('aluno.contratar', $aluno) }}" method="post">
						@csrf

						<button id="b-contrata" class="botaoContratar">{{$aluno->contratado ? 'CONTRATADO!' : 'CONTRATAR'}}</button>

					</form>
					@endif
				</div>
			</div>
			@endforeach
		</div>
	</main>

	<footer id="paginacao">
		<div id="b-sobre-nos">
			<img src="{{asset('site/img/LOGO_SF2.png')}}" alt="LOGO OW">
			<h2>Sobre o Ow Recruitment!</h2>
			<h3>

				Bem-vindo ao Ow Recruitment, um espaço dedicado a conectar jovens universitários ao pulsante mundo do mercado de trabalho. Somos uma plataforma concebida por estudantes universitários, impulsionada pela missão de ampliar oportunidades para talentos emergentes.

				Acreditamos no potencial transformador da juventude, na vitalidade da inovação e na força do conhecimento acadêmico. Nossa meta é simplificar a transição dos jovens universitários para o cenário profissional, independentemente de estarem formados ou buscando experiências valiosas durante sua trajetória acadêmica.

				Reconhecemos os desafios e complexidades enfrentados ao ingressar no mercado de trabalho.
				<h3>

					No Ow Recruitment, comprometemo-nos a oferecer uma plataforma inclusiva, conectando talentos a empresas sedentas por novas ideias e mentes inovadoras.

					Nossa comunidade é uma teia diversificada de jovens, cada um com suas habilidades, ambições e paixões. Valorizamos a diversidade, entendendo que é essa variedade de perspectivas que alimenta a inovação e o progresso.

					Se você é um estudante pronto para explorar novos horizontes ou uma empresa em busca de talentos frescos e motivados, estamos aqui para facilitar essa jornada. Faça parte do Ow Recruitment e integre-se a uma comunidade que acredita no potencial inesgotável da próxima geração.

					Juntos, estamos construindo um futuro mais promissor, onde as oportunidades são infinitas e o talento é a chave para o sucesso.
				</h3>
			</h3>



		</div>
	</footer>

	<div id="ctt">
		<img src="{{asset('site/img/LOGO_SF2.png')}}" alt="LOGO OW">
		<h2>CONTATOS</h2>
		<h3>xxxxxxxxxx@gmail.com</h3>
		<h3>(027) xxxxx-xxxx</h3>
	</div>

	<div id="b-servicos">
		<img src="{{asset('site/img/LOGO_SF2.png')}}" alt="LOGO OW">
		<h2>SERVIÇOS</h2>
		<h3>
			Conexão Direta ao Mercado Profissional
			<h3>
				Assessoria Personalizada: Orientação sob medida para traçar metas e direcionar carreiras.
			</h3>

			<h3>
				Acesso a Oportunidades: Conectamos alunos a estágios e oportunidades de trabalho.
			</h3>

			<h3>
				Workshops e Treinamentos: Desenvolvimento de habilidades técnicas e comportamentais.
			</h3>

			<h3>
				Mentoria Profissional Orientação prática por profissionais experientes.
			</h3>

			<h3>
				Criação de Portfólio: Destaque suas realizações e projetos relevantes.
			</h3>


			<h3>
				Preparamos alunos universitários para o mercado de trabalho, conectando talentos a oportunidades e oferecendo suporte essencial para o sucesso profissional.
			</h3>
	</div>
	<script src=" {{ asset('site/js/scripts.js') }}"></script>
</body>

</html>