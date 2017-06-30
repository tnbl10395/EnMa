@extends('template.menubar')

  <style>
    #white-background{
      display: none;
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0px;
      left: 0px;
      background-color: #fefefe;
      opacity: 0.7;
      z-index: 9999;

    }
    #dlgbox{
      display: none;
      position: fixed;
      width: 480px;
      z-index: 9999;
      border-radius: 10px;
      background-color: #7c7d7e;
    }
    #dlg-header{
      background-color: #6d84b4;
      padding: 10px;
      color: white;
      font-size: 20px;
      margin:  10px 10px 0px 10px;
    }
    #dlg-body{
      background-color: white;
      color:  black;
      font-size: 14px;
      padding: 10px;
      margin:  0px 10px 0px 10px;
    }
    #dlg-footer{
      background-color: #f2f2f2;
      text-align: right;
      padding: 10px;
      margin:  0px 10px 10px 10px;
    }
    #dlg-footer button{
      background-color: #6d84b4;
      color:  white;
      padding: 5px;
      border: 0px;

    }
    
  </style> 

@section('content')
<div id="content">


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
                <button onclick="dlgDelPro()" >Delete</button>
              </div>
            </div>

  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="ProjectManagement" class="current">Project Management</a> </div>
    <h1>PROJECT MANAGEMENT</h1>
  </div>
  <div class="container-fluid">

  
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            @foreach($errors -> all() as $err)
            {{$err}}<br>
            @endforeach
          </div>
        @endif

        @if(session('thbao'))
            <div class="alert alert-success">
            
            {{session('thbao')}}
          </div>
        @endif
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
                  <th>customer</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              @foreach($Project as $pr)
                <tr class="gradeX">
                  <td>{{$pr -> idProject}}</td>
                  <td>{{$pr -> projectName}}</td>

                  <!-- switch case for status- -->

                  <td>

                      <?php
                      switch( $pr -> status ) {
                          case '0': echo 'New'; break;
                          case '1':  echo 'Assigned'; break;
                          case '2': echo 'Feedback'; break;
                          case '3':   echo 'In progress'; break;
                          case '4':   echo 'Resolve'; break;
                      }
                      ?>
                  </td>

                  <td>{{$pr -> techSkill}}</td>
                  <td>{{$pr -> dateOfBegin}}</td>
                  <td>{{$pr -> dateOfEnd}}</td>
                  <td>{{$pr -> customer_code}}</td>   
                  <td style="text-align: center;"> <a href="../EditProject/{{ $pr -> idProject}}" ><i class="icon-edit"></i></a></td>
                  <td> <a href="" ><i class="icon-remove" style="margin-left: 40px;" onclick="showDialog()"></i></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <script>
                function dlgDelPro(){
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
              </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@stop