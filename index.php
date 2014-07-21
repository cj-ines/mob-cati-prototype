<!DOCTYPE html>
<html>
  <head>
    <title>Mobivia CATI</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="resource/cstyle.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="nav-header">
          <a class="navbar-brand" href="#"><img src="resource/img/mobivia.PNG"></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">CATI</a></li>
          <li><a href="#">Documentation</a></li>
        </ul>
        <div class="navbar-right navbar-text">
          Hello! as Jon Doe (<a href="#">Logout</a>)
        </div>
      </div>
    </nav>
    <div class="container c-main" id="main">
      <div class="row bigrow">
        <div class="col-md-4 c-sidebar" id="c-sidebar" style="color:grey">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">Client Info</div>
            </div>
              <table class="table">
                <tr><th>Client Name:</th><td>John Doe</td></tr>
                <tr><th>Telephone:<br><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-plus"></span>  Add Number</button></th><td><img src="resource/img/flag/fra.png"> 06 23 11 31 45</td></tr>
                <tr><th>Prestation:</th><td>Battery</td></tr>
              </table>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">Action Panel</div>
            </div>
            <table class="table c-state-history">
              <tr><th>Agent Name</th><th>State Value</th><th>Date (Start - End)</th><tr>
              <tr><td>John Doe</td><td>Rendez-vous</td><td>2014-07-18 (01:20 - 01:21)</td><td><span class="glyphicon glyphicon-pencil"></span></td><tr>
              <tr><td>John Doe</td><td>Rendez-vous</td><td>2014-07-21 (18:02 - 18:04) </td><td><span class="glyphicon glyphicon-pencil"></span></td><tr>
            </table>

            <div class="panel-body">
              <div class="btn-group">
                <div class="btn-group">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    Answered
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Answered</a></li>
                    <li><a href="#">Refusal</a></li>
                    <li><a href="#">Language Issue</a></li>
                    <li><a href="#">Client not Available</a></li>
                    <li><a href="#">Appointment</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    Not Answered
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">No answer</a></li>
                    <li><a href="#">Busy line</a></li>
                    <li><a href="#">Fax number</a></li>
                    <li><a href="#">Wrong number</a></li>
                    <li><a href="#">Foreign number</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="panel-body">
              <textarea  class="form-control"></textarea>
              <button class="btn btn-xs btn-default">Save</button>
            </div>

          </div>
        </div>
        <div class="col-md-8 c-survey">
          <div class="container">Font Size: <a href="#" style="font-size:15pt">A</a>/<a href="#" style="font-size:13pt">A</a>/<a href="#" style="font-size:11pt">A</a></div>
          <div class="questionaire">
          <!-- Start Questionaire -->
          <div class="well">
            <h3>Q1 - Did the quick brown fox jumped over the wall?</h3>
            <div class="c-answers">
              <div class="btn-group">
                <label class="btn btn-lg">
                  <input type="radio" name="ans-1"> Yes
                </label>
                <label class="btn btn-lg">
                  <input type="radio" name="ans-1"> No
                </label>
              </div>
            </div>
          </div>

          <div class="well">
            <h3>Q2 - How many times did humpty fall on the wall?</h3>
            <div class="c-answers">
              <div class="btn-group">
                <?php for ($i = 0; $i <= 10; $i++ ) { ?>
                <label class="btn  btn-lg">
                  <input type="radio" name="ans-1"> <?php echo $i ?>
                </label>          
                <?php } ?>
              </div>
            </div>
          </div>

          <div class="well">
            <h3>Q3 - Why do you think happened to Jack and Jill?</h3>
            <div class="c-answers">
              <textarea class="form-control"></textarea>
            </div>
          </div>
          <!-- End Questionaire-->
          </div>
        </div>
      </div>
    </div>
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="resource/js/c-main.js"></script>
  </body>
</html>