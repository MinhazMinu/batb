<?php
require_once __DIR__ . '/database.php';

?>


<?php
if ($_POST) {
    print_r($_POST);

    try {

        // insert query
        $query = "INSERT INTO batb (name,age,conducted_by_representative,capsule_offer,full_flavoured_smoke,Blueberry_and_lemon_flavour,primary_brand,secondary_brand,profession,job_business_study,express_thanks,call_status,call_remarks,call_check_required) VALUES (:name,:age,:conducted_by_representative,:capsule_offer,:full_flavoured_smoke,:Blueberry_and_lemon_flavour,:primary_brand,:secondary_brand,:profession,:job_business_study,:express_thanks,:call_status,:call_remarks,:call_check_required)";



        // prepare query for execution
        $stmt = $con->prepare($query);

        // posted values
        $name = $_POST['name'];
        $age  = $_POST['age'];
        $conducted_by_representative = $_POST['conducted_by_representative'];
        $capsule_select = $_POST['capsule_select'];
        $smoke_select  = $_POST['smoke_select'];
        $blueberry_select  = $_POST['blueberry_select'];
        $primary_select  = $_POST['primary_select'] == "Others" ? $_POST['primary_others'] : $_POST['primary_select'];
        $secondary_select  = $_POST['secondary_select'];
        $secondary_select  = $_POST['secondary_select'] == "Others" ? $_POST['secondary_others'] : $_POST['secondary_select'];
        $profession_select  = $_POST['profession_select'];
        $jbs_select  = $_POST['jbs_select'];
        $express_select  = $_POST['express_select'];
        $call_status_select  = $_POST['call_status_select'];
        $call_remarks_select  = $_POST['call_remarks_select'];
        $call_check_select  = $_POST['call_check_select'];

        // bind the parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':conducted_by_representative', $conducted_by_representative);
        $stmt->bindParam(':capsule_offer', $capsule_select);
        $stmt->bindParam(':full_flavoured_smoke', $smoke_select);
        $stmt->bindParam(':Blueberry_and_lemon_flavour', $blueberry_select);
        $stmt->bindParam(':primary_brand', $primary_select);
        $stmt->bindParam(':secondary_brand', $secondary_select);
        $stmt->bindParam(':profession', $profession_select);
        $stmt->bindParam(':job_business_study', $jbs_select);
        $stmt->bindParam(':express_thanks', $express_select);
        $stmt->bindParam(':call_status', $call_status_select);
        $stmt->bindParam(':call_remarks', $call_remarks_select);
        $stmt->bindParam(':call_check_required', $call_check_select);



        // Execute the query
        if ($stmt->execute()) {
            echo "<div class='container alert alert-success'>Record was saved.</div>";
        } else {
            echo "<div class='container alert alert-danger'>Unable to save record.</div>";
        }
    }

    // show error
    catch (PDOException $exception) {
        die('ERROR: ' . $exception->getMessage());
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="page-header">Insert Form </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form" name="form">
            <table class="table table-hover table-striped   table-responsive">
                <tr>
                    <th>Field</th>
                    <th>Yes/No</th>
                    <th>
                        </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <select class="form-select form-select-sm" id="name_select">
                            <option value="-1">Select</option>
                            <option value="Yes" id="name_yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>
                        <select class="form-select form-select-sm" id="age_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Under 18"> Under 18</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="age" id="age" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>Conducted by Representative</td>
                    <td>
                        <select class="form-select form-select-sm" id="conducted_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="conducted_by_representative" id="conducted_by_representative" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>Capsule Offer</td>
                    <td>
                        <select class="form-select form-select-sm" id="capsule_select" name="capsule_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Full Flavoured Smoke</td>
                    <td>
                        <select class="form-select form-select-sm" id="smoke_select" name="smoke_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Blueberry and Lemon Flavour</td>
                    <td>
                        <select class="form-select form-select-sm" id="blueberry_select" name="blueberry_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Primary Brand</td>
                    <td>
                        <select class="form-select form-select-sm" id="primary_select" name="primary_select">
                            <option value="-1">Select</option>
                            <option value="B & H">B & H</option>
                            <option value="Capstan">Capstan</option>
                            <option value="Derby">Derby</option>
                            <option value="Derby Style">Derby Style</option>
                            <option value="Hollywood">Hollywood</option>
                            <option value="JPGL">JPGL</option>
                            <option value="Marise">Marise</option>
                            <option value="Marlboro">Marlboro</option>
                            <option value="Navy">Navy</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Real">Real</option>
                            <option value="Sheikh">Sheikh</option>
                            <option value="Star">Star</option>
                            <option value="Royals">Royals</option>
                            <option value="Winston">Winston</option>
                            <option value="Does not smoke">Does not smoke</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                    <td><input type="text" name="primary_others" id="primary_others" class="form-control" disabled="disabled"></td>
                </tr>
                <tr>
                    <td>Secondary Brand</td>
                    <td><select class="form-select form-select-sm" id="secondary_select" name="secondary_select">
                            <option value="-1">Select</option>
                            <option value="B & H">B & H</option>
                            <option value="Capstan">Capstan</option>
                            <option value="Derby">Derby</option>
                            <option value="Derby Style">Derby Style</option>
                            <option value="Hollywood">Hollywood</option>
                            <option value="JPGL">JPGL</option>
                            <option value="Marise">Marise</option>
                            <option value="Marlboro">Marlboro</option>
                            <option value="Navy">Navy</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Real">Real</option>
                            <option value="Sheikh">Sheikh</option>
                            <option value="Star">Star</option>
                            <option value="Royals">Royals</option>
                            <option value="Winston">Winston</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                    <td><input type="text" name="secondary_others" id="secondary_others" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>Profession</td>
                    <td>
                    </td>
                    <td><input type="text" name="profession_select" id="profession_select" class="form-control"></td>
                </tr>
                <tr>
                    <td>Job / Business / Study</td>
                    <td>

                    </td>
                    <td><input type="text" name="jbs_select" id="jbs_select" class="form-control"></td>
                </tr>
                <tr>
                    <td>Express Thanks</td>
                    <td>
                        <select class="form-select form-select-sm" id="express_select" name="express_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Call Status</td>
                    <td>
                        <select class="form-select form-select-sm" id="call_status_select" name="call_status_select">
                            <option value="-1">Select</option>
                            <option value="Call Received">Call Received</option>
                            <option value="Not Reached">Not Reached</option>
                            <option value="Ringing">Ringing</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Call Remarks</td>
                    <td>
                        <select class="form-select form-select-sm" id="call_remarks_select" name="call_remarks_select">
                            <option value="-1"> Select</option>
                            <!-- <option value="Success">Success</option>
                            <option value="Not Interested">Not Interested</option>
                            <option value="Mobile Off">Mobile Off</option>
                            <option value="2">No Answer</option>
                            <option value="Call Received by Others">Call Received by Others</option>
                            <option value="Invalid Number">Invalid Number</option> -->
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Call Check Required</td>
                    <td>
                        <select class="form-select form-select-sm" id="call_check_select" name="call_check_select">
                            <option value="-1">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <th colspan="2">
                        <input type="button" id="submit_button" value="Submit Data" class="btn btn-lg btn-primary m-5 text-center">
                    </th>
                </tr>
            </table>
        </form>

    </div> <!-- container end -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('form').change(function() {
                var name = $('#name_select option:selected').val();
                var age = $('#age_select option:selected').val();
                var conducted = $('#conducted_select option:selected').val();
                var primary_brand = $('#primary_select').val();
                var secondary_brand = $('#secondary_select').val();
                var call_remarks = $('#call_remarks_select').val();

                // function
                function toggle_field($params, $value) {
                    $params.forEach(element => {
                        $(element).attr('disabled', $value);
                    });
                }

                // name
                if (name == "Yes" && name != -1) {
                    $("#name").attr('disabled', false);

                } else if (name == "No") {
                    $("#name").val("");
                    $("#name").attr('disabled', true);
                }
                // age
                if (age == "Yes" && age != -1) {
                    var arr = [
                        "#age", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, false);

                } else if ((age == "No" || age == "Under 18") && age != -1) {
                    $("#age").val("");
                    var arr = [
                        "#age", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);

                }
                // conducted
                if (conducted == "Yes" && conducted != -1) {
                    $("#conducted_by_representative").attr('disabled', false);
                } else if (conducted == "No") {

                    var arr = [
                        "#conducted_by_representative", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);


                }


                if ((name == "No" && age == "No") && name != -1 && age != -1) {
                    $("#conducted_select").val("No");
                    var arr = [
                        "#conducted_by_representative", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);

                } else {

                }

                if (primary_brand == "Does not smoke" && primary_brand != -1) {

                    var arr = [
                        "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);
                } else if (primary_brand != "Does not smoke" && primary_brand != -1) {

                    var arr = [
                        "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, false);
                }

                if (primary_brand == "Others" && primary_brand != -1) {
                    var arr = ["#primary_others"]
                    toggle_field(arr, false);
                } else if (primary_brand != "Others" && primary_brand != -1) {
                    $('#primary_others').val("");
                    var arr = ["#primary_others"]

                    toggle_field(arr, true);
                }
                if (secondary_brand == "Others" && secondary_brand != -1) {
                    var arr = ["#secondary_others"]
                    toggle_field(arr, false);
                } else if (secondary_brand != "Others" && secondary_brand != -1) {
                    $('#secondary_others').val("");
                    var arr = ["#secondary_others"]
                    toggle_field(arr, true);
                }

            });
            $("#submit_button").click(function() {
                $("#form").submit();
            });
        });

        $(document).ready(function() {

            $("#call_status_select").change(function() {

                var el = $("#call_status_select option:selected").val();


                if (el == "Call Received") {
                    $("#call_remarks_select *").remove();
                    var add = "<option value='Success' >Success</option>" +
                        "<option value='Call Received by Others' >Call Received by Others</option>" +
                        "<option value='Call on later' >Call on later</option>" +
                        "<option value='Not interested' >Not interested</option>";
                    $("#call_remarks_select").append(add);
                } else if (el == "Not Reached") {
                    $("#call_remarks_select *").remove();
                    var add = "<option value='Mobile Off' >Mobile Off</option>" +
                        "<option value='Invalid' >Invalid</option>";
                    $("#call_remarks_select").append(add);
                } else if (el == "Ringing") {
                    $("#call_remarks_select *").remove();
                    var add = "<option value='No Answer' >No Answer</option>";
                    $("#call_remarks_select").append(add);
                }
            });

        });
    </script>

</body>

</html>