<?php
require_once "../../dao/AdmDao.php";
$adms = AdmDao::selectAll();
$qtdAdms = count($adms);
?>

<?php
require_once "../../dao/CursoDao.php";
$cursos = CursoDao::selectCursos();
$qtdCursos = $cursos['total'];
?>

<html>

<div style="display: flex;flex-direction: column;width: 100%; padding: 2rem;">
    <div class="dados">
        <a href="../curso/index.php">
            <div class="card dadosCard">
                <img class="imgDados" src="../../img/defaultUser.png" alt="era pra ter algo aq">
                <div class="infoDados">
                    <div class="titulo">
                        <h1><?= $qtdCursos ?> <span class="espaco">Cursos</span></h1>
                    </div>
                    <div class="pendentes">
                        <h3><?= $qtdCursos ?> pendentes </h3>
                    </div>
                </div>
            </div>
        </a>

        <a href="../instituicao/index.php">
            <div class="card dadosCard">
                <img class="imgDados" src="../../img/defaultUser.png" alt="era pra ter algo aq">
                <div class="infoDados">
                    <div class="titulo">
                        <h1><?= $qtdCursos ?> <span class="espaco">Instituições</span></h1>
                    </div>
                    <div class="pendentes">
                        <h3><?= $qtdCursos ?> pendentes </h3>
                    </div>
                </div>
            </div>
        </a>

        <a href="../denuncia/index.php">
            <div class="card dadosCard">
                <img class="imgDados" src="../../img/defaultUser.png" alt="era pra ter algo aq">
                <div class="infoDados">
                    <div class="titulo">
                        <h1><?= $qtdCursos ?> <span class="espaco">Denuncias</span></h1>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div style="display: flex;flex-direction: row; justify-content:space-between;">
        <div class="tabela">
            <div class="nomesTab">
                <h3>Instituições mais favoritadas </h3>
            </div>
            <div class="listInst">
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        Unicamp
                    </div>
                    <div class="favoritados">
                        276
                    </div>
                </div>
            </div>
        </div>

        <div class="card grafico" style="max-height: 48dvh;min-height: 10rem;width: 96dvh; margin-left:3rem;">
        </div>
    </div>
</div>

</html>