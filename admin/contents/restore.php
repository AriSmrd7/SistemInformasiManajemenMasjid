

<?php
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'db_masjid';

if (! empty($_FILES)) {
    // Validating SQL file type by extensions
    if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
        "sql"
    ))) {
        $response = array(
            "type" => "error",
            "message" => "Invalid File Type"
        );
    } else {
        if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
            move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
			$restore = restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName,$_FILES["backup_file"]["name"]);
			if($restore){
				echo "sukses di restore";
			}
        }
    }
}

function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath){
    // Connect & select the database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

    // Temporary variable, used to store current query
    $templine = '';
    
    // Read in entire file
    $lines = file($filePath);
    
    $error = '';
    
    // Loop through each line
    foreach ($lines as $line){
        // Skip it if it's a comment
        if(substr($line, 0, 2) == '--' || $line == ''){
            continue;
        }
        
        // Add this line to the current segment
        $templine .= $line;
        
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';'){
            // Perform the query
            if(!$db->query($templine)){
                $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
            }
            
            // Reset temp variable to empty
            $templine = '';
        }
    }
    return !empty($error)?$error:true;
}

?>
<?php
if (! empty($response)) {
    ?>
<div class="response <?php echo $response["type"]; ?>">
<?php echo nl2br($response["message"]); ?>
</div>
<?php
}
?>
           <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Backup Data </h1>
                    </div>
                </div>
                  <hr />
                 <div class="col-lg-12">
					<h2>Klik tombol dibawah untuk mengembalikan seluruh data</h2>
					<div class="form-group">
					<form method="post" action="" enctype="multipart/form-data" id="frm-restore">
						<div class="form-group">
							<div>Pilih file database</div>
							<div>
								<input class="form-control" type="file" name="backup_file" class="input-file" />
							</div>
						</div>
						<div>
							<input type="submit" name="restore" value="Restore"
								class="btn btn-success btn-grad" />
						</div>
					</form>
					</div>
                 </div>
            </div>
            </div>