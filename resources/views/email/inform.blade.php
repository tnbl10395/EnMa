<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Accept Team</title>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" valign="top" bgcolor="#ababab" style="background-color:#ababab;"><br>
            <br>
            <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" valign="top"></td>
                </tr>
                <tr>
                    <td align="left" valign="top" bgcolor="#ffffff" style="background-color:#C9FFBB;">
                        <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:15px;">
                            <tr>
                                <td align="left" valign="middle" style="padding:10px;"></td>
                            </tr>
                        </table>
                        <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:10px;">
                            <tr>
                                <td style="font-family:Arial, Helvetica, sans-serif;">
                                    <h1 id="title" style="font-weight: bold;color: #4CAF50;text-align: center;">You are assigned to a new Project!</h1>
                                    <hr>
                                    <h2 class="project" style="color: black;">Name: {{$project[0]->projectName}}</h2>
                                </td>
                            </tr>
                        </table>
                        <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
                            <tr>
                                <td style="font-family:Arial, Helvetica, sans-serif;">
                                    <h3 class="project">Main Technical: {{$project[0]->techSkill}}</h3>
                                    <h3 class="project">Customer code: {{$project[0]->customer_code}}</h3>   
                                    <h3 class="project">Date Of Begin: {{$project[0]->dateOfBegin}}</h3>
                                    <h3 class="project">Team name: {{$team}}</h3>                             
                                    <h3 class="project">Your colleague: </h3>
                                    <ul>
                                    @foreach ($engineer as $name)
                                    <li><h4 class="project">{{$name}} <h4></li>
                                    @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table width="570" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:5px;">
                            <tr>
                                <!-- <td> -->
                                    <h2 style="color:black; margin-left: 10px;" class="project">Would you like to join this project?</h3>      
                                <!-- </td> -->
                            </tr>
                            <tr>
                                <td align="center">
                                    <form method="post" action="{{asset('/acceptMail/'.$idEngineer)}}">
                                        <input type="hidden" name="idHistory" value="{{$idHistory}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" name="accept" value="Yes"> 
                                    </form>
                                    <form method="post" action="{{asset('/acceptMail/'.$idEngineer)}}">
                                        <input type="hidden" name="idHistory" value="{{$idHistory}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" name="accept" value="No"> 
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:20px;">
                            <tr>
                                <td width="50%" align="left" valign="middle" style="color:#595959; font-size:11px; font-family:Arial, Helvetica, sans-serif; padding:10px;"> <b>Company Address</b><br> Company URL: <a href="http://company.vn" target="_blank"  style="color:#595959; text-decoration:none;">http://company.vn</a><br>
                                    <br>
                                    <b>Hours:</b> Mon-Fri 8:00-5:00. Sat, Sun: Closed <br>
                            </tr>
                        </table></td>
                </tr>
            </table>
            <br>
            <br></td>
    </tr>
</table>
</body>
</html>
