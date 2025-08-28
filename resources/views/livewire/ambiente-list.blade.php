<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-dark mb-1">Ambientes</h2>
        </div>
        <a class="btn btn-primary btn-lg" href="{{ route('ambiente.create') }}">
            Novo Ambiente
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                {{-- ele vai colocar os dados do funcionarios e coloca na variavel f, ele vai 'popular  nossa tabela' --}}
                @foreach ($ambiente as $a)
                    <tr>
                        <td>{{ $a->nome }}</td>
                        <td>{{ $a->descricao }}</td>
                        <td>{{ $a->status }}</td>
                        <td>
                            <a href="{{ route('ambiente.edit', $a->id) }}"
                                class="btn btn-warning me-1" data-bs-toggle="tooltip" title="Editar">Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>