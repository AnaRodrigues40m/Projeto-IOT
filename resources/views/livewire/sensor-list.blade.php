
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-danger mb-1">Sensores</h2>
        </div>
        <a class="btn btn-danger btn-lg" href="{{ route('sensor.create') }}">
            Novo Sensor
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Id Ambiente</th>
                    <th>Codigo</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                {{-- ele vai colocar os dados do funcionarios e coloca na variavel f, ele vai 'popular  nossa tabela' --}}
                @foreach ($sensor as $s)
                    <tr>
                        <td>{{ $s->ambiente->id }}</td>
                        <td>{{ $s->codigo }}</td>
                        <td>{{ $s->tipo }}</td>
                        <td>{{ $s->descricao }}</td>
                        <td>{{ $s->status }}</td>
                        <td>
                            <a href="{{ route('sensor.edit', $s->id) }}"
                                class="btn btn-warning me-1" data-bs-toggle="tooltip" title="Editar">Editar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
