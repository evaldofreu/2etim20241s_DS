<style>
  .img-produto{
    width: 100px;
    height: 100px;
  }   
</style>




<div class="row justify-content-end">
  <div class="col-1 justify-content-end">
   <a href="produto/create"  type="button" class="btn btn-outline-secondary">Novo</a>
  </div> 
</div>  

<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>

   <?php foreach($produtos as $p)  {  ?>
    <tr>
      <th scope="row"><?= $p->get("id") ?></th>
      <td><img 
          src="<?=$p->get("imagem")?>" 
          class="img-produto">
       </td>
      <td><?=$p->get("nome")?></td>
      <td>R$ <?=$p->get("preco")?></td>
    </tr>

   <?php } ?> 


</table>