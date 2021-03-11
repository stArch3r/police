<?php
?>
<div class="wrap">
    
<title>jasiri</title>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;

        }
    </style>
</head>

    <div class="row">
        <div class="col-sm-12">

            

        </div>
        <div class="row">
            <div class="col-md-4">
                <h5 style="margin-left: 6.6em;"> <b>Incident Report</b> </h5>
                    
            </div>
            <div class="col-md-8">
                <h5> detailed report</h5>
                <div class="row">
                    
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" placeholder="type here" id="comment"></textarea>
                  </div>
                  
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      use current location
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      add location
                    </label>
                  </div>

                  <button type="button" class="btn btn-dark">sumbit</button>

                  
             

            </div>
        </div>

</body>

</html>
</div>