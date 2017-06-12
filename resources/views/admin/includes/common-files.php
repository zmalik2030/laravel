<?php
	

	/*function get_admin_permissions($id) {
		global $db;
		$query="select * from admin where id=?";
		$row=$db->fetch_array_by_query($query, array($id));
		if ($row) {
			if ($row['permissions']!='') {
				return json_decode($row['permissions']);
			} else {
				redirect_header(BASE_URL);
			}
		} else {
			redirect_header(BASE_URL);
		}
	}*/
?>