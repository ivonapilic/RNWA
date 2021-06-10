
		<div>
			<center><h2>Subjects</h2></center>
		</div>
  
		<a class="DodajBtn" href="?controller=subjects&action=verifyinsert" role="button">New subjects? <i class="fa fa-plus"></i></a>
  

    <table>
        <tr>
            <th>ID</th>
            <th>DepartmentID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Name</th>
            <th>FacultyID</th>
						<th colspan="2"></th>
        </tr>
        <?php foreach ($subjects as $row): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->department_id ?></td>
            <td><?php echo $row->start_date ?></td>
            <td><?php echo $row->end_date ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->faculty_id ?></td>
            <td><a href="?controller=subjects&action=verifyupdate&sub=<?php echo $row->id?>" class="actionBtn">Update<i class="fa fa-edit"></i></a></td>
						<td><a href="?controller=subjects&action=verifydelete&sub=<?php echo $row->id?>" class="actionBtn">Delete<i class="fa fa-trash"></i></a></td>

        </tr>
        <?php endforeach ?>
    </table>
    
  