<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="division.css">

    <link rel="stylesheet" href="connnection_tableformate.php">

</head>
<body>

    <div class="containerd m-3">
        <div class="m-2">

        
            <form action='act_new_subdivision.php' method="post">



            <div class="row m-2">

<div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
    <label class="mrg" for="circle-names">Sr_No</label></div>
    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">
        <input type="tel"  name="Sr_No"  class="text22_wei" required></div>
                                                                                                                                                    

</div>



    <div class="row m-2" >

        <div class="col-12  col-xs-2 col-sm-6 col-md-5 col-lg-4 col-xl-2">
            
            <label class="" for="">Region:</label></div>
            <div class="col-12  col-xs-2 col-sm-6 col-md-7 col-lg-4 col-xl-2">

            <select class="" name="Region" id="">
                <option value="pune">Pune</option>
              <option value="sangli">Sangli</option>
              <option value="satara">Satara</option>
              <option value="solapur">Solapur</option>
            </select></div>
            
        </div>
    
    <div class="row m-2">

    <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
        <label class="mrg" for="circle-names" >Circle:</label></div>
        <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

        <select class="region" name="Circle" id="region-names">
            <option value="pune">Pune</option>
          <option value="sangli">Sangli</option>
          <option value="satara">Satara</option>
          <option value="solapur">Solapur</option>
        </select></div>
        

    </div>
    





    <div class="row m-2">

        <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
            <label class="mrg" for="circle-names" >Division Name:</label></div>
            <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-8 col-xl-2">

            <select class="region1" name="Division_Name" id="region-names">
                <option value="pune">Pune</option>
              <option value="sangli">Sangli</option>
              <option value="satara">Satara</option>
              <option value="solapur">Solapur</option>
            </select>
            </div>
                        
    
        </div>
    


        <div class="row m-2">

            <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                <label class="mrg1" for="circle-names"> Sub Division:</label></div>
                <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-8 col-xl-2">

                <input type="text" class="text1234_wei" name="SubDivision_Name" required></div>
                                            
        
            </div>
        

            <div class="row m-2">

                <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                    <label class="mrg1" for="circle-names">Address 1:</label></div>
                    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                    <input type="text"  class="text_wei" name="Address1" required></div>
                                                                    
            
                </div>
            
                <div class="row m-2">

                    <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                        <label class="mrg1" for="circle-names">Address 2:</label></div>
                        <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                        <input type="text"  class="text_wei" name="Address2" required></div>
                                                                        
                
                    </div>
    
                    <div class="row m-2">

                        <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                            <label class="mrg" for="circle-names">Place:</label></div>
                            <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                            <input type="text"  name="Place" class="text2_wei" required></div>
                                                                                                        
                    
                        </div>
        

                        <div class="row m-2">

                            <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                                <label class="mrg" for="circle-names">Email:</label></div>
                                <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">
                                    <input type="email"  name="Email" class="text3_wei" required></div>
                                                                                                                                            
                        
                            </div>



                            <div class="row m-2">

                                <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                                    <label class="mrg" for="circle-names">Phone No:</label></div>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">
                                        <input type="tel"  name="Phone_No"  class="text22_wei" required></div>
                                                                                                                                                                                    
                            
                                </div>
    
                                <div class="row m-2">

                                    <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                                        <label class="mrg" for="circle-names">Designation:</label>
                                    </div>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

        <input type="text"  name="Designation" placeholder="Deputy Engineer"  class="text23_wei" required><br><br>
                                    </div>                                                                                                                                                                             
                                
                                    </div>


                                    <div class="row m-2">

                                        <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1">

                                                <!-- <input type="submit" name="back" value="Back"> -->
                                                <a href="sub_division.php"> Back</a>

                                             
                                              
                                        </div>
                                        <!-- <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1">
                                            <input type="submit" name="NEW" value="EDIT"/>
                                              
                                        </div> -->
                                        <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1">
                                          
                                            <input type="submit" name="Save" value="SAVE"/>
                                              
                                              
                                        </div>
                                        <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1">
                                                <input type="submit" name="Exit" value="EXIT"/>

                                                  <a href="#"></a>
                                              
                                        </div>
            


                                </form>
                                </div>

    </div>
</div>


</body>
</html>
