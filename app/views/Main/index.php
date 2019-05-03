<div class="container">
  <div class="row">
    <div class="col-sm-8">
    <!-- Col-sm-8 -->
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
  </p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<?php if(isset($_SESSION['nologged'])): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<h4 class="alert-heading">Ошибка.</h4>
<strong></strong>
  <p><?= $_SESSION['nologged']; unset($_SESSION['nologged']); ?>
  </p>
  <hr>
  <p class="mb-0"></p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>


<?php if(isset($_SESSION['error'])): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<h4 class="alert-heading">Ошибка.</h4>
<strong></strong>
  <p><?= $_SESSION['error']; unset($_SESSION['error']) ?>
  </p>
  <hr>
  <p class="mb-0"></p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>


<?php if(isset($_SESSIO['success'])): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<h4 class="alert-heading">Ошибка.</h4>
<strong></strong>
  <p><?= $_SESSION['success']; unset($_SESSION['success']) ?>
  </p>
  <hr>
  <p class="mb-0"></p>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>








  <div class="card">
  <div class="card-header">
    Quote <a href="#" class="badge badge-info">Info</a>
  </div>
  <div class="card-body">

  <ul class="list-unstyled">
  <li class="media">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
  <li class="media my-4">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
  <li class="media">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
</ul>
</div>
</div>



<br>



<div class="card">
  <div class="card-header">
    Quote <a href="#" class="badge badge-info">Info</a>
  </div>
  <div class="card-body">

  <ul class="list-unstyled">
  <li class="media">
    <img src="../images/test.png" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
  <li class="media my-4">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
  <li class="media">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
</ul>
</div>
</div>


<br>


<div class="card">
  <div class="card-header">
    Quote <a href="#" class="badge badge-info">Info</a>
  </div>
  <div class="card-body">

  <ul class="list-unstyled">
  <li class="media">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
  <li class="media my-4">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
  <li class="media">
    <img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/54/545cfc4004db6dfdd0a47cf3b9861be72c6d0fca_medium.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <h5 class="mt-0 mb-1"><a href = "...">List-based media object</a></h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li><hr>
</ul>
</div>
</div>


<br>


<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
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

<br>

<button type="button" class="btn btn-outline-success" id="send" value=2>Кнопка</button>

<div class="inner"></div>

<?php // new fw\widgets\Menu(); ?>
    <!-- end Col-sm-8 -->
    

    </div>
    <div class="col-sm-4">
    
    <!-- Col-sm-4 -->
    <div class="card">
  <div class="card-header">
    Вход
  </div>
  <div class="card-body">
    

  <form method="post" action="/fw/main/index">
    <div class="form-group">
      <label for="exampleInputEmail1">Электронная почта</label>
      <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Электронная почта">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Пароль</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Войти</button>
  </form>
  

  </div>
</div>

<br>

<div class="card">
  <div class="card-header">
    Регистрация
  </div>
  <div class="card-body">
    
  <form method="post" action="/fw/main/index">
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>">
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Электронная почта" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>">
            </div>
            <div class="form-group">
                <label for="pasword">Пароль</label>
                <input type="password" name="password" class="form-control" id="pasword" placeholder="Пароль">
            </div>
            <button type="submit" name="signup" class="btn btn-primary" value="signup">Зарегистрировать</button>
        </form>

  </div>
</div>
    <!-- end Col-sm-4 -->
    
    </div>
  </div>
</div>


<script>
$('#send').click(function() {
  $.ajax({
    url: 'main/test',
    type: 'post',
    data: {'id': 2},
    success: function(res) {
      //console.log(res);


      $('.inner').append('<br>').append(res);


    },
    error: function() {
      alert('Error!');
    }
  });
});
</script>