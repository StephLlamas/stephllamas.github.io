<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
    <h1>Latest entries</h1>
    
    <?php
        $entradas = conseguirEntradas($db, true);
        if(!empty($entradas)):
            while ($entrada = mysqli_fetch_assoc($entradas)):
    ?>
    
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['Categoría'].' | '.$entrada['fecha'].' | '.$entrada['usuario']?></span>
                        <p>
                            <?= substr($entrada['descripcion'], 0, 180).'...'?>
                        </p>
                    </a>
                </article>
    
    <?php
            endwhile; 
        endif;
    ?>
    
    <div id="ver-todas">
        <a href="entradas.php">View all entries</a>
    </div>
</div><!-- FIN PRINCIPAL -->

<?php require_once 'includes/pie.php'; ?>