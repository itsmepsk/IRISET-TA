
<!doctype html>
<html lang="en">

<head>
    <title>Travel Allowance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Automatic Travel Allowance calculator and printer for Indian Railways.">
    <script src="../files/js/jquery-3.4.1.min.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/form.js"></script>
    <link href="../files/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../files/css/form.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class='container'>
    <div class='row justify-content-center heading'>
        <h1 style="display: none">Indian Railways Travel Allowance Generator</h1>
        <a href = "../">
        <h2>
            TRAVELLING ALLOWANCE JOURNAL (β)
        </h2>
        </a>
    </div>

    <form method='POST' target='_blank' action='trial.php' onsubmit="return getCount()">
        <div class= 'row'>
            <div class='form-row'>
                <div class='form-group col-sm-4 col-md-2 formLabel'>
                    <div class='fff'>
                        <label for="name">Name *</label>
                        <input type='text' name = 'name' required = 'required' placeholder='Your Name' value = '' class="form-control form-control-lg formData" id="name">
                    </div>
                </div>
                <div class='form-group col-sm-4 col-md-2 formLabel'>
                    <div class='fff'>
                        <label for="designation">Designation *</label>
                        <input type='text' name = 'designation' required = 'required' value='' placeholder='Designation'  class="form-control form-control-lg formData" id="designation">
                    </div>
                </div>
                <div class='form-group col-sm-4 col-md-2 formLabel'>
                    <div class='fff'>
                        <label for='month'>Month *</label>
                        <input type='text' name='month' required = 'required' placeholder='TA Month' value = '' class="form-control form-control-lg formData" id="month">
                    </div>
                </div>
                <div class='form-group col-sm-4 col-md-2 formLabel'>
                    <div class='fff'>
                        <label for='gradePay'>Grade Pay *</label>
                        <input type='text' name = 'gradePay' value='' placeholder='Grade Pay' required = 'required' class="form-control form-control-lg formData" id="gradePay">
                    </div>
                </div>
                <div class='form-group col-sm-4 col-md-2 formLabel'>
                    <div class='fff'>
                        <label for='gradePay'>Basic Pay </label>
                        <input type='text' name='basicPay' value='' placeholder='Your Basic Pay'  class="form-control form-control-lg formData" id="basicPay">
                    </div>
                </div>
                <div class='form-group col-sm-4 col-md-2 formLabel'>
                    <div class='fff'>
                        <label for='dateOfJoining'>Date of Joining </label>
                        <input type='text' name='dateOfJoining' value='' placeholder='Date Of Joining'  class="form-control form-control-lg formData" id="dateOfJoining">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-row" style="width:100%">
                <div class='form-group col-sm-12 col-md-12 formLabel'>
                    <div class='fff'>
                        <label for='zoneOrUnit'>Zone/Unit *</label>
                        <select  name = "zoneOrUnit" id ="zoneOrUnit" class="form-control form-control-lg" style="text-align: center">
                            <option>IRISET</option>
                            <option>ECoR</option>
                            <option>NR</option>
                            <option>NCR</option>
                            <option>SCR</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row" style="width:100%">
                <div class='form-group col-sm-12 col-md-4 formLabel'>
                    <div class='fff'>
                        <label for='division'>Division </label>
                        <input type='text' name='division' value='' placeholder='Division'  class="form-control form-control-lg formData" id="division">
                    </div>
                </div>
                <div class='form-group col-sm-12 col-md-4 formLabel'>
                    <div class='fff'>
                        <label for='pfNumber'>PF Number </label>
                        <input type='text' name='pfNumber' value='' placeholder='PF NUmber'  class="form-control form-control-lg formData" id="pfNumber">
                    </div>
                </div>
                <div class='form-group col-sm-12 col-md-4 formLabel'>
                    <div class='fff'>
                        <label for='perDayTA'>Per Day TA in Rupees*</label>
                        <input type='number' name='perDayTA' value=900 placeholder='Per Day TA' required = 'required' class="form-control form-control-lg formData" id="perDayTA">
                    </div>
                </div>
            </div>
        </div>
        <hr class='style4'>
        <div id='travelAllowance' class='row'>

        </div>
        <div class='row'>
            <div class='col-md-6 buffer'>
                <button type="button" class="btn btn-primary btn-lg btn-block" name = "addNewRow" value="" onclick="insertNewRow()">Add Travelling Details</button>
            </div>
            <br>
            <div class='col-md-6 buffer'>
                <button type="button" class="btn btn-primary btn-lg btn-block" name = "addNewRow1" value="" onclick="insertRowForStay()">Staying Details</button>
            </div>
            <br/>
        </div>
        <div class='row'>
            <div class='col buffer'>
                <input type="hidden" id = "trr" name="ttt" value="">
            </div>
        </div>
        <div class='row'>
            <div class='col buffer'>
                <button type="submit" class="btn btn-success btn-block"  name = "tutu">Submit</button>
            </div>
        </div>
    </form>
    <div class="row">

    </div>
</div>
</body>
