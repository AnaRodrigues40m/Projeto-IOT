<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="col-8">
            <h2 class="fw-bold text-primary mb-1">Sensores</h2>
        </div>
        <a class="btn btn-primary btn-lg" href="{{ route('sensor.create') }}">
            Novo Sensor
        </a>
    </div>
    <div class="card ">
        <div class="shadow rounded-4 ">
            <div class="card-header d-flex justify-content-between align-items-center nomeTabela corTabela">
                <div class="input-group rounded shadow-sm me-5 ">
                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                    <input type="text" wire:model.live="search" class="form-control border-start-0"
                        placeholder="Buscar Sensores...">

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Codigo</th>
                            <th>Tipo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- ele vai colocar os dados do funcionarios e coloca na variavel f, ele vai 'popular  nossa tabela' --}}
                        @foreach ($sensor as $s)
                            <tr>
                <td>{{ $s->codigo }}</td>
                <td>{{ $s->tipo }}</td>
                <td>
                    @if($s->status)
                        <span class="badge bg-success">Ligado</span>
                    @else
                        <span class="badge bg-danger">Desligado</span>
                    @endif
                
                    {{-- Chama a função toggleStatus() passando o ID do sensor --}}
                    <button
                        class="btn btn-sm @if($s->status) btn-warning @else btn-success @endif"
                        wire:click="toggleStatus({{ $s->id }})"
                    >
                        @if($s->status)
                            Desligar
                        @else
                            Ligar
                        @endif
                    </button>
                </td>
            </tr>
            @endforeach
                    </tbody>
                </table>
            </div>
            {{ $sensor->links() }}
        </div>
    </div>
</div>