<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <center>

      <div>
        <form action="print_bill.php" method="get">
          <table>
            <th>Student Name</th>
            <th>Reg no.</th>
            <th>Class</th>
            <th>Date</th>
            <th>Deposite by</th>
            <tr>
              <td style="padding:10px;"><input type="text" name="name" placeholder="Name"></td>
               <td ><input type="number" name="reg_no" placeholder="Reg_No"></td>
              <td><select  name="class" class="form-select" aria-label="Default select example">
  <option selected>--Class--</option>
  <option value="nursery">Nursery</option>
  <option value="lkg">L.K.G</option>
  <option value="ukg">U.K.G</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></td>
 <td ><input type="text" name="date" value="<?php echo date("d-m-Y"); ?>">
</td> 
 <td ><input type="text" name="depositer" placeholder="Depositer"></td>

            </tr>

            <tr bgcolor="grey"> <td colspan="5">
              <fieldset>
                <legend>Particulars</legend>
                <label for="">New Admission</label>
                 <input type="checkbox" name="admission" value="admission">
                 <label for="">Yearly</label>
                 <input type="checkbox" name="yearly" value="yearly">
                   <label for="">Diary</label>
                 <input type="checkbox" name="diary" value="diary">
                  <label for="">Tie</label>
                 <input type="checkbox" name="tie" value="tie">

              </fieldset>
            </td></tr>
            <tr>
              <td colspan="5">
                <fieldset>
                <legend>Tution fee</legend>
                <label for="">April</label>
                 <input type="checkbox" name="apr" value="apr">
                 <label for="">May</label>
                 <input type="checkbox" name="may" value="may">
                   <label for="">June</label>
                 <input type="checkbox" name="jun" value="jun">
                  <label for="">July</label>
                 <input type="checkbox" name="jul" value="jul">
                <br>
                <label for="">Dec</label> 
                <input type="checkbox" name="dec" value="dec">
                <label for="">Jan</label>
                <input type="checkbox" name="jan" value="jan">
                <label for="">Feb</label>
                <input type="checkbox" name="feb" value="feb">
              </fieldset>
              </td>
            </tr>
          </table>
          <input type="submit" name="print" value="Print Bill">
        </form>
      </div>
  </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>