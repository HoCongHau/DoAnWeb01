<div class="container-fluid">
	<div id="top-header">
		<div class="row">
			<div class="col-12">
				<ul>
				 	<!-- <li><a href="index.php?a=3"><i class="fas fa-shopping-cart"></i>&nbsp;giỏ hàng</a></li> -->					
					<li data-toggle="modal" data-target="#login"><i class="fas fa-sign-in-alt"></i>&nbsp;Đăng nhập</li>
					<li><a href="index.php?a=6"><i class="fas fa-key"></i>&nbsp;đăng ký</a></li>
				</ul>
			</div>
		</div>
	</div> <!-- top-header -->
</div> <!--  container-fluid-fluid -->
<div class="modal" id="login">
	<div class="modal-dialog">
		<div class="modal-content">  
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Đăng Nhập</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
				<form action="index.php?a=2" target="" method="post" class="frmLogin">
					<table class="table-frm-create">
						<tr>
							<td class="align-right"><label for="txtUserName">Nhập tên đăng nhập</label></td>
							<td><input type="text" name="txtUserName" required></td>
						</tr>
						<tr>
							<td class="align-right"><label for="txtPassword">Nhập mật khẩu</label></td>
							<td><input type="password" name="txtPassword" required></td>
						</tr>
					</table>
					<input type="submit" value="Đăng nhập" class="btn btn-info btnDangNhap">
				</form>
			</div>
		</div>
	</div>
</div>