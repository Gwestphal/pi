<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 23/03/18
 * Time: 07:29
 */
include('../Include/Navbar.php');
?>
    <title>Novo Cliente</title>

    <div class="fluid-container fluid-height">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div>
                            <h4 class="grey-text" align="center">Cadastro de Cliente</h4>
                        </div>
                        <h5 align="left" id="dadoP">Dados Pessoais</h5>
                        <div class="row">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="input-field col s8">
                                        <i class="material-icons prefix">face</i>
                                        <input placeholder="Nome Completo" id="Nome Completo" type="text"
                                               class="validate" maxlength="50">
                                        <label for="Nome Completo"></label>
                                    </div>
                                    <div class="col s4">
                                        <p>
                                            <input name="masculino" type="radio" id="Masculino" value="m">
                                            <label for="Masculino">Masculino</label>
                                        </p>
                                        <p>
                                            <input name="feminino" type="radio" id="Feminino" value="f">
                                            <label for="Feminino">Feminino</label>
                                        </p>
                                        <p>
                                            <input name="outros" type="radio" id="Outros" value="o">
                                            <label for="Outros">Outros</label>
                                        </p>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="material-icons prefix">done</i>
                                        <input placeholder="CPF" id="CPF" TYPE="text" maxlength="20">
                                        <label for="CPF"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="material-icons prefix">done</i>
                                        <input placeholder="RG" id="RG" TYPE="text" maxlength="10">
                                        <label for="RG"></label>
                                    </div>
                                    <div class="input-field col s2">
                                        <select>
                                            <option value="" disabled selected>UF</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option value="MG">MG</option>
                                            <option value="PA">PR</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="material-icons prefix">email</i>
                                        <input placeholder="E-Mail" id="E-Mail" TYPE="email" class="validate">
                                        <label data-error="E-Mail Invalido" data-success="E-Mail válido"
                                               for="E-Mail"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="material-icons prefix">phone</i>
                                        <input placeholder="Telefone" id="Telefone" TYPE="tel" class="validate">
                                        <label for="Telefone"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="material-icons prefix">phone</i>
                                        <input placeholder="Celular" id="celular" TYPE="tel" class="validate">
                                        <label for="celular"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <i class="material-icons prefix">home</i>
                                        <input placeholder="Endereço" id="Endereco" TYPE="text" class="validate">
                                        <label for="Endereco"></label>
                                    </div>
                                    <div class="input-field col s3">
                                        <i class="material-icons prefix">home</i>
                                        <input placeholder="CEP" id="cep" TYPE="text" class="validate">
                                        <label for="cep"></label>
                                    </div>
                                    <div class="input-field col s3">
                                        <i class="material-icons prefix">home</i>
                                        <input placeholder="Cidade" id="Cidade" TYPE="text" class="validate">
                                        <label for="Cidade"></label>
                                    </div>
                                    <div class="input-field col s2">
                                        <select>
                                            <option value="" disabled selected>Estado</option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AP">AP</option>
                                            <option value="AM">AM</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MT">MT</option>
                                            <option value="MS">MS</option>
                                            <option value="MG">MG</option>
                                            <option value="PA">PR</option>
                                            <option value="PB">PB</option>
                                            <option value="PR">PR</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RS">RS</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="SC">SC</option>
                                            <option value="SP">SP</option>
                                            <option value="SE">SE</option>
                                            <option value="TO">TO</option>
                                        </select>
                                        <div class="input-field col s12 left">
                                            <!-- Aqui entra um foreach-->
                                            <select>
                                                <option value="" disabled selected>Especialidade</option>
                                                <option value="Garçom">Garçom</option>
                                                <option value="DJ">DJ</option>
                                                <option value="Bartende">Bartende</option>
                                                <option value="Buffet">Buffet</option>
                                                <option value="Organização">Organização</option>
                                                <option value="Limpeza">Limpeza</option>
                                                <option value="Animadores">Animadores</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <a class="waves-effect waves-light btn red right"><i
                                            class="material-icons left">delete</i>Excluir</a>
                                <a class="waves-effect waves-light btn green right"><i
                                            class="material-icons left">done</i>Enviar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('../Include/footer.php');
?>