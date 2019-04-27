



<div class="container">





<div class="card">
  <div class="card-header">
    Featured <code><?=__FILE__?></code>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
<br><hr>

    <?php

foreach($posts as $k => $v) {
    echo $v['title'];
    echo '<br><br>';
    echo $v['text'];
    echo '<br><hr>';
}

?>


</div>

  </div>
</div>





