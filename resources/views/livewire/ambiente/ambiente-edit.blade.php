
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-light rounded">
                <div class="card-header text-center fw-bold text-danger mb-1">
                    <h4>Cadastro de Ambientes</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" wire:model.defer="nome"
                                placeholder="Sala, biblioteca...">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="descricao" wire:model.defer="descricao"
                                placeholder="digite aqui...">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="status" wire:model.defer="status">
                            <label class="form-check-label" for="status">Status do ambiente</label>
                        </div>
                        <input class="btn btn-danger mt-2" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
