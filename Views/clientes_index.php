<?php
/**
 * Created by PhpStorm.
 * User: douglas
 * Date: 23/03/18
 * Time: 08:07
 */
include('../Include/Navbar.php');
?>
    <title>Clientes</title>
    <!--<!-- Aqui entra o conteúdo da página-->

    <div class="fluid-container fluid-height">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div>
                            <h4 class="grey-text" align="center">Quadro de Clientes</h4>
                        </div>
                        <!-- Aqui entra um foreach-->
                        <table class="striped bordered responsive-table">
                            <thead>
                            <tr>
                                <th>Ação</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Fixo</th>
                                <th>Celular</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a class="waves-effect waves-light" href="#"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="#"><i
                                                class="material-icons left red-text">delete</i></a>
                                </td>
                                <td>xxxx</td>
                                <td>xxxxx xxxxx</td>
                                <td>(xx) x xxxx-xxxx</td>
                                <td>(xx) x xxxx-xxxx</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="waves-effect waves-light" href="#"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="#"><i
                                                class="material-icons left red-text">delete</i></a>
                                </td>
                                <td>xxxx</td>
                                <td>xxxxx xx xxxx</td>
                                <td>(xx) x xxxx-xxxx</td>
                                <td>(xx) x xxxx-xxxx</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="waves-effect waves-light" href="#"><i
                                                class="material-icons left">mode_edit</i></a>
                                    <a href="#"><i
                                                class="material-icons left red-text">delete</i></a>
                                </td>
                                <td>xxxx</td>
                                <td>xxxxx xx xxxx</td>
                                <td>(xx) x xxxx-xxxx</td>
                                <td>(xx) x xxxx-xxxx</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="right-align">
                        <a class="btn-floating btn-large waves-effect waves-light"
                           href="#"><i
                                    class="material-icons">add</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// depois resolver o bug deste include
include('../Include/footer.php');

?>