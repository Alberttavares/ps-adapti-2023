<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">

  <title>OW recruitment</title>

</head>

<body>

  <header>
    <div class="teste">
      ALBERT
      @foreach ($cursos as $curso)
      <tr>
        <td>{{ $curso->id }}</td>
        <td>{{ $curso->curso }}</td>
      </tr>
      @endforeach

      @foreach ($alunos as $aluno)
      <tr>
        <td>{{ $aluno->id }}</td>
        <td>{{ $aluno->nome }}</td>
      </tr>
      @endforeach
    </div>
  </header>

  <script src="{{ asset('site/js/scripts.js') }}"></script>

</body>

</html>