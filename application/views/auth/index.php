<div class="container">
	<div class="row">
		<div class="mx-auto">
			<h1 class="text-center"><?= lang('index_heading'); ?></h1>
			<p class="text-center"><?= lang('index_subheading'); ?></p>
			<div class="text-center alert-success" id="infoMessage"><?= $message; ?></div>
			<div id="table" class="table-editable mt-2">
				<span class="table-edit">
					<a style="color:black" href="<?= base_url('index.php/auth/create_user') ?>">
						<button type="button" class="btn btn-teal btn-rounded btn-sm my-0">
							<?= lang('index_create_user_link') ?>
						</button>
					</a>
				</span>
				<span class="table-edit">
					<a style="color:black" href="<?= base_url('index.php/auth/create_group') ?>">
						<button type="button" class="btn btn-teal btn-rounded btn-sm my-0">
							<?= lang('index_create_group_link') ?>
						</button>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="container my-3 mb-5">
	<div class="table-responsive text-nowrap">
		<!--Table-->
		<table class="table table-striped text-center">

			<!--Table head-->
			<thead>
				<tr>
					<th class="text-center"><?= lang('index_fname_th'); ?></th>
					<th class="text-center"><?= lang('index_phone_th'); ?></th>
					<th class="text-center"><?= lang('index_email_th'); ?></th>
					<th class="text-center"><?= lang('index_groups_th'); ?></th>
					<th class="text-center"><?= lang('index_status_th'); ?></th>
					<th class="text-center"><?= lang('index_action_th'); ?></th>
					<th class="text-center"><?= lang('index_vizualizar_th'); ?></th>
				</tr>
			</thead>
			<!--Table head-->
			<!--Table body-->
			<tbody>
				<?php foreach ($users as $user) : ?>
					<tr>
						<td><?= htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
						<td><?= htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
						<td><?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
						<td>
							<?php foreach ($user->groups as $group) : ?>
								<span class="table-acao">
									<?php
									if ($group->name == 'admin') {
										$color = 'btn warning-color-dark';
									} else {
										$color = 'btn teal';
									}

									?>


									<button type="button" class="btn <?= $color ?> lighten-4 btn-rounded btn-sm my-0 black-text ">
										<?= htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8'); ?><br />
									</button>

								</span>
							<?php endforeach ?>
						</td>
						<td>
							<span class="table-acao">
								<?php
								if ($user->active) {
									$color = 'btn light-green lighten-2';
								} else {
									$color = 'btn-danger';
								}

								?>
								<a href="<?= base_url('auth/deactivate/') ?>">
									<button type="button" class="btn <?= $color ?> btn-sm my-0">
										<?= ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?>
									</button>
								</a>
							</span>
						</td>
						<td>
							<span class="table-edit">
								<a href="<?= base_url('auth/edit_user/') ?>">

									<button type="button" class="btn btn light-blue lighten-4 btn-rounded btn-sm my-0">
										<?= anchor("auth/edit_user/" . $user->id, 'Editar'); ?>
									</button>
								</a>
							</span>
						</td>
						<td>
							<span class="table-vizualizar">
								<a href="<?= base_url('adm/detalheUsuario/') ?>">
									<button type="button" class="btn btn grey lighten-1 btn-rounded btn-sm my-0">
										<?= anchor("adm/detalheUsuario/" . $user->id, 'Vizualizar'); ?>
									</button>
								</a>
							</span>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<th class="th-sm"><?= lang('index_fname_th'); ?></th>
					<th class="th-sm"><?= lang('index_phone_th'); ?></th>
					<th class="th-sm"><?= lang('index_email_th'); ?></th>
					<th class="th-sm"><?= lang('index_groups_th'); ?></th>
					<th class="th-sm"><?= lang('index_status_th'); ?></th>
					<th class="th-sm"><?= lang('index_action_th'); ?></th>
					<th class="th-sm"><?= lang('index_vizualizar_th'); ?></th>
				</tr>
			</tfoot>
		</table>
	</div>
	</section>
</div>