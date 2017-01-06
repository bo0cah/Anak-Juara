@extends('layouts.master')

@section('title')
	Tambah Pengajuan
@endsection

@section('content')
	<h2>Tambah Pengajuan</h2>
	<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Nuevo usuario</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Persona</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="0">(Seleccione una)</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="perfil">Perfil de seguridad</label>
  <div class="col-md-4">
    <select id="perfil" name="perfil" class="form-control">
      <option value="0">(Seleccione uno)</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UID">Id. de usuario</label>  
  <div class="col-md-4">
  <input id="UID" name="UID" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pwd">Contrasena</label>
  <div class="col-md-4">
    <input id="pwd" name="pwd" placeholder="Letras y numeros, 6 o mas chars." class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pwd_confirm">Confirmacion</label>
  <div class="col-md-4">
    <input id="pwd_confirm" name="pwd_confirm" placeholder="" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cambiar_pwd">Debe cambiar contrasena?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="cambiar_pwd-0">
      <input name="cambiar_pwd" id="cambiar_pwd-0" value="1" type="checkbox">
      Si, cambiar contrasena
    </label>
    </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comentario">Comentario</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comentario" name="comentario"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn_continuar"></label>
  <div class="col-md-4">
    <button id="btn_continuar" name="btn_continuar" class="btn btn-primary">Continuar</button>
  </div>
</div>

</fieldset>
</form>
@endsection