<style>
  .img-produto{
    width: 100px;
    height: 100px;
  }   
</style>
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
      <th scope="row"><?=1?></th>
      <td><img 
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiwKBeS07GNfUZMA1rB5d0Y_-zO6n0BPyzDhDCBDmJbw&s" 
          class="img-produto">
       </td>
      <td>Banana</td>
      <td>R$ 5.5</td>
    </tr>

   <?php } ?> 


</table>