	
		<div>
			<center><h2>Faculty</h2></center>
		</div>
 
  <a class="DodajBtn" href="?controller=faculty&action=verifyinsert" role="button">New faculty? <i class="fa fa-plus"></i></a>

 
    <table>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>DepartmentID</th>
            <th>Phone</th>
						<th colspan="2"></th>
        </tr>
        <?php foreach ($faculty as $row): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->first_name ?></td>
            <td><?php echo $row->last_name ?></td>
            <td><?php echo $row->department_id ?></td>
            <td><?php echo $row->phone ?></td>
            <td><a href="?controller=faculty&action=verifyupdate&fa=<?php echo $row->id?>" class="actionBtn">Update<i class="fa fa-edit"></i></a></td>
            <td><a href="?controller=faculty&action=verifydelete&fa=<?php echo $row->id?>" class="actionBtn">Delete<i class="fa fa-trash"></i></a></td>

        </tr>
        <?php endforeach ?>
    </table>
	
 
    
