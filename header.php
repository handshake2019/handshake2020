<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Handshake</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Artistas.php">Artistas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Contratantes.php">Contratantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="eventos.php">Eventos</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php #team">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php #contact">Fale Conosco</a>
          </li>
          <button type="button" href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#login-modal">Login</button>
          &nbsp;&nbsp;
          <button type="button" hrer="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#cadastro-modal">Cadastre-se</button>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal Login -->
  <div class="modal fade" id="login-modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Cabeçalho -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal Corpo -->
        <div class="modal-body">
          <div class="container">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control" id="email" placeholder="exemplo@email.com" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Senha:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="pswd">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Lembrar-me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
  </div>
  <!--Fim do modal login-->

<!-- Modal Cadastro -->
  <div class="modal fade" id="cadastro-modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Cabeçalho -->
        <div class="modal-header">
          <h4 class="modal-title">Cadastro</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal Corpo -->
        <div class="modal-body">
          <div class="container">
            <form action="procedimentoscadastro.php" method="POST" id="formCadastro">
              <div class="form-group">
                <label for="usuario">Usuário:</label>
                  <input type="text" class="form-control" id="etdusuario" maxlength="30" name="etdusuario"  placeholder="Ex: Usuário(Até 20 caracteres)">
              </div>
              <div class="form-group">
                <label for="usuario">Tipo de perfil:</label>
                  <!--<input type="checkbox" class="form-control" id="etdtipoperfil" name="etdtipoperfil" >-->
                  <select id="tipodeperfil">
                      <option value="SE">ARTISTA</option>
                      <option value="TO">CONTRATANTE</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="nomecompleto">Nome Completo:</label>
                  <input type="text" class="form-control" id="etdnome" maxlength="50" name="etdnome" placeholder="Nome completo(Até 50 caracteres)">
              </div>
              <div class="form-group">
                <label for="datadenascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="etddata" name="etddata" placeholder="Data">
              </div>
              <div class="form-group">
                <label for="emailcadastro">E-mail:</label>
                <input type="email" class="form-control" id="etdemail" maxlength="30" name="etdemail" placeholder="example@email.com">
              </div>
              <div class="form-group">
                <label for="senhacadastro">Senha:</label>
                <input type="password" class="form-control" id="etdsenha" minlength="6" maxlength="12" name="etdsenha" placeholder="Informe sua senha (6-12 caracteres)">
              </div>
              <div class="form-group">
                <label for="confirmarsenhacadastro">Confirmar Senha:</label>
                <input type="password" class="form-control" id="etdconfirmarsenha" minlength="6" maxlength="12" name="etdconfirmarsenha" placeholder="Confirme sua senha (6-12 caracteres)">
              </div>
              <div class="form-group form-check">
                </div>
                <button type="button" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
              </form>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
  </div>
  <!--Fim do modal cadastro-->