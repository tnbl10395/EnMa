@extends('template.menubar')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="ProjectManagement" class="current">Project Management</a> </div>
    <h1>Project Management</h1>
  </div>
  <div class="container-fluid">
    <hr>
        <div style="width: 150px;float: left; margin-bottom: 5px;">
        <label for="">Technical Skill</label>
          <select name="">
            <option value="">PHP</option>
            <option value="">Java</option>
            <option value="">C++</option>
            <option value="">.Net</option>
            <option value="">Ruby</option>
            <option value="">Android</option>              
          </select>         
        </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <a href="../AddProject"><button class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Project</button></a>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Id Project</th>
                  <th>Project Name</th>
                  <th>status</th>
                  <th>Technical Skill</th>
                  <th>Date Of Begin</th>
                  <th>Date Of End</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>PR001</td>
                  <td>pr111</td>
                  <td>new</td>
                  <td>Php</td>
                  <td>01/01/2017</td>
                  <td>01/05/2017</td>
                  <td style="text-align: center;"> <a href="../EditProject" ><i class="icon-edit"></i></a></td>
                  <td style="text-align: center;"> <a onclick="showDialog()" href="#" ><i class="icon-remove"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- dialog box -->

<div id="white-background">
</div>
<div id="dlgbox">
  <div id="dlg-header">
    Delete Project
  </div>
  <div id="dlg-body">
    Are you sure that you want to delete this project?
  </div>
  <div id="dlg-footer">
    <button onclick="dlgDelPro()" >Yes</button>
    <button onclick="dlgCancelPro()">No</button>
  </div>
</div>
@stop
