<table border="1">
    <tr>
        <td colspan="7" valign="top"><h2>Students Marks Report</h2></td>
    </tr>
   
    <tr>
        <th style="text-align: center;">Sr.No.</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Mobile No</th>
        <th style="text-align: center;">Collage Name</th>
        <th style="text-align: center;">Date</th>
        <th style="text-align: center;">Score</th>
    </tr>
    @foreach($answer as $row)
    <?php
    $x = 1;
    $timestamp = strtotime($row->date);
            $new_date = date("d/m/Y", $timestamp); ?>
    <tr>
        <td style="text-align: center;">{{$x++}}</td>
        <td style="text-align: center;">{{$row->name}}</td>
        <td style="text-align: center;">{{$row->email}}</td>
        <td style="text-align: center;">{{$row->mobile_no}}</td>
        <td style="text-align: center;">{{$row->collage_name}}</td>
        <td style="text-align: center;">{{$row->date}}</td>
        <td style="text-align: center;">{{$row->score}}</td>
    </tr>
        @endforeach
</table>
<!------------------- Print Total Report Data End------------------->
<!------------------- Print Data Into Excel Sheet ------------------->
    <?php
//    exit;
//        echo "<pre>";print_r($_SERVER );
    $the_data = 'this is test text for downloading the contents.';
    $report_name = "Student-Marks-Report";
    header("Content-Type: application/xls");
    header("Content-type: image/Upload");
    header("Content-Disposition: attachment; filename=$report_name.xls");
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Transfer-Encoding: binary');
//} else {
//    echo "No Record Found";
//}
?>
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script>
//    alert();
$(document).ready(function () {
    location.href = 'report?id=1';
});
</script>
