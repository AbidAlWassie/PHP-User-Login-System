<div class="navbar">
	<ul>
		<li><a draggable="false" class="active" href="#home">Home</a></li>
		<li><a draggable="false" href="#news">News</a></li>
		<li><a draggable="false" href="#contact">Contact</a></li>
		<li><a draggable="false" href="#about">About</a></li>
    <?php
      if (isset($_SESSION["username"])) {
        echo "<li><a draggable='false' href='#logout' id='loginBtn'>Logout</a></li>";
      } else {
        echo "<li><a draggable='false' href='#signin' id='loginBtn'>Sign In</a></li>";
      }
    ?>
		<!-- <li><a draggable="false" href="#signin" id="loginBtn">Sign In</a></li> -->
	</ul>
</div>

<div id="modal-area" class="container modal">
  <div class="frame modal-content">

    <div class="options-nav">
      <ul class="links">
        <li draggable="false" class="one signin-active"><a class="signinBtn">Sign in</a></li>
        <li draggable="false" class="two signup-inactive"><a class="signupBtn">Sign up</a></li>
        <li draggable="false" class=""><span class="close">&times;</span></li>
      </ul>
    </div>

    <div>