<div class="container">
  <div class="row">
    <div class="col-sm-4">


    <div class="card">
  <img src="../images/ava.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title <?php if(isset($_SESSION['user'])) {echo $_SESSION['user']['id']; } else { echo ' '; } ?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<br>


<ul class="list-group">
  <li class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center">A simple primary list group item<span class="badge badge-primary badge-pill">12</span></li>
  <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">A simple secondary list group item<span class="badge badge-primary badge-pill">3</span></li>
  <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">A simple success list group item<span class="badge badge-primary badge-pill">56</span></li>
  <li class="list-group-item list-group-item-danger d-flex justify-content-between align-items-center">A simple danger list group item<span class="badge badge-primary badge-pill">12</span></li>
  <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center">A simple warning list group item<span class="badge badge-primary badge-pill">67</span></li>
  <li class="list-group-item list-group-item-info d-flex justify-content-between align-items-center">A simple info list group item<span class="badge badge-primary badge-pill">42</span></li>
  <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center">A simple dark list group item<span class="badge badge-primary badge-pill">95</span></li>
</ul>






<br>
</div>







<div class="col-sm-8">


<div class="card text-white bg-dark mb-3">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">
    <div class="media">
  <img src="../images/test.png" class="align-self-start mr-3" alt="...">
  <div class="media-body">
    <!-- <h5 class="mt-0">Top-aligned media</h5> -->
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
  </div>
</div>
    <p>Some quick example text to build on the card title and make up the bulk of the card's content. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>



<div class="card text-white bg-secondary mb-3">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">
    Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    </p>
  </div>
</div>




<div class="card bg-dark text-white">
  <img src="../images/maxresdefault.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>






</div>
</div>
</div>