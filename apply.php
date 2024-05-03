<!DOCTYPE html>
<html>
    <head>
     <style>
         input{ width: 500px;
  padding: 12px 20px;float:left;
  margin: 8px 0;
  border-radius:6px;
  box-sizing: border-box;}
 table{width :50%;float:center; top:50%;}input
 body{background-color: rgb(30, 185, 233);}
  form{border:2px solid rgb(230, 227, 227); background-color: rgb(244, 247, 248);}
 .magic{ width:50%;height: 150px;}
 input[type=submit],input[type=reset] {
  background-color: #1da9cc;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width:300px;
}
h1{text-align: center;font-size: bold ;}
   </style>
    </head>
    <body style="background-color: rgb(30, 185, 233);"><h1>Please Fill The Given Form To Apply For A Job</h1><br>
        <form>
            <table><tr>
                <td>
                Enter Name:</td><td><input type="text" name="enter name"/>
                </td></tr>
                <td>
                    Enter Email:</td><td><input type="text" name="enter email"/>
                    </td></tr>
                    <td>
                        Enter PhoneNumbe:</td><td><input type="text" id="photo" name="enter number"/>
                        </td></tr>
                        <td>
                            Upload Works:</td><td><input type="file" name="select"/>
                            </td></tr>
                            <td>
                                Job Description:</td><td><div class="magic">
                                    <textarea  style="height:150px;width:500px;" rows="10" cols="30">what type of a job</textarea>
                                </div></td></tr>
                                <td>
                                    Tertially Qualifications</td><td><input type="radio"  />Yes<br>
                                  <input type="radio"/>No</td></tr>
            
                                    </tr>
          <td>
          Upload Qualifications:</td><td><input type="file" name="select"/>
          </tr><tr>
          <td>
              Done submit or cancel!:</td><td></td></tr><td><input type="submit" name="submit"/><td><input type="reset" valu="cancel"name="cancel"/>
              </td></tr>
        </td></tr> </table>
        </form>
    </body>
</html>