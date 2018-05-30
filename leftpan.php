<div id=wrapper>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="panel panel-default">
        <div class="panel-heading"> <strong><span class="glyphicon glyphicon-list-alt"></span><b>News</b></strong></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12">
                <ul class="demo1">
                <?php include('./dbconnection.php');
$ret=mysqli_query($DB,"select * from news ORDER BY news_id desc limit 5");
							  while($row=mysqli_fetch_array($ret))
                {?>
                
                  <li class="news-item">
                  <table cellpadding="4">
                  <tr>
                  <?php if($row['imagefilepath']){ ?>
                  <td><img src="./newsandevents/newsimages/<?php echo $row['imagefilepath']; ?>" width="60" class="img-circle" /></td>
                  <?php } ?>
                  <td ><?php echo $row['title']; ?><a href="./news&events.php">Read more...</a></td>
                  </tr>
                  </table>
                  </li>
                  <?php } ?>
                </ul>
              </div>
             </div>
            </div>
          <div class="panel-footer"> </div>
        </div>
  <container>
    <div class="jumbotron">
      <h2 style="text-align:center;">ADDs</h2>
    </div>
  </container>
  <container>
      <div class="jumbotron">
        <h2 style="text-align:center;">ADDs</h2>
       </div>
  </container>
  <container>
      <div class="jumbotron">
        <h2 style="text-align:center;">ADDs</h2>
      </div>
  </container>
  <container>
      <div class="jumbotron">
        <h2 style="text-align:center;">ADDs</h2>
      </div>
  </container>
  <container>
      <div class="jumbotron">
        <h2 style="text-align:center;">ADDs</h2>
      </div>
  </container>
</div>
