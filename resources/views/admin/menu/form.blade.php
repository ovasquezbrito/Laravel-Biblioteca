<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-2 col-form-label requerido">Url</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="url" placeholder="Url" required name="url" value="{{old('url')}}">
    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-sm-2 col-form-label">Icono</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="icono" placeholder="Icono" name="icono" value="{{old('icono')}}">
    </div>
</div>

