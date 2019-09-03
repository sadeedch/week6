<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>
        <link rel = "stylesheet" href="style.css">
        <!-- -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
    </head>
    <body>
        <div class="container">
            <div class = "row" id = "navbar">
                <div class="col-md-6" > Social Media </div>
                <div class="col-md-2" > Friends </div>
                <div class="col-md-2" > Photos </div>
                <div class="col-md-2" > Login </div>
            </div>
            <div class = "row" id = "content">
                
                <div class="col-md-4" > 
                    <label>Name:</label><br><input type = "text"><br>
                    <label>Message:</label><br><input type = " text"><br>
                </div>
                
                <div class="col-md-8" > 
                    <p> Sadeed Ahmad<p>
                    <div id = "post">
                        <img src="user.jpg" width=100 height =100 alt="simsons user">
                        <p>24/10/2018 18:00</p>
                         <p>This is the first post</p>
                    </div><br>

                    <div id = "post">
                        <img src="user.jpg" width=100 height =100 alt="simsons user">
                        <p>24/10/2018 19:00</p>
                        <p>This is the 2nd post</p>
                    </div><br>
                    <div id = "post">
                        <img src="user.jpg" width=100 height =100 alt="simsons user">
                        <p>Date/Time</p>
                        <p>24/10/2018 20:00</p>
                        <p>This is the 3rd post</p>
                    </div>
                
                </div>
                
            </div>
        </div><!-- /.container -->
    </body>
</html>