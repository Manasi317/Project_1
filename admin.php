<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
html, body, .page {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  transition: all .6s cubic-bezier(.5, .2, .2, 1.1);
  -webkit-transition: all .6s cubic-bezier(.5, .2, .2, 1.1);
  -moz-transition: all .6s cubic-bezier(.5, .2, .2, 1.1);
  -o-transition: all .6s cubic-bezier(.5, .2, .2, 1.1);  
  color: #fff;
  overflow: hidden; 
}

* {
  font-family: 'open sans', 'lato', 'helvetica', sans-serif;
}

.page {
  position: absolute;
}

#p1 {
  left: 0;
}

#p2, #p3, #p4, #p5 {
  left: 200%;
}

#p1 { background: darkslateblue; }
#p2 { background: tomato; }
#p3 { background: gold; }
#p4 { background: deeppink; }
#p5 { background: rebeccapurple; }

#t2:target #p2,
#t3:target #p3,
#t4:target #p4,
#t5:target #p5 {
  transform: translateX(-190%);
  -webkit-transform: translateX(-190%);
  -moz-transform: translateX(-190%);
  -o-transform: translateX(-190%);
  transition-delay: .4s !important;
}

#t2:target #p1, 
#t3:target #p1,
#t4:target #p1,
#t5:target #p1{
  background: black;
}

#t2:target #p1 .icon, 
#t3:target #p1 .icon,
#t4:target #p1 .icon,
#t5:target #p1 .icon {
  -webkit-filter: blur(3px);
}

.icon {
  color: #fff;
  font-size: 32px;
  display: block;
}

ul .icon:hover {
  opacity: 0.5;
}

.page .icon .title {
  line-height: 2;
}

#t2:target ul .icon,
#t3:target ul .icon,
#t4:target ul .icon,
#t5:target ul .icon{
  transform: scale(.6);
  -webkit-transform: scale(.6);
  -moz-transform: scale(.6);
  -o-transform: scale(.6);
  transition-delay: .25s;
}

#t2:target #dos,
#t3:target #tres,
#t4:target #cuatro,
#t4:target #cinco {
  transform: scale(1.2) !important;
  -webkit-transform: scale(1.2) !important;
  -moz-transform: scale(1.2) !important;
  -o-transform: scale(1.2) !important;
}

ul {
  position: fixed;
  z-index: 1;
  top: 0;
  bottom: 0;
  left: 0;
  margin: auto;
  height: 280px;
  width: 10%;
  padding: 0;
  text-align: center;
 }

#menu .icon {
  margin: 30px 0;
  transition: all .5s ease-out !important;
  -webkit-transition: all .5s ease-out;
  -moz-transition: all .5s ease-out;
  -o-transition: all .5s ease-out;
}

a {
  text-decoration: none;
}

.title, .hint {
  display: block;
}

.title {
  font-size: 20px;
}

.hint {
  font-size: 20px;
}



.hint a {
  color: yellow;
  transition: all 250ms ease-out;
  -webkit-transition: all 250ms ease-out;
  -moz-transition: all 250ms ease-out;
  -o-transition: all 250ms ease-out;
}

.hint a:hover {
  color: #FFF;
}

.line-trough {
  text-decoration: line-through;
}

.page .icon {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 10%;
  left: 0;
  width: 700px;
  height: 300px;
  margin: auto;
  text-align: left;
  font-size: 40px;
  line-height: 1.3;
  transform: translateX(360%);
  -webkit-transform: translateX(360%);
  -moz-transform: translateX(360%);
  -o-transform: translateX(360%);
  transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
  -webkit-transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
  -moz-transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
  -o-transition: all .5s cubic-bezier(.25, 1, .5, 1.25);
}

.page#p1 .icon {
  height: 220px;
}

.page#p1 .icon {
  transform: translateX(10%) !important;
}

#t2:target .page#p2 .icon,
#t3:target .page#p3 .icon,
#t4:target .page#p4 .icon,
#t5:target .page#p5 .icon {
  transform: translateX(0) !important;
  -webkit-transform: translateX(0) !important;
  -moz-transform: translateX(0) !important;
  -o-transform: translateX(0) !important;
  transition-delay: 1s;
}


</style>
</head>
<body>
<div class="ct" id="t1">
  <div class="ct" id="t2">
    <div class="ct" id="t3">
      <div class="ct" id="t4">
         <div class="ct" id="t5">
          <ul id="menu" style="text-align:left; padding-left:2px;">
            <a href="#t1">Insert</a><br><br>
            <a href="#t2">Delete</a><br><br>
            <a href="#t3">Update</a><br><br>
            <a href="#t4">Insert</a><br><br>
            <a href="#t5">Delete</li></a><br>
          </ul>
          <div class="page" id="p1">
             <section class="icon fa fa-bolt"><span class="title">ADMIN CONTROLS: "INSERT"</span><div class="hint">
             
      

            <form method="post" action="server.php" >
		    
			<tr><td style="width:50px;">id:</td><td><input type="text" name="id" value=""></td>
		    <br>
			name<input type="text" name="u_name" value="">
            <br>
			type<input type="text" name="u_type" value="">
            <br>
			Password<input type="text" name="u_password" value="">
            <br>
            <input type="submit" value="Insert">
		    <br>
            </form>
             
             </div>
             </div>
          <div class="page" id="p2">
            <section class="icon fa fa-keyboard-o"><span class="title">Type</span></section>
          </div>  
          <div class="page" id="p3">
            <section class="icon fa fa-rocket"><span class="title">Rocket</span></section>
          </div>
          <div class="page" id="p4">
            <section class="icon fa fa-dribbble">
              <span class="title">Dribbble</span>
              <p class="hint">
                <a href="https://dribbble.com/albertohartzet" target="_blank">Im ready to play, <span class="hint line-trough">invite me </span> find me</a>
              </p>
              <p class="hint">Already invited by <a href="http://www.dribbble.com/mrpeters" target="_blank">Stan Peters</a></p>
            </section>
          </div> 
          <div class="page" id="p5">
            <section class="icon fa fa-plus-circle">
              <span class="title">More</span>
              <p class="hint">
                <span>You love one page & CSS only stuff? </span><br/>
                <a href="https://codepen.io/hrtzt/details/pgXMYb/" target="_blank">check this pen "Pure CSS One page vertical navigation"</a>
              </p>
            </section>
          </div> 
        </div>
      </div>
    </div>
</body>
</html>


