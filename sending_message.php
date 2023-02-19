<?php 
                            $email_address = $_POST['email_address'];
                            $message = $_POST['contact_message'];
                            
                            /* Set up connection to database  */
                            $connect = mysqli_connect("127.0.0.1","root","","bdowebtech_wildthings");

                            /* Confirm connection to database before proceeding   */
                            if (!$connect) {
                                die('No connection at this time!');
                            } else {
				                $message = str_replace("\n.","\n..",$message);
                                mail('martin.dwyer@outlook.com','wild things site contact',$message);
                                /* $query = "INSERT INTO contact_info (email_address, message) VALUES ('$email_address','$message')";
                                $result = mysqli_query($connect,$query);  */
				
                                header("Location: get_home_url()");                         
                            }
?>