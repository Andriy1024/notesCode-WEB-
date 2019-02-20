<?php
				require "db.php";
				$data = $_POST;
				if(isset($data['do_signup'])){
					$errors = array();
					if(R::count('users','login = ?', array($data['login']))>0){
						$errors[] = 'Користувач з таким логіном  вже існує';
					}
					if($data['password_2'] != $data['password']){
						$errors[] = 'Повторний пароль введений не правильно';
					}
					if(empty($errors)){
						$user = R::dispense('users');
						$user->name = $data['name'];
						$user->secondname = $data['secondname'];
						$user->login = $data['login'];
						$user->password = password_hash($data['password'],PASSWORD_DEFAULT);
						$user->test_c = 0;
                        R::store($user);
                        $_SESSION['mess'] = "Ви успішно зареєструвалися";
                        $_SESSION['color'] = "color: green;";
					}else{
                        $_SESSION['mess'] = $errors[0];
                        $_SESSION['color'] = "color: red;";
                    }
                    
                }
                header("location: ../index/signup.php");
?>