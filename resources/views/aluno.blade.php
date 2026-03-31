@foreach ($alunos as $aluno)
    <h3>Nome: {{ $aluno->nome }}</h3>
    <h3>Telefone: {{ $aluno->telefone}}</h3>
    <h3>E-mail: {{ $aluno->email }}</h3>
@endforeach