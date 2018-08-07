<?php include('header.php') ?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"></li>
        </ol>
        <!-- Icon Cards-->

		<?php

        $table = "competitors";
        include('conec.php');
		$result = mysqli_query($conn, $sqll);
		$data = array();

		$number = array();
		if (mysqli_num_rows($result) > 0) {
            // output data of each row
			while($row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
				$number[] = $row['id'];
			}
		}
		$number_formated= "[".implode(",",$number)."]";

		?>
        <script type="text/javascript">
            window.dataf= <?php echo $number_formated; ?>
        </script>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Información
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Provincia</th>
                                <th>Provincia de la mamá</th>
                                <th>Razón</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Provincia</th>
                                <th>Provincia de la mamá</th>
                                <th>Razón</th>
                            </tr>
                        </tfoot>
					<?php
                    if (count($data) > 0) {
                        // output data of each row
                        echo '<tbody>';
                        foreach ($data as $row){
                    ?>
                            <tr>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['phone']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['province']; ?> </td>
                                <td> <?php echo $row['mother_province']; ?> </td>
                                <td> <?php echo $row['reason']; ?> </td>
                            </tr>

                    <?php
                        }
	                    echo '</tbody>';
                    } else {
                        echo '0 results';
                    }
                    ?>
                    </table>
                </div>
            </div>
<!--            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?php include('footer.php') ?>