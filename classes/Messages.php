<?php 
	class Messages
	{
		public static function setMsg($text, $type) {
			if ($type == 'error') {
				$_SESSION['errormsg'] = $text;
			} else {
				$_SESSION['successMsg'] = $text;
			}
		}

		public static function display() {
			if (isset($_SESSION['errorMsg'])) {
				echo '<div class="alert alert-danger">'. $_SESSION['errormsg'].'<?div>';
				unset($_SESSION['errormsg']);
			}

			if (isset($_SESSION['successMsg'])) {
				echo '<div class="alert alert-success">'. $_SESSION['successMsg'].'<?div>';
				unset($_SESSION['successMsg']);
			}
		}
	}
?>