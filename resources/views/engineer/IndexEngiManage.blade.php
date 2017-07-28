@extends('template.menubar')

@section('content')


<script>
  $(document).ready(function(){



    <script language="javascript">
      $(document).ready(function(e) {
        $("#filter").change(function()
        {

          if($(this).val() != ""){
            $(".bodyparts").hide();
            $("." + $(this).val()).show();
          }
        });
      });
    </script>
  </script>
  <div id="content">
    <div id="content-header">

      <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/EngineerManagement" class="current">Engineers Management</a> </div>

      <h1>Engineers Management</h1>
    </div>
    <div class="container-fluid">
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors -> all() as $err)
        {{$err}}<br>
        @endforeach
      </div>
      @endif

      @if(session('notify'))
      <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>

        <h4 class="alert-heading">Success!</h4>
        {{session('notify')}}
      </div>
      @endif
      <div id="alert_del_engineer"></div>
      <hr>
      <div style="width: 150px; float: left; margin-bottom: 5px;">
        <label for="">Experience</label>
        <select name="" id="filter">
          <option value=""><a href="/EngineerManagement"> All</a></option>
          <option value="">No experience</option>
          <option value="">1 year</option>
          <option value="">More 2 years</option>
          <option value="">More 5 years</option>
          <option value="">More 10 years</option>              
        </select>         
      </div> 
      <div style="width: 150px;float: left; margin-bottom: 5px;">
        <label for="">Technical Skill</label>
        <select name="">
          <option value="">All</option>
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
              <button onclick="transferAddEngineer()" class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Engineer</button>

            </div>
            <div class="widget-content nopadding">
             <div class="panel panel-primary filterable"> 

              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Technical Skills</th>
                    <th>Experience</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($list as $list)
                  <tr class="gradeX {{$list->idEngineer}} bodyparts">
                    <td><a data-toggle="modal" onclick="showDetailEngi('{{$list->idEngineer}}')" class="hello" href="#product_view">{{ $controller->idName($list->idEngineer) }}</a></td>
                    <td><a data-toggle="modal" onclick="showDetailEngi('{{$list->idEngineer}}')" class="hello" href="#product_view">{{ $list->engineerName }}</a></td>
                    <td>{{ $list->Phone }}</td>
                    <td>{{ $list->Email }}</td>
                    <td>{{ $list->TechSkill }}</td>
                    <td>{{ $list->Experience }}</td>
                    <td>
                      @if ($list->busy==0)
                        <span id="lb-config" class="{{$controllerColor->changeColorStatusEngi($list->busy)}}">Available</span>
                      @else
                        <span id="lb-config" class="{{$controllerColor->changeColorStatusEngi($list->busy)}}">Active</span>
                      @endif
                    </td>
                    <td> <a href="EditEngineer/{{$list->idEngineer}}" ><i class="icon-edit" style="margin-left: 10px;"></i></a></td>

                    <td> <a href="#myAlertEngi" data-toggle="modal" onclick="IdToModalEngi('{{$list->idEngineer}}')"><i class="icon-remove" style="margin-left: 15px;"></i></a></td>

                  </tr> 
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  -->


<!--  -->
<div id="myAlertEngi" class="modal hide">
  <div class="modal-header">
    <button data-dismiss="modal" class="close" type="button">×</button>
    <h3>Delete Team</h3>
  </div>
  <div class="modal-body">
    <p>Are you sure that you want to delete this engineer?</p>
  </div>
  <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary" href="#">Confirm</a> <a data-dismiss="modal" class="btn" href="#">Cancel</a> </div>
</div>
<!--  -->
<div class="modal fade product_view" id="product_view">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
        <h3 class="modal-title">Engineer Detail</h3>
      </div>
      <div class="modal-body">
        


      </div>
    </div>
  </div>
</div>

</div>

<!--  -->
@stop
