<?php include 'cabecalho.php';?>
<?php ################################ ?>

<form class="form-horizontal">
  <fieldset>
    <legend>Insira seu login</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Usuário</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="usuário" name="usuario">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Senha</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="senha" senha="senha">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<?php ################################ ?>
<?php include 'footer.php';?>