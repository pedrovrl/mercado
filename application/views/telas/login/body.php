<div id="login">
  <form id="login_form" action="<?php echo base_url();?>login/enter" method="POST">
<?php if($this->session->flashdata("success")) :?>

    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
<?php endif ?>
<?php if($this->session->flashdata("danger")) :?>
    <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
<?php endif ?>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" autofocus="">
    </div>
    <div class="form-group">
      <label for="pass">Senha</label>
      <input type="password" class="form-control" id="pass" placeholder="Senha" name="pass">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Manter-me Logado!
      </label>
    </div>
    <button type="submit" class="btn btn-block btn-primary btn-default">Logar</button>
  </form>
</div>