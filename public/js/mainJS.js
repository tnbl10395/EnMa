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

