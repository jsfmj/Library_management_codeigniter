<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/logreg.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
  <style>
    body{
  margin: 0;
  padding: 0;
  background-image:url("<?php echo base_url('assets/frontend/css/busback.jpg')?>");
  background-size: cover;
  height: 100%;
  width: 100%;
}
#container{
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;

}
.wrapper{
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 400px;
  height: 440px;
  background: transparent;
  border: 2px solid rgba(255,255,255,.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0,0,0,.5);
  overflow:hidden;
  transition:height .2s ease;
}
.wrapper.active{
  height:520px;
}
.wrapper .form-box{
  width: 100%;
  padding: 40px;
}
.wrapper .form-box.login{
  transition:transform .18s ease;
  transform:translateX(0);
}
.wrapper.active .form-box.login{
transition:none;
transform:translateX(-400px);
}
.wrapper .form-box.register{
  position:absolute;
  transition:none;
  transform:translateX(400px);
}
.wrapper.active .form-box.register{
  transition:transform .18s ease;
  transform:translateX(0);
}
.form-box h2{
  font-size:  2em;
  color: #162938;
  text-align: center;
}
.input-box{
  position: relative;
  width: 100%;
  height: 50px;
  border-bottom: 2px solid #162938;
  margin: 30px 0;
}
.input-box label{
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 1em;
  color: #162938;
  font-weight: 500;
  pointer-events: none;
  transition:.5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
  top:-5px;
}

.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  font-size:1em;
  color:#162938;
  font-weight:600;
  padding:0 35px 0 5px;
}
.input-box .icon{
  position: absolute;
  right: 8px;
  font-size: 1.2em;
  color: #162938;
  line-height: 57px;
}
.remember-forgot{
  font-size: .9em;
  color: #162938;
  font-weight: 500;
  margin: -15px 0 15px;
  display: flex;
  justify-content: space-between;
}
.remember-forgot label input{
  accent-color: #162938;
  margin-right: 3px;
}
.remember-forgot a{
  color: #162938;
  text-decoration: none;
}
.remember-forgot a:hover{
  text-decoration: underline;
}
.btn5{
  width: 100%;
  height: 45px;
  background: #162938;
  border: none;
  outline: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 1em;
  color: #fff;
  font-weight: 500;
  transition:0.5s ease;
}
.btn5:hover{
  background: rgb(78, 95, 157,1);
  color: white;
}
.login-register{
  font-size: .9em;
  color: #8ea7c2;
  text-align: center;
  font-weight: 500;
  margin: 25px 0 10px;
}
.login-register p a{
  color: #8ea7c2;
  text-decoration: none;
  font-weight: 600;
}
.login-register p a:hover{
  text-decoration: underline;
}
  </style>
</head>
<body>
  <div id="container">
  <div class="wrapper">
  <div class="form-box login">
    <h2>Login</h2>
    <form method="post" action="<?php echo base_url('index.php/Home/data')?>">
      <div class="input-box">
        <span class="icon"><ion-icon
      name="mail"></ion-icon></span>
      <input type="email" name="email" required>
      <label>Email</label>
      </div>
      <div class="input-box">
        <span class="icon">
          <ion-icon name="lock-closed"></ion-icon>
        </span>
      <input type="password" name="password" required>
      <label>Password</label>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">
        Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>
      <button type="submit" class="btn5" name="logg" value="loggi">Login</button>
      <div class="login-register">
        <p>Don't have an account? <a href="#" class="register-link">
          Register
        </a></p>
      </div>
    </form>
  </div>

  <div class="form-box register">
    <h2>Registration</h2>
    <form method="post" action="<?php echo base_url('index.php/Home/data')?>">
    <div class="input-box">
        <span class="icon"><ion-icon
      name="person"></ion-icon></span>
      <input type="text" id="name" name="username" required>
      <label>Username</label>
      </div>
      <div class="input-box">
        <span class="icon"><ion-icon
      name="mail"></ion-icon></span>
      <input type="email" id="email" name="email" required>
      <label>Email</label>
      </div>
      <div class="input-box">
        <span class="icon">
          <ion-icon name="lock-closed"></ion-icon>
        </span>
      <input type="password" id="password" name="password" required>
      <label>Password</label>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox" id="check" name="check">
        I agree to the terms and conditions</label>
      </div>
      <button type="submit" class="btn5" name="reg" value="register">Register</button>
      <div class="login-register">
        <p>Already have an account? <a href="#" class="login-link">
          Login
        </a></p>
      </div>
    </form>
  </div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
  const wrapper= document.querySelector('.wrapper');
  const loginLink= document.querySelector('.login-link');
  const registerLink= document.querySelector('.register-link');

  registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
  })
  loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
  })
</script>
</body>
</html>
