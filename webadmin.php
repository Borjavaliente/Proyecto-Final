<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/spacelab/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" media="screen" title="no title" charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
    <div class="row">
    <h3 style="text-align:center">PRB Admin<br></h3>
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="competency">Promotion Competency</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="experienceGuidelines">Promotion Experience Guidelines</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="referenceMatrix">Promotion Reference Matrix</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="loadDWData">HR Datamart Import</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="uploadExperience">Upload Experience Data</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="overrideEmployeeDetails">Override Employee Details</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="uploadBudgetData">Upload Budget Data</a></li>
            </ul>
        </div>
        <div class="col-md-9 admin-content" id="competency">
        <table style="width:100%">
            <tr>
                <td>
                <input name="search" placeholder="Search and select Job Code" class="form-control input-medium col-lg-2" />
                <br><br><br>
                <div style="height:190px;overflow:auto;width:100%">
                <table class="table table-bordered">
                    <tr><td>Job Code 1 - Job Title 1</td></tr>
                    <tr><td>Job Code 2 - Job Title 2</td></tr>
                    <tr><td>Job Code 3 - Job Title 3</td></tr>
                    <tr><td>Job Code 4 - Job Title 4</td></tr>
                    <tr><td>Job Code 5 - Job Title 5</td></tr>
                    <tr><td>Job Code 6 - Job Title 6</td></tr>
                    <tr><td>Job Code 7 - Job Title 7</td></tr>
                    <tr><td>Job Code 8 - Job Title 8</td></tr>
                    <tr><td>Job Code 9 - Job Title 9</td></tr>
                    <tr><td>Job Code 10 - Job Title 10</td></tr>
                </table>
            </div>
        <br><br><br></td>
        <td>  </td>
        <td style="vertical-align:top">
            <br><p><strong>Add/Update competencies for each job code here</strong></p><br>
            <form id="competencyForm">
                <table class="table table-bordered" style="width:100%">
                    <tr><td>Job Code</td><td><input class="form-control input-medium" name="jobCode" id="competencyJobCode" /></td></tr>
                    <tr><td>Area</td><td><input class="form-control input-medium" name="area" id="area" /></td></tr>
                    <tr><td>Competency</td><td><textarea class="form-control input-medium" name="competency" id="competency"></textarea></td></tr>
                </table>
            </form>
        </td>
            </tr>
            <tr>
                <td>
                    <p><strong>Check here to delete Competencies</strong></p>
                    <table class="table table-bordered">
                        <tr><td>Job Code</td><td>Area</td><td>Delete</td></tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td><button type="button" title="Competency 1"class="btn btn-primary" data-container="body"
                        data-toggle="popover" data-placement="right" data-content="Competency 1 Details">Area1</button></td>
                        <td><a href=""><i class="glyphicon glyphicon-trash"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td><button type="button" title="Competency 2"class="btn btn-primary" data-container="body"
                        data-toggle="popover" data-placement="right" data-content="Competency 2 Details">Area2</button></td>
                        <td><a href=""><i class="glyphicon glyphicon-trash"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td><button type="button" title="Competency 3"class="btn btn-primary" data-container="body"
                        data-toggle="popover" data-placement="right" data-content="Competency 3 Details">Area3</button></td>
                        <td><a href=""><i class="glyphicon glyphicon-trash"></i></i></a></td>
                        </tr>
                    </table>
                </td>
                <td>  </td>
                <td style="vertical-align:top">
                <p><strong>Choose File and Upload</strong></p>
                    <table class="table table-bordered">
                        <tr>
                            <td>


                                <input type="file" class="form-control input-medium"/><br><br><br>
                                <p><strong>Click <a href="#">here</a> to download Excel Template</strong></p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
        </div>
        <div class="col-md-9 admin-content" id="experienceGuidelines">

            <div class="alert alert-danger" role="alert">Please note that loading experience guidelines will override the existing data.
            Existing data will be wiped off and the new data will be loaded</div>
            <!--<p><strong>Click the button below to load the experience guidelines into the system</strong>
            </p>-->
            <p><input type="button" class="btn btn-primary" value="Load Experience Guidelines" /></p>
            <p>Click <a href="#">here</a> to download the existing data</p>
        </div>
        <div class="col-md-9 admin-content" id="referenceMatrix">
            <table style="width:100%">
                <tr>
                    <td>
                        <input name="search" placeholder="Search and select Job Code" class="form-control input-medium col-lg-2" />
                <br><br><br>
                <div style="height:190px;overflow:auto;width:100%">
                <table class="table table-bordered">
                    <tr><td>Job Code 1 - Job Title 1</td></tr>
                    <tr><td>Job Code 2 - Job Title 2</td></tr>
                    <tr><td>Job Code 3 - Job Title 3</td></tr>
                    <tr><td>Job Code 4 - Job Title 4</td></tr>
                    <tr><td>Job Code 5 - Job Title 5</td></tr>
                    <tr><td>Job Code 6 - Job Title 6</td></tr>
                    <tr><td>Job Code 7 - Job Title 7</td></tr>
                    <tr><td>Job Code 8 - Job Title 8</td></tr>
                    <tr><td>Job Code 9 - Job Title 9</td></tr>
                    <tr><td>Job Code 10 - Job Title 10</td></tr>
                </table>
            </div>
        <br><br><br>
                    </td>
                    <td>  </td>
        <td style="vertical-align:top">
            <br><p><strong>Add/Update reference types for each job code here</strong></p><br>
            <form id="competencyForm">
                <table class="table table-bordered" style="width:100%">
                    <tr><td>Job Code</td><td><input class="form-control input-medium" name="jobCode" id="competencyJobCode" /></td></tr>
                    <tr><td>Reference Type</td><td><select class="form-control input-medium" name="area" id="area" >
                    <option>Internal</option>
                    <option>External</option>
                    </select></td></tr>
                    <tr><td>Count</td><td><input class="form-control input-medium" name="competency" id="competency"/></td></tr>
                </table>
            </form>
        </td>
                </tr>
                <tr>
                <td>
                    <p><strong>Check here to save references</strong></p>
                    <table class="table table-bordered">
                        <tr><td>Job Code</td><td>Reference Type</td><td>Count</td><td>Save</td></tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td>Internal</td>
                        <td><input type = "text" class="form-control input-medium" value="2"/></td>
                        <td><a href=""><i class="glyphicon glyphicon-floppy-disk"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 1 - Job Title 1</td>
                        <td>External</td>
                        <td><input type = "text" class="form-control input-medium" value="1"/></td>
                        <td><a href=""><i class="glyphicon glyphicon-floppy-disk"></i></i></a></td>
                        </tr>
                        <tr>
                        <td>Job Code 2 - Job Title 2</td>
                        <td>Internal</td>
                        <td><input type = "text" class="form-control input-medium" value="0"/></td>
                        <td><a href=""><i class="glyphicon glyphicon-floppy-disk"></i></i></a></td>
                        </tr>
                    </table>
                </td>
                <td>  </td>
                <td style="vertical-align:top">
                <p><strong>Choose File and Upload</strong></p>
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <input type="file" class="form-control input-medium"/><br><br><br>
                                <p><strong>Click <a href="#">here</a> to download Excel Template</strong></p>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            </table>
        </div>
        <div class="col-md-9 admin-content" id="loadDWData">
            <table class="table table-bordered">
                <tr><td>Operation</td><td>Details</td></tr>
                <tr>
                    <td><input type="button" class="btn btn-primary" value="Load All Employees Data"/></td>
                    <td>Refresh the employee data in the PRB tool</td>
                </tr>
                <tr>
                    <td><input type="button" class="btn btn-primary" value="Set Met/Not Met Guidelines"/></td>
                    <td>This process will apply all the “meet-guidelines” criteria for TIP, YOE, PPI, and trainingper the latest information</td>
                </tr>
                <tr>
                    <td>
                    <input type="text" class="form-control input-medium" name="" placeholder="initials"/><br>
                    <input type="button" class="btn btn-primary" value="Refresh Employee Data"/></td>
                    <td>Refresh data for aspecific employee on-demand</td>
                </tr>
            </table>
        </div>
        <div class="col-md-9 admin-content" id="uploadExperience">
            <div class="alert alert-danger" role="alert">Please note that loading experience data will override the existing data.
            New employees, if any, will be added</div>
            <!--<p><strong>Click the button below to load the experience guidelines into the system</strong>

            </p>-->
            <p><input type="file" /><br><input type="button" class="btn btn-primary" value="Upload Experience Data" /></p>
            <p>Click <a href="#">here</a> to download the existing data</p>
        </div>
        <div class="col-md-9 admin-content" id="overrideEmployeeDetails">
            <table class="table table-bordered">
                <tr>
                    <td colspan="4" style="text-align:center"><input class="form-control input-medium" placeholder="initials"/></td>
                </tr>
                <tr>
                    <td>Name</td><td><input type="text" class="form-control input-medium" value="Abhishek Gorlagunta"/></td>
                    <td>Highest Degree</td><td><input class="form-control input-medium" type="text" value="Bachelors"/></td>
                </tr>
                <tr>
                    <td>Experience</td><td><input class="form-control input-medium" type="text" value="3"/></td>
                    <td>Current Position</td><td><input class="form-control input-medium" type="text" value="IT Engineer 2"/></td>
                </tr>
                <tr>
                    <td>Pay Grade</td><td><input class="form-control input-medium" type="text" value="P06"/></td>
                    <td>Recent Focal Ranking</td><td><input class="form-control input-medium" type="text" value="1"/></td>
                </tr>
                <tr>
                    <td>Certification</td><td><input class="form-control input-medium" type="text" value="OCJP"/></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td>Reason For Change</td><td colspan="3" ><textarea class="form-control input-medium"></textarea></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align:center">
                    <input type="button" class="btn btn-primary" value="Override Details"/>  
                    <input type="button" class="btn btn-primary" value="Show Change History"/>

                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-9 admin-content" id="uploadBudgetData">
            <table style="width:100%">
                <tr>
                    <td style="width:40%">
                        <p><input type="file" /><br><input type="button" class="btn btn-primary" value="Upload Budget Data" /></p>
            <p>Click <a href="#">here</a> to download the existing data in template form</p>
                    </td>
                    <td>
                        <div
            style="height: 40px;width: 40px;border-radius: 20px;
            border-color: lightgray;border: 2px solid lightgray;text-align: center;padding-top: 8px;color:lightgray">OR</div>
            <br>
                    </td>
                    <td style="text-align:right">
                        <table class="table table-bordered" style="width:100%">
                <tr>
                    <td>Initials</td><td><input type="text" name="" class="form-control input-medium"/></td>
                </tr>
                <tr>
                    <td>Salary Raise</td><td><input type="text" name="" class="form-control input-medium"/></td>
                </tr>
                <tr>
                    <td>Stock Grants</td><td><input type="text" name="" class="form-control input-medium"/></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center"><input type="button" value="Submit" class="btn btn-primary" /></td>
                </tr>
            </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');

    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');

        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
    $("[data-toggle='popover']").popover();
    $(document).contents().find( "#snippet-preview" ).css( "height", "800px" );
    });
</script>
</body>
</html>
