@include('common.modalHead')

<div class="row">
    <div class="col-12 col-lg-6 col-xl-6 col-md-12">
        <span class="text-secondary">N° de DNI</span>
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon5">#</span>
            </div>
            <input type="number" wire:model.lazy="dni" class="form-control" placeholder="DNI">
        </div>
        @error('dni')
            <span class="text-danger er">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="col-12 col-lg-6 col-xl-6 col-md-12">
        <span class="text-secondary">NOMBRES</span>
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon5">@</span>
            </div>
            <input type="text" maxlength="255" wire:model.lazy="name"  class="form-control text-uppercase" placeholder="Nombres">
        </div>

        @error('name')
            <span class="text-danger er">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="col-12">
        <span class="text-secondary">APELLLIDOS COMPLETOS</span>
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon5">@</span>
            </div>
            <input type="text" maxlength="255" wire:model.lazy="lastname" class="form-control text-uppercase" placeholder="Apellidos">
        </div>

        @error('lastname')
            <span class="text-danger er">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>

@include('common.modalFooter')
