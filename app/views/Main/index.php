



<div class="container">


<div class="row">
    <div class="col-8">
    
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



    <div class="col-4">
    <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">

  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



  </div>
</div>
    </div>
  </div>
</div>
</div>
    </div>
  </div>
  </div>

