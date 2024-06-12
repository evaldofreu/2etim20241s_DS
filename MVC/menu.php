<nav class='navbar bg-body-tertiary'>
       <div class="container-fluid">
         <a class="navbar-brand">Lojinha ETEC</a>

         <form class="d-flex">
            <?php if ($uri=="/") { ?>
                <a href="/produto" class="btn btn-outline-success md-2">Produtos</a>
            <?php } else { ?>
               <a href="/" class="btn btn-outline-success md-2">Inicio</a>
            <?php }  ?>

         </form>  
         
         </div>
</nav>    
