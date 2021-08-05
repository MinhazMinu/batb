<?php
require_once __DIR__ . '/database.php';
if ($con) {
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

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="page-header">Insert Form</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form">
            <table class="table table-hover table-striped table-info table-bordered">
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
                            <option value="1" id="name_yes">Yes</option>
                            <option value="2">No</option>
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
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                            <option value="3"> Under 18</option>
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
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="conducted_by_representative" id="conducted_by_representative" class="form-control" disabled="disabled">
                    </td>
                </tr>
                <tr>
                    <td>Capsule Offer</td>
                    <td>
                        <select class="form-select form-select-sm" id="capsule_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Full Flavoured Smoke</td>
                    <td>
                        <select class="form-select form-select-sm" id="smoke_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Blueberry and Lemon Flavour</td>
                    <td>
                        <select class="form-select form-select-sm" id="blueberry_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Primary Brand</td>
                    <td>
                        <select class="form-select form-select-sm" id="primary_select">
                            <option value="-1">Select</option>
                            <option value="1">B & H</option>
                            <option value="2">Capstan</option>
                            <option value="3">Derby</option>
                            <option value="4">Derby Style</option>
                            <option value="5">Hollywood</option>
                            <option value="6">JPGL</option>
                            <option value="7">Marise</option>
                            <option value="8">Marlboro</option>
                            <option value="9">Navy</option>
                            <option value="10">Pilot</option>
                            <option value="11">Real</option>
                            <option value="12">Sheikh</option>
                            <option value="13">Star</option>
                            <option value="14">Royals</option>
                            <option value="14">Winston</option>
                            <option value="15">Does not smoke</option>
                            <option value="16">Others</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Secondary Brand</td>
                    <td><select class="form-select form-select-sm" id="secondary_select">
                            <option value="-1">Select</option>
                            <option value="1">B & H</option>
                            <option value="2">Capstan</option>
                            <option value="2">Derby</option>
                            <option value="2">Derby Style</option>
                            <option value="2">Hollywood</option>
                            <option value="2">JPGL</option>
                            <option value="2">Marise</option>
                            <option value="2">Marlboro</option>
                            <option value="2">Navy</option>
                            <option value="2">Pilot</option>
                            <option value="2">Real</option>
                            <option value="2">Sheikh</option>
                            <option value="2">Star</option>
                            <option value="2">Royals</option>
                            <option value="2">Winston</option>
                            <option value="2">Others</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Profession</td>
                    <td><select class="form-select form-select-sm" id="profession_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Job / Business / Study</td>
                    <td>
                        <select class="form-select form-select-sm" id="jbs_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Express Thanks</td>
                    <td>
                        <select class="form-select form-select-sm" id="express_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Call Status</td>
                    <td>
                        <select class="form-select form-select-sm" id="call_status_select">
                            <option value="-1">Select</option>
                            <option value="1">Call Received</option>
                            <option value="2">Not Reached</option>
                            <option value="2">Ringing</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Call Remarks</td>
                    <td>
                        <select class="form-select form-select-sm" id="call_remarks_select">
                            <option value="-1"> Select</option>
                            <option value="1">Success</option>
                            <option value="2">Not Interested</option>
                            <option value="2">Mobile Off</option>
                            <option value="2">No Answer</option>
                            <option value="2">Call Received by Others</option>
                            <option value="2">Invalid Number</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Call Check Required</td>
                    <td>
                        <select class="form-select form-select-sm" id="call_check_select">
                            <option value="-1">Select</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </td>
                    <td></td>
                </tr>


            </table>
        </form>

    </div> <!-- container end -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('form').change(function() {
                var name = $('#name_select option:selected').val();
                var age = $('#age_select option:selected').val();
                var conducted = $('#conducted_select option:selected').val();
                var primary_brand = $('#primary_select').val();
                var call_remarks = $('#call_remarks_select').val();

                // function
                function toggle_field($params, $value) {
                    $params.forEach(element => {
                        $(element).attr('disabled', $value);
                    });
                }

                // name
                if (name == 1 && name != -1) {
                    $("#name").attr('disabled', false);

                } else if (name == 2) {
                    $("#name").attr('disabled', true);
                }
                // age
                if (age == 1 && age != -1) {
                    var arr = [
                        "#age", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, false);

                } else if ((age == 2 || age == 3) && age != -1) {

                    var arr = [
                        "#age", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);



                }
                // conducted
                if (conducted == 1 && conducted != -1) {
                    $("#conducted_by_representative").attr('disabled', false);
                } else if (conducted == 2) {

                    var arr = [
                        "#conducted_by_representative", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);

                }


                if ((name == 2 && age == 2) && name != -1 && age != -1) {
                    $("#conducted_select").val(2);

                } else {
                    $("#conducted_select").val(-1);
                }

                if (primary_brand == 15 && primary_brand != -1) {

                    var arr = [
                        "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);

                } else if (primary_brand != 15 && primary_brand != -1) {

                    var arr = [
                        "#secondary_select",
                        "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, false);

                }
                if (call_remarks == 1 && call_remarks != -1) {


                    var arr = [
                        "#name_select", "#age_select", "#conducted_select", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select", "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, false);


                } else if (call_remarks != 1 && call_remarks != -1) {

                    var arr = [
                        "#name_select", "#age_select", "#conducted_select", "#capsule_select", "#smoke_select", "#blueberry_select", "#primary_select", "#secondary_select", "#profession_select", "#jbs_select", "#express_select", "#call_status_select", "#call_remarks_select", "#call_check_select"
                    ]
                    toggle_field(arr, true);


                }

            });

        });
    </script>

</body>

</html>