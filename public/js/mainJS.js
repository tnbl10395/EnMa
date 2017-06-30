// active one Item in left-sidebar
$(document).ready(function(){
    href_link=window.location.pathname;
        //href_link.indexOf('AddTeam')==1||href_link.indexOf('EditTeam')==1||href_link.indexOf('TeamManagement')==1 true
    href_link=href_link.substr(1);
    switch(href_link){
        case "AddTeam":
        case "EditTeam":
        case "TeamManagement":
            $('#sidebar li:eq(1)').addClass('active');
            break;
        case "AddProject":
        case "EditProject":
        case "ProjectManagement":
            $('#sidebar li:eq(2)').addClass('active');
            break;
        case "AddEngineer":
        case "EditEngineer":
        case "EngineerManagement":
            $('#sidebar li:eq(3)').addClass('active');
            break;
        default:
            $('#sidebar li:eq(0)').addClass('active');
    }

});
// change color li tag
$(document).ready(function(){
  $("#user1").click(function(event) {
      $("#user1").css("background-color","#d9d9d9");
      $("#user2").css("background-color","#FFFFFF");
      $("#user3").css("background-color","#FFFFFF");
      $("#user4").css("background-color","#FFFFFF");
      $("#user5").css("background-color","#FFFFFF");
  });
  $("#user2").click(function(event) {
      $("#user2").css("background-color","#d9d9d9");
      $("#user1").css("background-color","#FFFFFF");
      $("#user3").css("background-color","#FFFFFF");
      $("#user4").css("background-color","#FFFFFF");
      $("#user5").css("background-color","#FFFFFF");
  });
  $("#user3").click(function(event) {
      $("#user3").css("background-color","#d9d9d9");
      $("#user2").css("background-color","#FFFFFF");
      $("#user1").css("background-color","#FFFFFF");
      $("#user4").css("background-color","#FFFFFF");
      $("#user5").css("background-color","#FFFFFF");
  });
  $("#user4").click(function(event) {
      $("#user4").css("background-color","#d9d9d9");
      $("#user2").css("background-color","#FFFFFF");
      $("#user3").css("background-color","#FFFFFF");
      $("#user1").css("background-color","#FFFFFF");
      $("#user5").css("background-color","#FFFFFF");
  });
  $("#user5").click(function(event) {
      $("#user5").css("background-color","#d9d9d9");
      $("#user2").css("background-color","#FFFFFF");
      $("#user3").css("background-color","#FFFFFF");
      $("#user4").css("background-color","#FFFFFF");
      $("#user1").css("background-color","#FFFFFF");
  });
});
function dlgDelPro(){
  var whitebg = document.getElementById("white-background");
  var dlg = document.getElementById("dlgbox");
  whitebg.style.display = "none";
  dlg.style.display = "none";

}
function dlgCancelPro(){
  var whitebg = document.getElementById("white-background");
  var dlg = document.getElementById("dlgbox");
  whitebg.style.display = "none";
  dlg.style.display = "none";

}

function showDialog(){
  var whitebg = document.getElementById("white-background");
  var dlg = document.getElementById("dlgbox");
  whitebg.style.display = "block";
  dlg.style.display = "block";

  var winWidth = window.innerWidth;
  var winHeight = window.innerHeight;
  dlg.style.left = (winWidth/2 - 480/2) + "px";
  dlg.style.top = "150px";
}
