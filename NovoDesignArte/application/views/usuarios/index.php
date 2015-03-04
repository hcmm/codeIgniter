
    <div class="container">
        <h1 class="text-center">Cadastrar</h1>
        <?php echo form_open("usuarios/novo");?>
                <div class="form-group">
                    <input type="text" name="nome" class="form-control input-lg" placeholder="Nome">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control input-lg" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" name="telefone" class="form-control input-lg" placeholder="Telefone">
                </div>
                <div class="form-group">
                    <input type="text" name="celular" class="form-control input-lg" placeholder="Celular">
                </div>
                <div class="form-group">
                    <input type="text" name="cidade" class="form-control input-lg" placeholder="Cidade">
                </div>
                <div class="form-group">
                    Tipo de Usuário:
                    <select name="tipo_de_usuario">
                        <option value="">Selecionar</option>
                        <option value="1">Designer</option>
                        <option value="2">Cliente</option>
                    </select>
                </div>

                <p>&nbsp;<p>
                <div class="form-group">
                    <h2>Usuário</h2>
                </div>
                <div class="form-group">
                    <input type="text" name="login" class="form-control input-lg" placeholder="Usuário">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" class="form-control input-lg" placeholder="Senha">
                </div>
                <div class="form-group">
                    <input type="password" name="conf_senha" class="form-control input-lg" placeholder="Confirmar Senha">
                </div>
                <div class="form-group">
                    <input type="radio"> <span> Estou de acordo com os <a href="#">Termos de Uso</a></span>
                </div>
                <br>
                <div class="form-group">
                    <!--<button class="btn btn-primary btn-lg btn-block">Login</button>-->
                    <input type="submit" name="registrar" id="registrar" value="Registrar" />
                </div>
            </form>
        </div>
    </script>
