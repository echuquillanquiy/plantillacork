@include('common.modalHead')

<div class="row">
    <div class="col-12 col-lg-4 col-xl-4 col-md-12">
        <span class="text-secondary">N° de DNI</span>
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon5">#</span>
            </div>
            <input type="number" wire:model.lazy="ruc" class="form-control" placeholder="RUC">
        </div>
        @error('ruc')
            <span class="text-danger er">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="col-12 col-lg-8 col-xl-8 col-md-12">
        <span class="text-secondary">RAZÓN SOCIAL</span>
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon5">@</span>
            </div>
            <input type="text" maxlength="255" wire:model.lazy="name"  class="form-control text-uppercase" placeholder="RAZÓN SOCIAL">
        </div>

        @error('name')
            <span class="text-danger er">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>

@include('common.modalFooter')
