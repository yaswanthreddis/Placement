<?php
// Include your database connection code here
require("include/connect.php"); // Adjust the path as needed

// Rest of your code follows
if (isset($_GET['dept']) && isset($_GET['batch']) && isset($_GET['percentage'])) {
    $dept = $_GET['dept'];
    $batch = $_GET['batch'];
    $percentage = $_GET['percentage'];

    // Generate a CSV file
    $filename = "student_data.csv";
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Create a file pointer
    $output = fopen('php://output', 'w');

    // Add CSV header row
    fputcsv($output, array('S.NO', 'Regd.No', 'Name', 'Batch', 'Percentage', 'CGPA'));

    // Fetch data from the database and add to CSV
    $sql = "SELECT * FROM students WHERE dept='$dept' AND batch='$batch' AND percentage>='$percentage' ORDER BY percentage DESC";
    $data = $conn->query($sql);
    $count = 0;
    while ($res = $data->fetch_assoc()) {
        fputcsv($output, array(
            ++$count,
            $res['id'],
            $res['name'],
            $res['batch'],
            $res['percentage'],
            $res['cgpa3']
        ));
    }

    // Close the file pointer
    fclose($output);

} else {
    echo "Invalid parameters.";
}
?>
