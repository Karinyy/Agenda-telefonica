<div class="row">

  <form class="form-horizontal" name="agenda" action="dao/cad_contato.php" method="post" >
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" required>
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
      <label>Telefone</label>
      <input type="tel" class="form-control" name="telefone">
    </div>
                      
  <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
</div>