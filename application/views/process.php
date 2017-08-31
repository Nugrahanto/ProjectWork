<?php

$mysqli = new mysqli('localhost', 'root', '', 'db_project');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page = isset($_GET['p'])? $_GET['p'] : '';
if (condition) {
	$mysqli->query("SELECT * FROM tb_nilai");
	while ($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $row['id_nilai'] ?></td>
			<td><?php echo $row['nis'] ?></td>
			<td><?php echo $row['nama_siswa'] ?></td>
			<td><?php echo $row['kelas'] ?></td>
			<td><?php echo $row['mata_pelajaran'] ?></td>
			<td><?php echo $row['uh1'] ?></td>
			<td><?php echo $row['uh2'] ?></td>
			<td><?php echo $row['uh3'] ?></td>
			<td><?php echo $row['uh4'] ?></td>
			<td><?php echo $row['uh5'] ?></td>
			<td><?php echo $row['uts1'] ?></td>
			<td><?php echo $row['uts2'] ?></td>
			<td><?php echo $row['uas1'] ?></td>
			<td><?php echo $row['uas2'] ?></td>
		</tr>
		<?php
	}
} else {

	// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
	// Note that is just an example. Should take precautions such as filtering the input data.

	header('Content-Type: application/json');

	$input = filter_input_array(INPUT_POST);



	if ($input['action'] == 'edit') {
	    $mysqli->query("UPDATE tb_nilai SET nis='" . $input['nis'] . "', nama_siswa='" . $input['nama_siswa'] . "', kelas='" . $input['kelas'] . "', mata_pelajaran='" . $input['mata_pelajaran'] . "', uh1='" . $input['uh1'] . "', uh2='" . $input['uh2'] . "', uh3='" . $input['uh3'] . "', uh4='" . $input['uh4'] . "', uh5='" . $input['uh5'] . "', uts1='" . $input['uts1'] . "', uts2='" . $input['uts2'] . "', uas1='" . $input['uas1'] . "', uas2='" . $input['uas2'] . "' WHERE id_nilai='" . $input['id_nilai'] . "'");
	} else if ($input['action'] == 'delete') {
	    $mysqli->query("UPDATE tb_nilai SET deleted=1 WHERE id='" . $input['id'] . "'");
	} else if ($input['action'] == 'restore') {
	    $mysqli->query("UPDATE tb_nilai SET deleted=0 WHERE id='" . $input['id'] . "'");
	}

	mysqli_close($mysqli);

	echo json_encode($input);

}
?>