<style type="text/css">
  .login{
    background-color: rgb(0,146,69);
    padding-top: 10%;
  }
  html, body {
     width: 100%;
     height: 100%;
  } 

 @keyframes color-animation {
    0% {
       background: red;
    }
    50% {
       background: yellow;
    } 
    100% {
       background: green;
    } 
 }

.login {
   width: 100%;
   height: 100%;
   animation: color-animation 20s infinite linear alternate;
}
</style>
<div class="login">
  <div class="login-container"><img alt="Logo login@2x" height="100" src="images/logo.png" width="auto"/>
    <form>
      <div class="form-group">
        <div class="input-group"><span class="input-group-addon"><i class="icon-user"></i></span>
          <input class="form-control" placeholder="Tap Your RFID" type="text"/>
        </div>
      </div>
      <div class="btn btn-lg btn-success login-submit"> Log in </div>
    </form>
</div>