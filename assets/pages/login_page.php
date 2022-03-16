<div id="main" class="main-container">
<div class="box">
<form method="post" action="assets/php/process.php?login">
<div class="input-box">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email/Mobile Number" name="mobile_or_email" required>
    <div id="emailHelp" class="form-text">We'll never share your email/mobile with anyone else.</div>
  </div>
  <div class="input-box">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="password" class="form-control" name="password" placeholder="Password" id="exampleInputPassword1" required>
  </div>
  <div class="d-flex justify-content-between align-items-center">
 <center> <button type="submit" class="btn btn-primary">Login</button>
 <p style="color:white"> Not a Registered user?</p>
  <a href="assets/pages/signup_page.php">SignUp</a></center>
</div>
</form>
</div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

* {
  font-family: 'Open Sans', sans-serif;
}

body {
  margin: 0;
  padding: 0;
}

.main-container {
  width: 100%;
  height: 100vh;
   background: url('https://images.pexels.com/photos/176851/pexels-photo-176851.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb');
  transition: 0.4s linear;
}

.box {
  width: 400px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, .8);
  padding: 40px;
  box-sizing: border-box;
  box-shadow: 0px 15px 25px rgba(0, 0, 0, .5);
  border-radius: 10px;
}

.box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box p {
  margin-bottom: 0;
}

.box p:nth-child(even) {
  margin-top: 0;
}

.box a {
  color: #9a9d9e;
  font-size: 14px;
  text-decoration: none;
}

.box .input-box {
  position: relative;
}

.box .input-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  margin-bottom: 30px;
  color: #fff;
  border: 1px solid #fff;
  border: none;
  border-bottom-style: solid;
  outline: none;
  letter-spacing: 1px;
  background: transparent;
}

.box .input-box label {
  position: absolute;
  color: #fff;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}

.box .input-box input:focus ~ label,
.box .input-box input:valid ~ label{
  top: -18px;
  left: 0;
  color: #03a9f4;
  font-size: 12px;
}

.box input[type=submit] {
  background: transparent;
  border: none;
  outline: none;
  background: #03a9f4;
  color: #fff;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

#logged-in {
  width: 100%;
  height: auto;
  text-align: center;
  margin: auto;
  position: absolute;
  top: 50px;
  display: none;
}

.login-true {
  opacity: 0;
}
</style>