<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.page_m_i{
  font-size: 20px;
}

.page_m_s{
  font-size: 13px;
}
#pagesmenu li{

}
</style>
<div id="mySidenav" class="sidenav">
  <h2 class="title text-white text-center">Admin</h2>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fas fa-house-user"></i><i class="fas fa-house-user"></i> Dashboard</a>
  <a href="#"><i class="fas fa-atom"></i> Skills</a>
  <a href="#"><i class="fas fa-palette"></i> Hobbies</a>
  <a href="#"><i class="fas fa-user-graduate"></i> Experiences</a>
  <a href="#"><i class="fas fa-trophy"></i> Achievement</a>
  <a href="#"><i class="fas fa-suitcase"></i> Portfolio</a>
  <a href="#"><i class="fas fa-satellite-dish"></i> Social Media</a>
  <div class="collapse_p">
    <a href="#pagesmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
        <i class="fas fa-pager"></i> Pages
    </a>
    <ul class="collapse list-unstyled w-75" id="pagesmenu">
        <li class="ml-2">
          <a target="_blank" href="#"><i class="fas fa-cannabis page_m_i"></i> <span class="page_m_s">CV Page</span></a>
        </li>
        <li class="ml-2">
          <a target="_blank" href="#"><i class="fas fa-exclamation-triangle page_m_i"></i> <span class="page_m_s">404 ERROR Page</span></a>
        </li>
      </ul>
  </div>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("body").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("body").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>