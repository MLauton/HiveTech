<div style="width: 50%; display: flex; align-items: center;flex-direction: column;">
    <input class="pesquisa" placeholder="⌕ Pesquisa denuncias ou usuarios...." />

    <div class="listCurso">
        <?php
        foreach ($cursos as $c) {
        ?>
            <form action="" method="post">
                <button type="submit" style="border: none; background: transparent;">
                <div class="card cursos">
                    <input type="hidden" name="idCurso" value="<?= $c[0] ?>">
                    <div class="layoutCurso">
                        <div class="imgCurso"></div>
                        <div>
                            <h3 class="titleCurso"><?= $c[1] ?></h4>
                                <h5 class="instCurso">Fatec - sla</h5>
                        </div>
                    </div>
                    
                </div>
            </form>
        </button>
        <?php
        }
        ?>

    </div>
</div>