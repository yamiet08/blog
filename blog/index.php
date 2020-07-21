<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://use.fontawesome.com/8913a5c2b2.js"></script>

    <style>

      body {
        font-family: 'Roboto', sans-serif;
        background-color:#bdc9c9 !important;
      }

      table, th, td {
        border: 4px solid #B96C2C;
      }
      
      li {
        list-style-position: outside;
      }

      .img1 {
        width: 100%;
        padding:0;
        margin:0;
      }

      .page {
        background-color:#fcffff;
        border-left: 16px solid #18274a;
        border-right: 16px solid #18274a;
        border-top: 16px solid #18274a; 
        border-bottom:12px solid #18274a;
      }

      .lidiv {
        font-size:23px;
        text-align:center;
      }

      .line {
        color:#B96C2C; 
      }

      .contact {
        font-size:22px !important;
      }

      .search {
        font-size:20px !important;
        margin-right: 20px;
        padding-right:52px;
        text-align:left !important;
      }

      .libt {
        background-color: #F9CC93 ;
        color: black;
        opacity: 0.8;
        border: 1px solid;
        border-radius: 40%;
        font-size: 20px !important;
      }

      .article {
        text-align:left;
      }

      .web {
        text-align:center;
      }

      .img2 {
        width:300px;
        height:300px;
      }

      .tf {
      font-size:20px;
      }
      

      .img3 {
        height:500px; 
        width: 330px; 
        opacity: 0.8;
      }

      .footerstyle {
        background-color:#fcffff;
        border-left: 16px solid #18274a;
        border-right: 16px solid #18274a;
        border-bottom:12px solid #18274a;
        padding-bottom:0px;
        padding-top: 6px; 
      }

      .bottomicon {
      font-size: 35px; 
      text-align:left;
      }

      .bottom {
        text-align: left;
        font-size: 24px;
        padding-top: 8px;
      }

      ul#footer li {
      display:inline;
      }
 
    </style>
  </head>


  <body>
    
    <!-- Top Image -->

    <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #18274a;">
          <img src="images/webdev1.jpg" alt="web development image" class="img-responsive img1">
        </div>
      </div>
    </div> 

    <!--End Top Image -->


    <!-- Navigation -->

    <div class="container page">
      <div class="row">
        <div class="col-md-9"><br>
          <div class="row lidiv">
            <div class="col-xs-1">Home</div>
            <div class="col-xs-1 line">|</div>
            <div class="col-xs-1">About</div>
            <div class="col-xs-1 line">|</div>
            <div class="col-xs-2 contact">Contact Us</div>
            <div class="col-xs-6"><input type="text" placeholder="Search" class="search">
            <button class="libt">Go</button></div>
          </div><br><br><br>

          <!-- End navigation -->

          <!-- left side image -->
          <div class="row">
            <div class="col-md-5 article">
              <h3 class="web">Web Development</h3><br>
              <img src="images/html.jpg" alt="html image" class="img-responsive img2"><br><br><br><br><br>

              <!-- End left side image -->

              <!-- left side calander -->
              <table style="width:100%">
                <tr>
                  <th colspan="7" style="font-size:23px;">&nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true">&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i> August 2020 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                  </th>
                <tr>
                  <th class="web tf">S</th>
                  <th class="web tf">M</th>
                  <th class="web tf">T</th>
                  <th class="web tf">W</th>
                  <th class="web tf">TH</th>
                  <th class="web tf">F</th>
                  <th class="web tf">S</th>
                </tr>
                <tr class="web" style="font-size:18px;">
                  <td></td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                </tr>
                <tr class="web" style="font-size:18px;"> 
                  <td>7</td>
                  <td>8</td>
                  <td>9</td>
                  <td>10</td>
                  <td>11</td>
                  <td>12</td>
                  <td>13</td>
                </tr>
                <tr class="web" style="font-size:18px;">
                  <td>14</td>
                  <td>15</td>
                  <td>16</td>
                  <td>17</td>
                  <td>18</td>
                  <td>19</td>
                  <td>20</td>
                </tr>
                <tr class="web" style="font-size:18px;">
                  <td>21</td>
                  <td>22</td>
                  <td>23</td>
                  <td>24</td>
                  <td>25</td>
                  <td>26</td>
                  <td>27</td>
                </tr>
                <tr class="web" style="font-size:18px;">
                  <td>28</td>
                  <td>29</td>
                  <td>30</td>
                  <td>31</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table><br><br><br><br><br>

              <!-- End left side calander -->

              <!-- left side css image -->
              <p class="web">
                <img src="images/grid.jpg" alt="css grid image" class="img-responsive img3">
              </p>
            </div>

            <!-- End left side css image -->


            <!-- center article -->

            <div class="col-md-7 article" style="font-size:18px; line-height:31px; margin-top:14px">

              <?php
                $servername = "localhost";
                $username = "jaxcode95";
                $password = "jaxcode95";
                $dbname = "jaxcode95";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT * from blog";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {

                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                ?>

                <p><span style="font-size: 23px; font-weight:500; margin-left: 140px;"><?=$row["article_title"]?></span><br><br>
                <span><?=$row["blurb"]?></span><br>
                <span style="font-weight:500;">Author: <?=$row["author"]?>&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;<small><?=$row["date_created"]?></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src= "images/tag.png" alt="tag image" style="height:70px; width:70px;"></span></p><hr><br>

                <?

                }
                } else {
                echo "0 results";
                }

                mysqli_close($conn);
              ?>
            </div>
          </div>
        </div>

        <!-- End center article -->


        <!-- right section -->

        <div class="col-md-3 web" style="font-size: 18px; border-left: 4px solid #B96C2C">
          <h3>Category</h3><br>
          <ul style="line-height:428%">
            <li>Category 1 (3)</li>
            <li>Category 2 (14)</li>
            <li>Category 3 (159)</li>
            <li>Category 4 (26)</li>
            <li>Category 5 (5)</li>
            <li>Uncategorized (358)</li>
          </ul><hr>

          <h3><br>Blogroll</h3>
          <ul style="list-style-type:none; font-size: 20px; margin:20px 40px 20px 0px; line-height:430%">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
            <li><a href="#">Link 5</a></li>
            <li><a href="#">Link 6</a></li>
            <li><a href="#">Link 7</a></li>
            <li><a href="#">Link 8</a></li>
            <li><a href="#">Link 9</a></li>
            <li><a href="#">Link 10</a></li>
            <li><a href="#">Link 11</a></li>
            <li><a href="#">Link 12</a></li>
            <li><a href="#">Link 13</a></li>
            <li><a href="#">Link 14</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- End right section -->


    <!-- footer -->

    <div class="container">
      <div class="row footerstyle ">
        <div class="col-md-3 bottomicon">
          <p><i class="fa fa-rss-square" aria-hidden="true" style="color:#F3913D;"></i>&nbsp;&nbsp;
          <i class="fa fa-twitter-square" aria-hidden="true" style="color:#BEE8EB;"></i>&nbsp;&nbsp;
          <i class="fa fa-facebook-official" aria-hidden="true" style=" color:#7991BA;"></i></p>
        </div>
        <div class="col-md-9 bottom">
          <ul id="footer">
            <li>Terms of Use&nbsp;&nbsp;</li>
            <li class="line">|&nbsp;&nbsp;</li>
            <li>About&nbsp;&nbsp;</li>
            <li class="line">|&nbsp;&nbsp;</li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- End footer -->


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </body>
</html>