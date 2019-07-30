<?php require("common.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
<br><br><br><br>
            <div class="panel panel-primary">
                <div class="panel-heading"><h3>Just Fill This Form</h3></div>
                <div class="panel-body">
                  <form method="POST" action="adddata.php" name="addfunc">
                  <div class="form-group">
                    <label for="waste">Waste Type</label>
                    <select name="waste">
                      <option value="Dry(Biodegradable)">Dry(Biodegradable)</option>
                      <option value="Wet(Biodegradable)">Wet(Biodegradable)</option>
                      <option value="Industrial">Industrial</option>
                      <option value="Electrical">Electrical</option>
                      <option value="Scrap">Scrap</option>
                      <option value="Metallic">Metallic</option>
                      <option value="PVC's/Plastics">PVC's/Plastics</option>
                    </select>
                </div>

      <div class="form-group">

              <label for="quantity">Quantity</label>
              <input type="text" class="form-control" id="quantity" required="required" name="quantity" placeholder="">lbs
          </div>
          <div class="form-group">

                  <label for="age">Waste Age</label>
                  <input type="text" class="form-control" id="age" required="required" name="age"  placeholder="">days
              </div>

              <div class="form-group">

                      <label for="address">Residential Address</label>
                      <input type="text" class="form-control" id="address" required="required" name="address"  placeholder="">
              </div>


          <button type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submitbtn">Put in Bin</button>

        </form>

      </div>

      </div>
  </div>
</div>
</div>
</div>
