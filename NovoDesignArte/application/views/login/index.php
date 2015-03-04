<div class="container">
    <h1 class="text-center">Login</h1>
    <?php echo form_open("login/autenticar");?>
        <div class="form-group">
            <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="senha" id="senha" class="form-control input-lg" placeholder="Senha">
        </div>
        <div class="form-group">
            <!--<button name="logar" id="logar" class="btn btn-primary btn-lg btn-block">Login</button>-->
          <input type="submit" name="logar" id="logar" value="Logar" />
            <br> <span><a href="#">Esqueceu a senha?</a></span>
        </div>
    </form>
    <div class="col-md-12">
        <br><p align="right">Não é cadastrado? <a href="cadastrar.php">Cadastre-se</a></p>
    </div>
</div>