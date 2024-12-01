<?php
if (empty($rows)) {
	return;
}
?>

<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($rows as $row) { 
			?>
		<tr>
			<td><?= out($row->first_name) ?></td>
			<td><?= out($row->last_name) ?></td>
			<td><?= out($row->email_address) ?></td>
			<td class="text-center">
				<button class="mt-0 danger sm" mx-post="members/delete_record/<?= $row->id ?>" 
					                                                          mx-on-success="#members-container" 
					                                                          mx-target="#information">Delete</button>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>