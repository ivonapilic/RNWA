	
		<div>
			<center><h2>Students</h2></center>
		</div>
		<a class="DodajBtn" href="?controller=students&action=verifyinsert" role="button">New student? <i class="fa fa-plus"></i></a>

    <table>
        <tr>
            <th>Roll_num</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Department_id</th>
            <th>Phone</th>
            <th>Admission_date</th>
            <th>Cet_marks</th>
						<th colspan="2"></th>
        </tr>
        <?php foreach ($students as $row): ?>
        <tr>
            <td><?php echo $row->roll_num ?></td>
            <td><?php echo $row->first_name ?></td>
            <td><?php echo $row->last_name ?></td>
            <td><?php echo $row->department_id ?></td>
            <td><?php echo $row->phone ?></td>
            <td><?php echo $row->admission_date ?></td>
            <td><?php echo $row->cet_marks ?></td>
            <td><a href="?controller=students&action=verifyupdate&stu=<?php echo $row->roll_num?>" class="actionBtn">Update<i class="fa fa-edit"></i></a></td>
						<td><a href="?controller=students&action=verifydelete&stu=<?php echo $row->roll_num?>" class="actionBtn">Delete<i class="fa fa-trash"></i></a></td>

        </tr>
        <?php endforeach ?>
    </table>
    
  
 
    
